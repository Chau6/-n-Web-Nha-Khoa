<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Doctor\StoreDoctor;
use App\Http\Requests\Doctor\StoreUpdateDoctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(){
        $data = DB::table('doctors')->orderBy('created_at')->get();
        return view('admin.doctor.index', ['doctors' => $data]);
    }
    public function create(){
        return view('admin.doctor.create');
    }
    public function store(StoreDoctor $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('doctors')->insert($data);
        return redirect()->route('admin.doctor.index')->with('success','Insert Successfully');
    }
    public function edit($id){
        $doctor = DB::table('doctors')->where('id', $id)->first();
        return view('admin.doctor.edit',['doctor'=>$doctor]);
    }
    public function update(StoreUpdateDoctor $request, $id){
        $data = $request->except('_token');
        DB::table('doctors')->where('id', $id)->update($data);
        return redirect()->route('admin.doctor.index')->with('success','Edit Successfully');
    }
    public function delete($id){
        DB::table('doctors')->where('id', $id)->delete();
        return redirect()->route('admin.doctor.index');
    }
}
