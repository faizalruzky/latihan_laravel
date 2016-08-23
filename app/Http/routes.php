<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('posts', 'PostsController');
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'SessionsController@logout');
Route::post('/login', 'SessionsController@login');
Route::auth();
Route::get('/', function () {
	return view('welcome');
});
Route::get('/articles', 'ArticlesController@index');
Route::resource('articles', 'ArticlesController');
Route::get('articles/{id}/delete','ArticlesController@destroy');





