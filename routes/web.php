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



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', function(){
	return redirect('/');
});

Route::get('/mk', 'HomeController@indexMK');
Route::get('/mk/home', function(){
	return redirect('/mk');
});

Route::get('/news', 'NewsController@index');
Route::get('/mk/news', 'NewsController@indexMK');

Route::get('/projects', 'ProjectsController@index');
Route::get('/mk/projects', 'ProjectsController@indexMK');

Route::get('/studio', 'StudioController@index');
Route::get('/mk/studio', 'StudioController@indexMK');

Route::get('/contact', 'ContactController@index');
Route::get('/mk/contact', 'ContactController@indexMK');