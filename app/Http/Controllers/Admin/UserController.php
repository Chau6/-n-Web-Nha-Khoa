<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $user_result = DB::table('user')->orderBy('created_at')->get();
        return view('admin.user.index', ['users' => $user_result]);
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('user')->insert($data);
        return redirect()->route('admin.user.index');
    }
    public function edit($id){
        $user = DB::table('user')->where('id', $id)->first();
        return view('admin.user.edit',['user'=>$user]);
    }
    public function update(Request $request, $id){
        $data = $request->except('_token');
        DB::table('user')->where('id',$id)->update($data);
        return redirect()->route('admin.user.index');
    }
    public function delete($id){
        DB::table('user')->where('id',$id)->delete();
        return redirect()->route('admin.user.index');
    }
}
