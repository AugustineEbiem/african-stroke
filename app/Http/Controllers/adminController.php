<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Users;
use App\Posts;
use App\category;


class adminController extends Controller
{
    //
    public function c_pass(Request $request){
        return view('admin.password');
    }
    public function resources(Request $request){
        return view('admin.resources');
    }


}
