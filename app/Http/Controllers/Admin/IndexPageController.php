<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexPageController extends Controller
{
    public function index(){
        $count_user = DB::table('user')->selectRaw("count(case when level = '0' then 1 end) as user")->first();
        $count_admin = DB::table('user')->selectRaw("count(case when level = '1' then 1 end) as admin")->first();
        return view('admin.index',['total_user'=>$count_user, 'total_admin'=>$count_admin]);
    }

    public function contact(){
        $contact = DB::table('contact')->get();
        return view('admin.contact',['contacts'=>$contact]);
    }

    public function delete($id){
        DB::table('contact')->where('id',$id)->delete();
        return redirect()->route('admin.contact')->with('success', 'Delete Success');
    }
}
