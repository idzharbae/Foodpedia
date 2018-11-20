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

  Route::get('/bahan','BakuController@home');
	Route::post('/bahan/save','BakuController@add');

  Route::get('/faq', 'FaqController@home');
  Route::post('/faq/save', 'FaqController@add');

	Route::get('/kolegial','KolegialController@home');
	Route::post('/kolegial/save','KolegialController@add');

	Route::get('/menu','MenuController@home');
	Route::post('/menu/save','MenuController@add');

	Route::get('/message', 'ContactController@home');
  
	Route::get('/register', function () {
	    return view('admin.register');
	});

	Route::get('/staff','StaffController@home');
	Route::post('/staff/save','StaffController@add');

	Route::get('/testimoni','TestimoniController@home');
	Route::post('/testimoni/save','TestimoniController@add');

});

Auth::routes();
// Route::get('/loginadmin', 'HomeController@index')->name('home');
Route::get('/home','AdminController@home')->name('home');
