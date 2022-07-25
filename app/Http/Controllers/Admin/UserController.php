<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\Auth;
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
        return redirect()->route('admin.user.index')->with('success','Insert Successfully');
    }
    public function edit($id){
        $user = DB::table('user')->where('id', $id)->first();

        $edit_myself = null;
        if (Auth::user()->id == $id) {
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }
        if(Auth::user()->id != 1 && ($id == 1 || ($user->level == 1 && $edit_myself == false))){
            return redirect()->route('admin.user.index')->with('error', 'You Cant Edit');
        };

        return view('admin.user.edit',['user'=>$user]);
    }
    public function update(UserEditRequest $request, $id){
        $data = $request->except('_token');
        DB::table('user')->where('id',$id)->update($data);
        return redirect()->route('admin.user.index')->with('success','Edit Successfully');
    }
    public function delete($id){
        $user = DB::table('user')->where('id', $id)->first();
        if(($id == 1) || (Auth::user()->id != 1 && $user->level == 1)){
            return redirect()->route('admin.user.index')->with('error', 'You Cant Delete');
        }
        DB::table('user')->where('id',$id)->delete();
        return redirect()->route('admin.user.index')->with('success', 'Delete Success');
    }
}
