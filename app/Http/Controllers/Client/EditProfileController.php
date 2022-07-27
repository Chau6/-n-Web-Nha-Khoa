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
        $data = $request->except('_token','avatar');
        if(!empty($request->avatar)){
            $data_old = DB::table('user')->where('id',$id)->first();
            $url_old = public_path('images/' .$data_old->avatar);
            

            // if(file_exists($url_old)){
            //     unlink($url_old);
            // }
            $file_name = time().'-'.'avatar'.'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images'), $file_name);
            $data['avatar']=$file_name;
        }
        
        DB::table('user')->where('id',$id)->update($data);
        return redirect()->route('client.pages.information_client')->with('success','Edit Successfully');
    }
}
