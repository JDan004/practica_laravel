<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

    }

    public function show(){
        return view('posts.show');
    }

    public function edit(){
        return view('posts.edit');
    }

    public function update(){

    }

    public function destroy(){
        
    }
}
