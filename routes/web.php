<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Posts;
use App\committee;
use App\category;
//use DB;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //$posts = DB::select('SELECT * FROM posts ORDER BY id desc');
    $posts = DB::select('SELECT * FROM posts JOIN categories WHERE posts.cat_id=categories.id ORDER BY posts.id DESC');
    $comm = committee::orderBy('id','desc')->get();
    $data = array(
        'news'=> $posts,
        'committee'=>$comm
    );
    return view('welcome')->with($data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    Route::get('admin/dashboard', 'HomeController@adminDashboard')->name('admin.dashboard');

    Route::get('admin/change_password', 'adminController@c_pass')->name('admin.password');
    Route::resource('admin/posts','PostsController');
    Route::resource('admin/journals','JournalsController');
    Route::resource('admin/gallery','GalleryController');
    Route::resource('admin/blogs','BlogsController');
    Route::resource('admin/category','CategoryController');
    Route::post('admin/category/create','CategoryController@store');
    Route::get('admin/change_password', 'adminController@c_pass')->name('admin.password');
    Route::get('admin/profile','adminController@profile')->name('admin.profile');
    Route::post('admin/profile/','adminController@update_profile')->name('admin_profile');

    Route::get('admin/resources', 'adminController@resources')->name('admin.resources');

    Route::get('admin/members','UserController@index');
    Route::get('admin/members/{id}','UserController@show');
    Route::get('/home', function(){
        return view('pages.home');

    });



 });




 Route::get('/about', function(){
    return view('pages.about');

});

Route::get('/services', function(){
    return view('pages.services');

});


Route::get('/blogs', function(){
    return view('pages.blogs');

});
Route::get('/resources',function(){
    return view('pages.resources');
});
Route::get('/news',function(){
    $cats = category::all();
    $posts = DB::select('SELECT * FROM posts JOIN categories WHERE posts.cat_id=categories.id ORDER BY posts.id DESC');
    $data = [
        'cats'=>$cats,
        'posts' => $posts,
    ];
    return view('pages.news')->with($data);
});
Route::get('/gallery',function(){
    return view('pages.gallery');
});
Route::get('/membership',function(){
    return view('pages.membership');
});
Route::get('/partners',function(){
    return view('pages.partnership');
});

Route::get('/master',function(){
    return view('master.dashboard');
});

Route::get('/fund', function(){
    return view('pages.fundz');
});

Route::get('/committee', function(){
    return view('pages.committee');
});

Route::get('/board', function(){
    return view('pages.board');
});

Route::get('/master/login',function(){
    return view('master.login');
});

Route::get('/blog/{id}', function($id){
    return "This is blog ".$id;

});

Route::get('/journal', function(){
    return view('pages.journals');
});
