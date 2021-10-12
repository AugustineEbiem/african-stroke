<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('welcome');
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
