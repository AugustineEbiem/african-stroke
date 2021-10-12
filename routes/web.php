<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });
 Route::get('/about', function(){
    return view('pages.about');

});

Route::get('/services', function(){
    return view('pages.services');

});

Route::get('/home', function(){
    return view('pages.home');

});
Route::get('/blogs', function(){
    return view('pages.blogs');

});
Route::get('/resources',function(){
    return view('pages.resources');
});
Route::get('/news',function(){
    return view('pages.news');
});
Route::get('/gallery',function(){
    return view('pages.gallery');
});
Route::get('/membership',function(){
    return view('pages.membership');
});
Route::get('/partnerships',function(){
    return view('pages.partnership');
});

Route::get('/master',function(){
    return view('master.dashboard');
});

Route::get('/master/login',function(){
    return view('master.login');
});

Route::get('/blog/{id}', function($id){
    return "This is blog ".$id;

});
