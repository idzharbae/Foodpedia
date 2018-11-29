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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'MainPageController@home');
Route::post('/contact', 'MainPageController@contact');
Route::post('/kolegial', 'MainPageController@kolegial');

Route::get('/menu', function () {
    return view('menu.menu');
});

// Admin Routes
Route::group(['prefix'=>'admin'],function(){
	Route::get('/', function () {
    	return view('admin.dashboard');
	});
	Route::get('/dashboard', 'DashboardController@home');
	Route::get('/dashboard/chart', 'DashboardController@chart');

	Route::get('/bahan', function () {
	    return view('admin.bahan');
	});
	Route::get('/absen', function () {
	    return view('admin.absen');
	});

  Route::get('/bahan','BakuController@home');
	Route::post('/bahan/save','BakuController@add');
	Route::post('/bahan/update/{id}','BakuController@edit');
	Route::get('/bahan/delete/{id}','BakuController@delete');

	Route::get('/faq', 'FaqController@home');
	Route::post('/faq/save', 'FaqController@add');
	Route::post('/faq/update/{id}', 'FaqController@edit');
	Route::get('/faq/delete/{id}', 'FaqController@delete');

	Route::get('/kolegial','KolegialController@home');
	Route::post('/kolegial/save','KolegialController@add');
	Route::post('/kolegial/update/{id}','KolegialController@edit');
	Route::get('/kolegial/delete/{id}','KolegialController@delete');
	Route::get('/kolegial/approve/{id}','KolegialController@approve');

	Route::get('/menu','MenuController@home');
	Route::post('/menu/save','MenuController@add');
	Route::post('/menu/update/{id}','MenuController@edit');
	Route::get('/menu/delete/{id}','MenuController@delete');

	Route::get('/message', 'ContactController@home');
	Route::get('/message/delete/{id}', 'ContactController@delete');

	Route::get('/register','AdminController@list');
	Route::post('/register/delete/{id}','AdminController@delete');
	Route::post('/register/update/{id}','AdminController@edit');

	Route::get('/staff','StaffController@home');
	Route::post('/staff/save','StaffController@add');
	Route::post('/staff/update/{id}','StaffController@edit');
	Route::get('/staff/delete/{id}','StaffController@delete');

	Route::get('/testimoni','TestimoniController@home');
	Route::post('/testimoni/save','TestimoniController@add');
	Route::post('/testimoni/update/{id}','TestimoniController@edit');
	Route::get('/testimoni/delete/{id}','TestimoniController@delete');


	Route::get('/absen','AbsenController@home');
	Route::post('/absen/cek','AbsenController@cek');
	Route::get('/datang/{id}','AbsenController@datang');
	Route::get('/pulang/{id}','AbsenController@pulang');

});

Auth::routes();
// Route::get('/loginadmin', 'HomeController@index')->name('home');
Route::get('/home','AdminController@home')->name('home');
