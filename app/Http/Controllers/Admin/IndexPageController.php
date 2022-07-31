<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexPageController extends Controller
{
    public function index(){
        $count_user = DB::table('user')->selectRaw("count(case when level = '0' then 1 end) as user")->first();
        $count_admin = DB::table('user')->selectRaw("count(case when level = '1' then 1 end) as admin")->first();
        $count_view_product = DB::table('products')->get()->sum('view');
        $count_view_post = DB::table('post')->get()->sum('view');

        $show_product_rate = DB::table('products')
        ->join('rating','products.id', '=', 'product_id')
        ->select('products.name as product_name', 'products.*', 'rating.*')
        ->where('products.status', 1)
        ->get();
        $show_post_rate = DB::table('post')
        ->join('rating_post','post.id', '=', 'post_id')
        ->select('post.name as post_name', 'post.*', 'rating_post.*')
        ->where('post.status', 1)
        ->get();

        // $show_post_rate = DB::table('rating_post')->where('status', 1)->average('rating');
        // $show_post_view = DB::table('post')->where('status', 1)->get();

        return view('admin.index',['total_user'=>$count_user, 'total_admin'=>$count_admin, 'count_view_product'=>$count_view_product, 'count_view_post'=>$count_view_post, 'show_product_rate'=>$show_product_rate, 'show_post_rate'=>$show_post_rate]); 
    }

    public function contact(){
        $contact = DB::table('contact')->get();
        return view('admin.contact',['contacts'=>$contact]);
    }

    public function delete($id){
        DB::table('contact')->where('id',$id)->delete();
        return redirect()->route('admin.contact')->with('success', 'Delete Success');
    }
}
