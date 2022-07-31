<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\StoreProduct;
use App\Http\Requests\Product\StoreUpdateProduct;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $product_result = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select('category.name as category_name','products.*')
            ->orderBy('created_at', 'DESC')
            ->get();
        
        return view('admin.products.index', ['products' => $product_result]);
    }
    public function delete($id){
        $result = DB::table('products')->where('id', $id)->delete();
        return redirect()->route('admin.product.index');
    }
    public function create(){
        $data = DB::table('products')->orderBy('id')->get();
        $dataA = DB::table('category')->orderBy('id')->get();
        return view('admin.products.create', ['products' => $data], ['categorys' => $dataA]);
    }
    public function store(StoreProduct $request){
        $data = $request->except('_token'); //loại trừ thằng _token ra; only chỉ hiển thị cái mình cho phép; get lấy hết
        $data['created_at'] = new \DateTime(); //insert datetime
        if(!isset($request->status))
        // $request->validate([
        //     'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);
        $imagesName = time().'.'.$request->images->extension();
        $request->images->move(public_path('images'), $imagesName);
        $data['images'] = $imagesName;
        DB::table('products')->insert($data); //câu lệnh insert 

        return redirect()->route('admin.product.index')->with('success','Insert Successfully') ; //trả về đường dẫn
    }
    public function edit($id){
        $edit = DB::table('products')->where('id','=', $id)->first();
        $category = DB::table('category')->get();
        
        return view('admin.products.edit', ['id' => $id, 'categorys' => $category, 'edit' => $edit]);
    }
    public function update(StoreUpdateProduct $request, $id){
        $data = $request->except('_token'); //lấy data ngoại trừ
        if(!isset($request->status))
            $data['status'] = 0;

        DB::table('products')->where('id','=', $id)->update($data); //rỗng thì giữ nguyên
        
        return redirect()->route('admin.product.index')->with('success','Edit Successfully') ; //trả về đường dẫn;
    }
}
