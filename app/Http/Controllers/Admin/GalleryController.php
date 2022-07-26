<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function add_gallery($product_id){
        $pro_id = $product_id;
        return view('admin.gallery.add_gallery')->with(compact('pro_id'));
    }
    public function insert_gallery(request $request,$pro_id){
        $get_image = $request->file('file');
        if($get_image){
            foreach($get_image as $image){
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $new_image);
                $gallery = new Gallery();
                $gallery->gallery_name = $new_image;
                $gallery->gallery_image = $new_image;
                $gallery->product_id = $pro_id;
                $gallery->save();



            }
        }
        return redirect()->back();
    }
    public function select_gallery(request $request){
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id',$product_id)->get();
        $gallery_count = $gallery->count();
        $output = '<form>
        '.csrf_field().'
        <table class="table table-hover">
        <thead>
            <tr>
                <td>Ordinal</td>
                <td>Image name</td>
                <td>Image</td>
            </tr>
        </thead>
        <tbody>
        ';
        if($gallery_count>0){
            $i = 0;
            foreach($gallery as $key => $gal){
                $i++;
                $output.='<tr>
                <td>'.$i.'</td>
                <td class="edit_gal_name" data-gal_id="'.$gal->gallery_id.'">'.$gal->gallery_name.'</td>
                <td><img src="'. asset('images/'.$gal->gallery_image).'" class="img-thumbnail" width="120px" height="120px"></td>

            </tr>
                
                ';
            }
        }else{
            $output.='<tr>
            <td colspan="4">The product does not have a photo gallery yet</td>
        </tr>
            
            ';
        }
        $output.='</tbody>
        </table>
        </form>

        
        ';
        echo $output;
    }
}
