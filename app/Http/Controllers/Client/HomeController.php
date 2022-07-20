<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    public function information_client(){
        return view('client.pages.information_client');
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
        $category = DB::table('category')->get();
        return view('client.pages.product',['products' => $category]);
    }

    // Post
    public function health_screening(){
        $category = DB::table('category')->get();
        return view('client.pages.post',['posts' => $category]);
    }
    
    // Path Product
    public function product_pages($slug){
        $product = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select('category.name as category_name','products.*')
            ->where('category.slug',$slug)
            ->where('products.status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();
        $category = DB::table('category')->where('slug',$slug)->first();
        return view('client.pages.product_pages', ['models'=>$product, 'category'=>$category]);
    }
    // Path Product Detail
    public function product_infor($slug, $slug_infor){
        $product = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select('category.name as category_name','products.*')
            ->where('category.slug',$slug)
            ->where('products.status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();
            return view('client.pages.product_infor',['models'=>$product]);
    }

    // Path Post
    public function post_pages($slug){
        $post = DB::table('category')
            ->join('post', 'category.id', '=', 'post.category_id')
            ->select('category.name as category_name','post.*')
            ->where('category.slug',$slug)
            ->where('post.status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();
        $category = DB::table('category')->where('slug',$slug)->first();
        return view('client.pages.post_pages', ['models'=>$post, 'category'=>$category]);
    }   
    // Path Post Detail
    public function post_infor($slug, $slug_infor){
        $post = DB::table('category')
            ->join('post', 'category.id', '=', 'post.category_id')
            ->select('category.name as category_name','post.*')
            ->where('category.slug',$slug)
            ->where('post.status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();
            return view('client.pages.post_infor',['posts'=>$post]);
    }
    
    public function contact(){
        return view('client.pages.contact');
    }

    public function faqs(){
        return view('client.pages.faqs');
    }

    public function appointment(){
        return view('client.pages.appointment');
    }

    public function specialities(){
        return view('client.pages.specialities');
    }
    public function rating(){
        return view('client.pages.rating');
    }
    
}
