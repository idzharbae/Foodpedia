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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu.menu');
});

// Admin Routes
Route::group(['prefix'=>'admin'],function(){
	Route::get('/', function () {
    	return view('admin.dashboard');
	});
	Route::get('/dashboard', function () {
	    return view('admin.dashboard');
	});
	Route::get('/absen', function () {
	    return view('admin.absen');
	});
	
	Route::get('/bahan', function () {
	    return view('admin.bahan');
	});
	Route::post('/bahan/save','BakuController@add');
	
	Route::get('/faq', function () {
	    return view('admin.faq');
	});
	
	Route::get('/kolegial','KolegialController@home');
	Route::post('/kolegial/save','KolegialController@add');

	Route::get('/menu','MenuController@home');
	Route::post('/menu/save','MenuController@add');

	Route::get('/message', function () {
	    return view('admin.message');
	});
	Route::get('/register', function () {
	    return view('admin.register');
	});

	Route::get('/staff','StaffController@home');
	Route::post('/staff/save','StaffController@add');

	Route::get('/testimoni', function () {
	    return view('admin.testimoni');
	});
});

Auth::routes();
// Route::get('/loginadmin', 'HomeController@index')->name('home');
Route::get('/home','AdminController@home')->name('home');
