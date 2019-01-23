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

Route::get('login', 'LoginController@index');
Route::get('logout', 'LoginController@logout');
Route::post('authen', 'LoginController@authenticate');

Route::get('registers', 'RegisterController@index');
Route::post('registering', 'RegisterController@registerForm');

Route::get('/', 'UserController@index');
Route::post('addyourfavouriteform', 'UserController@setAddYourFavourite');
Route::get('getfavposts', 'UserController@getFavPosts');

// Auth::routes();
