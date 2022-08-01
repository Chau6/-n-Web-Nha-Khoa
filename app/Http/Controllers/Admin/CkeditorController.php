<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function upload (request $request){
        $imagesName = time().'-'.$request->upload->getClientOriginalName();
        $request->upload->move(public_path('images'), $imagesName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('images/'.$imagesName);
        $msg = 'Image successfully uploaded';
        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
        // render HTML output
        @header('Content-type: text/html; charset=utf-8');
        echo $re;

    }
}
