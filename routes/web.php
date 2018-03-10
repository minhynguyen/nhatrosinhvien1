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
use App\Http\Middleware\CheckLevelMiddleware;
use App\truoghoc;
use App\loainhatro;

Auth::routes();
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'FrontendController@index')->name('index');

Route::group(['prefix'=>'admin'], function(){	

Route::resource('truong', 'TruonghocController')->middleware(CheckLevelMiddleware::class); // route hỗ trợ lấy toàn bộ controller.
Route::resource('loainhatro', 'LoainhatroController')->middleware(CheckLevelMiddleware::class);
Route::resource('tienich', 'TienichController')->middleware(CheckLevelMiddleware::class);
Route::resource('user', 'UserController')->middleware(CheckLevelMiddleware::class);
Route::get('dsadmin', 'UserController@getdsadmin')->name('dsadmin')->middleware(CheckLevelMiddleware::class);
Route::get('dsmem', 'UserController@getdsmem')->name('dsmem')->middleware(CheckLevelMiddleware::class);
Route::resource('nhatro', 'nhatroController')->middleware(CheckLevelMiddleware::class);
});


Route::get('/', 'FrontendController@index');
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/dangnhap', function () {
    return view('frontend.dangnhap');
});
Route::get('/dangki', function () {
    return view('frontend.dangki');
});

Route::get('/themnhatro', 'FrontendController@gettienich')->name('themnhatro');
Route::post('/themnhatro', 'FrontendController@store')->name('create');
// Route::get('/themnhatro', function () {
//     return view('frontend.themnhatro');
// })->name('themnhatro');
Route::get('/profile', function () {
    return view('frontend.profile');
})->name('profile');
Route::get('/thongtin', function () {
    return view('frontend.thongtinnhatro');
});
Route::get('/loi', function () {
    return view('errors.khongduoctruycap');
});


