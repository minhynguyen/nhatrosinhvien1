<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\truoghoc;

Auth::routes();
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){	
	
	Route::resource('truong', 'TruonghocController'); // route hỗ trợ lấy toàn bộ controller.
	
	
});

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/dangnhap', function () {
    return view('frontend.dangnhap');
});
Route::get('/dangki', function () {
    return view('frontend.dangki');
});
Route::get('/dangtin', function () {
    return view('frontend.dangtin');
});
Route::get('/thongtin', function () {
    return view('frontend.thongtinnhatro');
});