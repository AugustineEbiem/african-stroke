<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\category;
use App\committee;
use App\partners;
use App\Posts;
//use DB;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome(Request $request)
    {
        return view('adminHome');
    }
    public function adminDashboard(Request $request){
        $posts = DB::select('SELECT * FROM posts JOIN categories WHERE posts.cat_id=categories.id ORDER BY posts.id DESC');
        $comm = committee::orderBy('id','desc')->get();
        $users = Users::all();
        $res =  DB::select('SELECT * FROM journals');
        $partners = partners::all();
        $categories = category::all();
        $data = array(
        'posts'=> $posts,
        'committee'=>$comm,
        'cats' =>$categories,
        'users' => $users,
        'resources'=>$res,
        'partners'=>$partners,
        );

        //return $data;
        return view('admin.dashboard')->with($data);
    }
}
