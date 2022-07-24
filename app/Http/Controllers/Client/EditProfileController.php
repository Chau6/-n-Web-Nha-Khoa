<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\EditProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function information_client(){
        $user_result = DB::table('user')->where('id',Auth::user()->id)->first();
        return view('client.pages.information_client', ['user' => $user_result]);
    }
    public function edit_profile($id){
        $user = DB::table('user')->where('id', $id)->first();
        return view('client.pages.edit_profile', ['user'=>$user]);
    }
    public function post_edit_profile(EditProfileRequest $request, $id){
        $data = $request->except('_token');
        DB::table('user')->where('id',$id)->update($data);
        return redirect()->route('client.pages.information_client')->with('success','Edit Successfully');
    }
}
