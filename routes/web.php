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
Route::get('/news/write', 'NewsController@write');
Route::get('/news/update/{id}', 'NewsController@news_get');
Route::get('/mk/news/update/{id}', 'NewsController@news_get_mk');
Route::post('/news/save', 'NewsController@save');
Route::post('/news/update/save/{id}', 'NewsController@update');
Route::post('/news/update/delete/{id}', 'NewsController@delete');

Route::get('/projects', 'ProjectsController@index');
Route::get('/mk/projects', 'ProjectsController@indexMK');

Route::post('/projects/create', 'ProjectsController@create_project');
Route::get('/projects/view/{id}', 'ProjectsController@view');
Route::get('/mk/projects/view/{id}', 'ProjectsController@view_mk');

Route::post('/projects/update/{id}', 'ProjectsController@update');
Route::post('/projects/delete/{id}', 'ProjectsController@delete');
Route::post('/projects/view/delete/{id}', 'ProjectsController@delete');
Route::post('image/do-upload', 'ProjectsController@do_image_upload');
Route::post('destroy/{id}', 'ProjectsController@destroy');


Route::get('/studio', 'StudioController@index');
Route::get('/mk/studio', 'StudioController@indexMK');

Route::get('/contact', 'ContactController@index');
Route::get('/mk/contact', 'ContactController@indexMK');