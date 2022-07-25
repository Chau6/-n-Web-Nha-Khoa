<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dat_LichController extends Controller
{
    public function index(){
        $result = DB::table('dat_lich')->get();
        return view('admin.dat_lich.index', ['dat_lich' => $result]);
    }
    public function edit($id){
        $edit = DB::table('dat_lich')->where('id', $id)->first();
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('admin.dat_lich.edit',['edit'=>$edit,'doctors' => $doctor,]);
    }
    public function update(Request $request, $id){
        $data = $request->except('_token');
        DB::table('dat_lich')->where('id',$id)->update($data);
        return redirect()->route('admin.dat_lich.index')->with('success','Edit Successfully');
    }
    public function delete($id){
        DB::table('dat_lich')->where('id',$id)->delete();
        return redirect()->route('admin.dat_lich.index');
    }
}
