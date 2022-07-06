<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function basicTable(){
        return view('admin.basicTable');
    }
    
    public function flotChart(){
        return view('admin.flotChart');
    }

    public function errorPage(){
        return view('admin.errorPage');
    }

    public function registration(){
        return view('admin.registration');
    }
}
