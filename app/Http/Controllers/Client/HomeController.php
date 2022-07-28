<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\Regex;

class HomeController extends Controller
{
    public function advice(){
        return view('client.pages.advice');
    }

    public function danh_rang(){
        return view('client.pages.danh_rang');
    }

    public function index(){
        return view('client.pages.index');
    }
    
    public function about(){
        return view('client.pages.about');
    }

    public function blog(){
        return view('client.pages.blog');
    }

    public function doctors(){
        return view('client.pages.doctors');
    }

    // Product 
    public function product(){
        $product = DB::table('products')->paginate(9);
        $category = DB::table('category')->get();
        return view('client.pages.product',['category' => $category, 'products'=>$product]);
    }

    // Post
    public function health_screening(){
        $post = DB::table('post')->paginate(9);
        $category = DB::table('category')->where('slug')->first();
        return view('client.pages.post',['category' => $category, 'posts'=>$post]);
    }
    
    // Path Product
    public function product_pages($slug){
        $product = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select('category.name as category_name','products.*')
            ->where('category.slug',$slug)
            ->where('products.status', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(9);
        
        $category = DB::table('category')->where('slug',$slug)->first();
        return view('client.pages.product_pages', ['models'=>$product, 'category'=>$category]);
    }
    // Path Product Detail
    public function product_infor($id, $slug, $slug_infor){
        $product = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select('category.name as category_name','products.*', 'products.id as pr_id')
            ->where('category.slug',$slug)
            ->where('products.slug', $slug_infor)
            ->where('products.status', 1)
            ->orderBy('created_at', 'DESC')
            ->first();
        $data_product = DB::table('comment')->where('product_id', $id)->first();
        $gallery = Gallery::where('product_id',$id)->get();
        // dd($data_product);
        $userRating = DB::table('rating')->selectRaw("count(case when product_id = $id then 1 end) as user_id")->first();
        $ratingAvg = DB::table('rating')->where('product_id', $id)->avg('rating');
        DB::table('products')->where('id',$id)->increment('view');
        return view('client.pages.product_infor',['models'=>$product, 'gallery'=>$gallery ,'ratingAvg'=>$ratingAvg, 'userRating'=>$userRating, 'product'=>$data_product]);
    }

    // Path Post
    public function post_pages($slug){
        $post = DB::table('category')
            ->join('post', 'category.id', '=', 'post.category_id')
            ->select('category.name as category_name','post.*')
            ->where('category.slug',$slug)
            ->where('post.status', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(9);
        $category = DB::table('category')->where('slug',$slug)->first();
        return view('client.pages.post_pages', ['models'=>$post, 'category'=>$category]);
    }   
    // Path Post Detail
    public function post_infor($id, $slug, $slug_infor){
        $post = DB::table('category')
        ->join('post', 'category.id', '=', 'post.category_id')
        ->select('category.name as category_name','post.*', 'post.id as post_id')
        ->where('category.slug',$slug)
        ->where('post.slug', $slug_infor)
        ->where('post.status', 1)
        ->orderBy('created_at', 'DESC')
        ->first();
        // $data_post = DB::table('comment')->where('post_id', $id)->first();
        // dd($data_product);
        $userRating = DB::table('rating_post')->selectRaw("count(case when post_id = $id then 1 end) as user_id")->first();
        $ratingAvg = DB::table('rating_post')->where('post_id', $id)->avg('rating');
        DB::table('post')->where('id',$id)->increment('view');
        return view('client.pages.post_infor',['models'=>$post, 'ratingAvg'=>$ratingAvg, 'userRating'=>$userRating]);
    }

    public function faqs(){
        return view('client.pages.faqs');
    }

    public function specialities(){
        return view('client.pages.specialities');
    }

    // Rating
    public function rating(Request $request){
        // dd($request->all());
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime;
        $check_unique =DB::table('rating')->where($request->only('product_id','user_id'))->first();
        if($check_unique){
            DB::table('rating')->where($request->only('product_id','user_id'))->update($request->only('rating'));
        }else{
            DB::table('rating')->insert($data);
        }
        return redirect()->back();
    }

    public function rating_post(Request $request){
        // dd($request->all());
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime;
        $check_unique =DB::table('rating_post')->where($request->only('post_id','user_id'))->first();
        if($check_unique){
            DB::table('rating_post')->where($request->only('post_id','user_id'))->update($request->only('rating'));
        }else{
            DB::table('rating_post')->insert($data);
        }
        return redirect()->back();
    }
    
}
