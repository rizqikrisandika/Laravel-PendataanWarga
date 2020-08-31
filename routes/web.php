<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['admin']], function () {
    Route::post('warga/tambah-warga','WargaController@store')->name('create.warga');
    Route::get('warga/edit-warga/{warga}','WargaController@edit')->name('edit.warga');
    Route::put('warga/edit-warga/{warga}','WargaController@update')->name('update.warga');
    Route::delete('warga/{warga}','WargaController@destroy')->name('delete.warga');
    Route::get('warga/detail/{warga}','WargaController@show')->name('detial.warga');
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('logout','OtentikasiController@logout')->name('get.logout');
    Route::get('warga','WargaController@index')->name('warga');
    Route::get('warga/tambah-warga','WargaController@create')->name('create.warga');
});

Route::get('/','OtentikasiController@index')->name('login');
Route::post('login','OtentikasiController@login')->name('post.login');