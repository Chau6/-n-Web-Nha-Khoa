<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function JmesPath\search;

class SearchAjaxController extends Controller
{
    public function PostSearchProduct(Request $request){
        // $search = $request->searchProduct;
        // $product = DB::table('products')->paginate(9);
        // if($search=request()->search){
        //     $product = DB::table('products')->where('name','LIKE','%'.$search.'%')->orwhere('price','LIKE','%'.$search.'%')->paginate(3);
        // }
        // $category = DB::table('category')->get();
        // return view('client.pages.product',['category' => $category, 'products'=>$product]);
    }
}
