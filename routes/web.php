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

Route::get('/', function(){
	return view('welcome');
});

Route::get('/about', 'PageController@getAbout');

Route::get('/contact', 'PageController@getContact');



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home/sport', 'HomeController@sport');
Route::get('/home/politic', 'HomeController@politic');
Route::get('/home/culture', 'HomeController@culture');
Route::get('/home/football', 'TagsController@index');
Route::get('/home/show/{id}', 'PostController@show');
Route::post('/home/show/{id}', 'commentcontroler@save');
Route::post('/send', 'SendController@send');
Route::get('/email', 'SendController@email');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::resource('/categories','categoryController');
	Route::resource('/posts', 'PostController');
});


