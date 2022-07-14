<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\StoreProduct;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $result = DB::table('products')->get();
        return view('admin.products.index', ['products' => $result]);
    }
    public function delete($id){
        $result = DB::table('products')->where('id', $id)->delete();
        return redirect()->route('admin.products.index');
    }
    public function create(){
        $data = DB::table('products')->orderBy('id')->get();
        return view('admin.products.create', ['products' => $data]);
    }
    public function store(StoreProduct $request){
        $data = $request->except('_token'); //loại trừ thằng _token ra; only chỉ hiển thị cái mình cho phép; get lấy hết
        $data['created_at'] = new \DateTime(); //insert datetime
        
        DB::table('products')->insert($data); //câu lệnh insert 

        return redirect()->route('admin.products.index')->with('success','Insert Successfully') ; //trả về đường dẫn
    }
    public function edit($id){
        $edit = DB::table('products')->where('id','=', $id)->first();
        $data = DB::table('products')->get();

        return view('admin.products.edit', ['id' => $id, 'products' => $data, 'edit' => $edit]);
    }
    public function update(StoreProduct $request, $id){
        $data = $request->except('_token'); //lấy data ngoại trừ

        DB::table('products')->where('id','=', $id)->update($data); //rỗng thì giữ nguyên
        
        return redirect()->route('admin.products.index')->with('success','Edit Successfully') ; //trả về đường dẫn;
    }
}
