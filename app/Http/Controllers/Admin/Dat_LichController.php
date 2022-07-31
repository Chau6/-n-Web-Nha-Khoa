<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Doctor\StoreUpdateDatLich;
use Illuminate\Support\Facades\DB;

class Dat_LichController extends Controller
{
    public function index(){
        $result = DB::table('booking')->get();
        return view('admin.booking.index', ['booking' => $result]);
    }
    public function edit($id){
        $edit = DB::table('booking')->where('id', $id)->first();
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('admin.booking.edit',['edit'=>$edit,'doctors' => $doctor,]);
    }
    public function update(StoreUpdateDatLich $request, $id){
        $data = $request->except('_token');
        DB::table('booking')->where('id',$id)->update($data);
        return redirect()->route('admin.booking.index')->with('success','Edit Successfully');
    }
    public function delete($id){
        DB::table('booking')->where('id',$id)->delete();
        return redirect()->route('admin.booking.index');
    }
}
