<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Users;
use App\Posts;
use App\category;
use App\User;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //
    public function c_pass(Request $request){
        return view('admin.password');
    }
    public function resources(Request $request){
        return view('admin.resources');
    }

    public function profile(Request $request){
        $admin = Users::find(Auth::user()->id);
        return view('admin.profile')->with('admin',$admin);

    }

    public function update_profile(Request $request){
        $profile = Users::find(Auth::user()->id);
        $profile->name = $request->full_name;
        $profile->save();
        return redirect('admin/profile')->with('Success','Admin Profile Updated Successfully');
    }



}
