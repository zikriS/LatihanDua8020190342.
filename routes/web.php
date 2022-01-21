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
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('user/index','UserController@index');

    Route::get('user/tambah','BukuController@tambah');
    Route::post('user/simpan','UserController@simpan');

    Route::get('user/edit/{id}','BukuController@edit');
    Route::put('user/update/{id}','UserController@update');

    Route::get('user/hapus/{id}','BukuController@hapus');
});
