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

Route::get('/test', function () {
    return view('tets1');
});
use App\Http\Middleware\CheckLevelMiddleware;
use App\truoghoc;
use App\loainhatro;

Auth::routes();
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'FrontendController@index')->name('index');
// Route::get('/full', 'FrontendController@update')->name('full');
Route::resource('full', 'FrontendController');
Route::group(['prefix'=>'admin'], function(){	

		Route::resource('truong', 'TruonghocController')->middleware(CheckLevelMiddleware::class); // route hỗ trợ lấy toàn bộ controller.

		Route::resource('admin', 'adminController')->middleware(CheckLevelMiddleware::class);

		Route::resource('loainhatro', 'LoainhatroController')->middleware(CheckLevelMiddleware::class);
		Route::resource('tienich', 'TienichController')->middleware(CheckLevelMiddleware::class);
		Route::resource('user', 'UserController')->middleware(CheckLevelMiddleware::class);
		Route::get('dsadmin', 'UserController@getdsadmin')->name('dsadmin')->middleware(CheckLevelMiddleware::class);
		Route::get('dsmem', 'UserController@getdsmem')->name('dsmem')->middleware(CheckLevelMiddleware::class);
		Route::resource('nhatro', 'nhatroController')->middleware(CheckLevelMiddleware::class);
		Route::resource('loaibaidang', 'loaibaidangController')->middleware(CheckLevelMiddleware::class);
		Route::resource('baidang', 'baidangController')->middleware(CheckLevelMiddleware::class);
		Route::resource('binhluanadmin', 'binhluanbackendController');


		Route::get('/loaibaidang/delete/{id}', ['as'=>'loaibaidang.delete', 'uses'=>'loaibaidangController@destroy']);


		Route::get('/truonghoc/delete/{id}', ['as'=>'truong.delete', 'uses'=>'TruonghocController@destroy']);

		Route::get('/binhluanadmin/delete/{id}', ['as'=>'binhluan.delete', 'uses'=>'binhluanbackendController@destroy']);

		Route::get('/baidang/delete/{id}', ['as'=>'baidang.delete', 'uses'=>'baidangController@destroy']);

		Route::get('/nhatro/delete/{id}', ['as'=>'nhatro.delete', 'uses'=>'nhatroController@destroy']);
});
Route::get('/loaibaidang', 'loaibaidangController@getAddEditRemoveColumnData')->name('loaibaidang')->middleware(CheckLevelMiddleware::class);

Route::get('/nhatro', 'nhatroController@getAddEditRemoveColumnData')->name('nhatro')->middleware(CheckLevelMiddleware::class);

Route::get('/binhluanadmin', 'binhluanbackendController@getAddEditRemoveColumnData')->name('binhluan')->middleware(CheckLevelMiddleware::class);

Route::get('/baidang', 'baidangController@getAddEditRemoveColumnData')->name('baidang')->middleware(CheckLevelMiddleware::class);

Route::get('/truonghoc', 'TruonghocController@getAddEditRemoveColumnData')->name('truonghoc')->middleware(CheckLevelMiddleware::class);

Route::get('/truong','TruonghocController@index')->name('truong');

// Route::get('/search','TruonghocController@search');

Route::resource('binhluan', 'binhluanController');
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePassword1');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
// Route::get('/search','SearchController@search');
Route::resource('nhatrofrontend', 'NhaTroFrontendController');
Route::resource('baidangfrontend', 'baidangfrontendController');
Route::get('/', 'FrontendController@index')->name('index');
Route::resource('datphongfrontend', 'datphongfrontendController');
Route::get('/dangtin/{id}', ['as'=>'nhatro.dangtin', 'uses'=>'baidangfrontendController@dangtin']);
// Route::get('/timkiem/{maLoai}/{giaTu}/{giaDen}/{dienTich}', ['uses' => 'frontendController@dsNhatro_timkiem']);
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/dangnhap', function () {
    return view('frontend.dangnhap');
});
Route::get('/sosanh', function () {
    return view('frontend.nhatro.compare');
});
// Route::get('/dangki', function () {
//     return view('frontend.dangki');
// });
// Route::get('/timkiem','FrontendController@timkiem');
Route::get('/timkiem/{loainhatro}/{giaTu}/{giaden}/{dientich}', ['uses' => 'frontendController@timkiem']);
// Route::get('/testMail', 'datphongfrontendController@testMail');
// Route::get('/themnhatro', 'FrontendController@gettienich')->name('themnhatro');
// Route::post('/themnhatro', 'FrontendController@store')->name('create');

// Route::get('/editnhatro', 'FrontendController@edit')->name('editnhatro');
// Route::post('/edit', 'FrontendController@update')->name('edit');

// Route::get('/themnhatro', function () {
//     return view('frontend.themnhatro');
// })->name('themnhatro');
// Route::get('/profile', function () {
//     return view('frontend.profile');
// })->name('profile');
Route::get('/dangtin', 'baidangfrontendController@dangtin')->name('dangtin');
Route::get('/profile', 'FrontendController@getnhatro')->name('profile');
Route::resource('sinhvien', 'sinhvienController');
Route::get('/ttsinhvien', 'sinhvienController@index')->name('ttsinhvien');
Route::get('/thongtin', function () {
    return view('frontend.nhatro.show');
});
Route::get('/loi', function () {
    return view('errors.khongduoctruycap');
});
Route::get('/timnhatro', 'FrontendController@timnhatro');
// Route::get('/book', 'FrontendController@book')->name('book');
// Route::get('/book/{id}', 'FrontendController@book')->name('book');

// Route::get('/search', 'loaibaidangController@anyData')->name('search');



// Route::get('/loaibaidang/delete/{loaibaidang}', ['as' => 'loaibaidang.delete', 'loaibaidang' => 'loaibaidangController@destroy']);




// Route::get('/timkiem/{loainhatro}/{giaTu}/{giaden}/{dientich}', ['uses' => 'loaibaidangController@destroy']);