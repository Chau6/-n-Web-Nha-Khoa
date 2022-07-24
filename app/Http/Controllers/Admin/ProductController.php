<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\StoreProduct;
use App\Http\Requests\Product\StoreUpdateProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductDetails;

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
        $data['status'] = 0;
        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'photos'=>'required',
        ]);
        $imagesName = time().'.'.$request->images->extension();
        $request->images->move(public_path('images'), $imagesName);
        $data['images'] = $imagesName;

        if($request->hasFile('photos')) {
			$allowedfileExtension=['jpg','png'];
			$files = $request->file('photos');
            // flag xem có thực hiện lưu DB không. Mặc định là có
			$exe_flg = true;
			// kiểm tra tất cả các files xem có đuôi mở rộng đúng không
			foreach($files as $file) {
				$extension = $file->getClientOriginalExtension();
				$check=in_array($extension,$allowedfileExtension);

				if(!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
					$exe_flg = false;
					break;
				}
			} 
			// nếu không có file nào vi phạm validate thì tiến hành lưu DB
			if($exe_flg) {
                // lưu product
				$products= Product::create($request->all());
                // duyệt từng ảnh và thực hiện lưu
				foreach ($request->photos as $photo) {
					$filename = $photo->store('photos');
					ProductDetails::create([
						'product_id' => $products->id,
						'filename' => $filename
					]);
				}
				echo "Upload successfully";
			} else {
				echo "Falied to upload. Only accept jpg, png photos.";
			}
		}
        $filename = $photo->storeAs('photos', $photo->getClientOriginalName());
        
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
