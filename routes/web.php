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
// Route::get('test', function(){
// 	$user = new App\User;
// 	$user->name = "Seul";
// 	$user->email = "seul@zarraga.com";
// 	$user->password = bcrypt("123123");
// 	$user->save();
// 	return $user;
// });
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('/saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

Route::resource('mensajes', 'MessagesController');

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
