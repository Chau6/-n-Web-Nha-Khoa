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

    public function product(){
        $category = DB::table('category')->where('category.parent_name','category.id')->get();
        return view('client.pages.product',['products' => $category]);
    }
    
    
    public function health_screening(){
        $post_result = DB::table('category')
            ->join('post', 'category.id', '=', 'post.category_id')
            ->select('category.name as category_name','post.*')
            // ->where('category.parent_name',5)
            ->where('post.slug','health-screening')
            ->where('post.status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('client.pages.health_screening',['posts' => $post_result]);
    }

    public function product_pages($slug){
        $product = DB::table('products')->where('slug',$slug)->first();
        return view('client.pages.product_pages', ['products'=>$product]);
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
