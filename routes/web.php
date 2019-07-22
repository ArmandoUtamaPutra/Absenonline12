<?php

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


Route::get('/absensi', 'AbsensiController@get_absensi');
Route::get('/absensi/del/{id}', 'AbsensiController@delete_absensi');



Route::get('/peserta/del/{id}', 'PesertaController@delete_peserta');
Route::get('/peserta', 'PesertaController@index');
Route::post('/add_peserta', 'PesertaController@peserta')->name('add_peserta');


Route::get('/users/del/{id}', 'UsersController@delete_users');
Route::get('/users', 'UsersController@Users');

});


