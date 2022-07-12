<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $hello = new Post;
        $hello->hi();
        return view('admin.post.index');
    }

    public function create(){
        return view('admin.post.create');
    }

    public function store(){
        return view('admin.post.index');
    }

    public function edit(){
        return view('admin.post.edit');
    }

    public function update(){
        return view('admin.post.index');
    }

    public function delete(){
        return view('admin.post.index');
    }
}
