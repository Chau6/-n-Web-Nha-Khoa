<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('client.pages.index');
    }
    
    public function about(){
        return view('client.pages.about');
    }

    public function blog(){
        return view('client.pages.blog');
    }

    public function doctors(){
        return view('client.pages.doctors');
    }

    public function product(){
        return view('client.pages.product');
    }

    public function contact(){
        return view('client.pages.contact');
    }

    public function faqs(){
        return view('client.pages.faqs');
    }

    public function appointment(){
        return view('client.pages.appointment');
    }

    public function specialities(){
        return view('client.pages.specialities');
    }
    public function rating(){
        return view('client.pages.rating');
    }
    public function product_pages(){
        return view('client.pages.product_pages');
    }
}
