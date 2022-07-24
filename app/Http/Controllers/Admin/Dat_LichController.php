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
}
