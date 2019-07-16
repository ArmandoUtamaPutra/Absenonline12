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



Route::post('login_post','UsersController@login')->name('login_post');
Route::get('logout','UsersController@logout')->name('logout');

Route::get('/login', function () {
    return view('login');
});

Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/peserta', function () {
    return view('peserta');
});

Route::get('/absensi', function () {
    return view('absensi');
});

Route::get('/users', function () {
    return view('users');
});
});
