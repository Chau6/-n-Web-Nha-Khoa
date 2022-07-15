<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Category\StoreCategory;
use App\Http\Requests\StoreUpdateCategory;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        // $hello = new Post;
        // $hello->hi();
        $post_result = DB::table('category')
            ->join('post', 'category.id', '=', 'post.category_id')
            ->select('category.name as category_name','post.*')
            ->orderBy('created_at', 'DESC')
            ->get();
            
        // $post_result = DB::table('post')->orderBy('created_at')->get();
        return view('admin.post.index', ['post'=>$post_result]);
    }
    public function delete($id){
        DB::table('product')->where('id', '=', $id)->delete();
        return redirect()->route('admin.post.index');
    }
    public function create(){
        $result = DB::table('category')->orderBy('created_at', 'DESC')->get();
        return view('admin.post.create',['categorys'=>$result]);
    }
    public function store(Request $request){
        $data = $request->except('_token');
        // $data = dd($request->except('_token'));
        $data['created_at'] = new \DateTime;

        DB::table('post')->insert($data);
        return redirect()->route('admin.post.index'); 
    }
    public function edit($id){
        //run ok 
        $product = DB::table('product')->where('id', $id)->first();
        $category = DB::table('category')->get();
        return view('admin.product.edit' ,['id'=>$id, 'product'=>$product, 'categorys'=>$category]);
    }
    public function update(Request $request, $id){
        $data = $request->except('_token');

        DB::table('product')->where('id', $id)->update($data);
        return redirect()->route('admin.post.index');
    }
}
