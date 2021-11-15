<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\category;

class PagesController extends Controller
{
    //
    public function index(){
        $posts = Posts::all();
        return view('welcome')->with('posts',$posts);
    }

    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }

    public function blogs(){
        return view('pages.blog');
    }

    public function membership(){
        return view('pages.membership');
    }
}
