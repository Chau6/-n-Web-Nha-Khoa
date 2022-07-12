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
        $result = DB::table('category')->orderBy('parent_name', 'desc')->get();
        return view('admin.post.index', ['categorys' => $result]);
    }
    public function delete($id){
        $result = DB::table('category')->where('id', $id)->delete();
        return redirect()->route('admin.post.index');
    }
    public function create(){
        $data = DB::table('category')->orderBy('id')->get();
        return view('admin.post.create', ['categorys' => $data]);
    }
    public function store(Request $request){
        $data = $request->except('_token'); //loại trừ thằng _token ra; only chỉ hiển thị cái mình cho phép; get lấy hết
        $data['created_at'] = new \DateTime(); //insert datetime
        
        DB::table('category')->insert($data); //câu lệnh insert 

        return redirect()->route('admin.post.index')->with('success','Insert Successfully') ; //trả về đường dẫn
    }
    public function edit($id){
        $edit = DB::table('category')->where('id','=', $id)->first();
        $data = DB::table('category')->get();

        return view('admin.post.edit', ['id' => $id, 'categorys' => $data, 'edit' => $edit]);
    }
    public function update(Request $request, $id){
        $data = $request->except('_token'); //lấy data ngoại trừ

        DB::table('category')->where('id','=', $id)->update($data); //rỗng thì giữ nguyên
        
        return redirect()->route('admin.post.index')->with('success','Edit Successfully') ; //trả về đường dẫn;
    }
}
