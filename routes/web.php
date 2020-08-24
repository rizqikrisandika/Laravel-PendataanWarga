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
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('logout','OtentikasiController@logout')->name('get.logout');
    Route::get('warga','WargaController@index')->name('warga');
    Route::get('warga/tambah-warga','WargaController@create')->name('create.warga');
});

Route::get('/','OtentikasiController@index')->name('login');
Route::post('login','OtentikasiController@login')->name('post.login');