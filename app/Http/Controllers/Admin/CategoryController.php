<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Category\StoreUpdateCategory;
use App\Http\Requests\Category\StoreCategory;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $result = DB::table('category')
        ->join('products', 'category.id', '=', 'products.category_id')
        ->select('category.name as category_name', 'products.id as product_id', 'category.*')
        ->orderBy('parent_name', 'desc')
        ->get();
        $total_product = DB::table('products')->count('name');
        $total_post = DB::table('post')->count('name');
        return view('admin.category.index', ['categorys' => $result, 'total_product'=>$total_product, 'total_post'=>$total_post]);
    }
    public function delete($id){
        $result = DB::table('category')->where('id', $id)->delete();
        return redirect()->route('admin.category.index');
    }
    public function create(){
        $data = DB::table('category')->orderBy('id')->get();
        return view('admin.category.create', ['categorys' => $data]);
    }
    public function store(StoreCategory $request){
        $data = $request->except('_token'); //loại trừ thằng _token ra; only chỉ hiển thị cái mình cho phép; get lấy hết
        $data['created_at'] = new \DateTime(); //insert datetime
        
        DB::table('category')->insert($data); //câu lệnh insert 

        return redirect()->route('admin.category.index')->with('success','Insert Successfully') ; //trả về đường dẫn
    }
    public function edit($id){
        $edit = DB::table('category')->where('id','=', $id)->first();
        $data = DB::table('category')->get();

        return view('admin.category.edit', ['id' => $id, 'categorys' => $data, 'edit' => $edit]);
    }
    public function update(StoreUpdateCategory $request, $id){
        $data = $request->except('_token'); //lấy data ngoại trừ

        DB::table('category')->where('id','=', $id)->update($data); //rỗng thì giữ nguyên
        
        return redirect()->route('admin.category.index')->with('success','Edit Successfully') ; //trả về đường dẫn;
    }
}
