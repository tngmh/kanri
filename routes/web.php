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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//追記
//Route::group(['middleware' => ['admin.auth']], function () {
    //Route::get('/admin', 'admin\AdminMainController@show');
    //Route::post('/admin/logout', 'admin\AdminLogoutController@logout');
//});

//Route::group(['prefix' => 'admin'], function () {
    //Route::get('/login', 'admin\AdminLoginController@showForm');
   // Route::post('/login', 'admin\AdminLoginController@login');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//追記
Route::get('crud/', 'CrudController@getIndex');
