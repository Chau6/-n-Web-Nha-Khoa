<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Post\PostRequest;
use App\Http\Requests\Post\PostUpdateRequest;
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

    public function create(){
        $result = DB::table('category')->orderBy('id')->get();
        return view('admin.post.create',['categorys'=>$result]);
    }
    public function store(PostRequest $request){
        $data = $request->except('_token');
        // $data = dd($request->except('_token'));
        $data['created_at'] = new \DateTime;
        $data['status'] = 0;
        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'extra_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imagesName = time().'.'.$request->images->extension();
        $request->images->move(public_path('images'), $imagesName);
        $data['images'] = $imagesName;
        // ------------------------
        $imagesName = time().'.'.$request->extra_images->extension();
        
        $request->extra_images->move(public_path('images'), $imagesName);
        $data['extra_images'] = $imagesName;

        DB::table('post')->insert($data);
        return redirect()->route('admin.post.index')->with('success','Insert Successfully'); 
    }
    public function edit($id){
        //run ok 
        $post = DB::table('post')->where('id', $id)->first();
        $category = DB::table('category')->get();
        return view('admin.post.edit' ,['id'=>$id, 'post'=>$post, 'categorys'=>$category]);
    }
    public function update(PostUpdateRequest $request, $id){
        $data = $request->except('_token');
        if(!isset($request->status))
            $data['status'] = 0;

        DB::table('post')->where('id', $id)->update($data);
        return redirect()->route('admin.post.index')->with('success','Edit Successfully');
    }

    public function delete($id){
        DB::table('post')->where('id', '=', $id)->delete();
        return redirect()->route('admin.post.index');
    }
}
