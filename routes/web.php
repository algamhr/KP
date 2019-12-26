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

use Illuminate\Auth\Access\Response;

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('barangmasuk', 'MasukController');
Route::resource('barangkeluar', 'KeluarController');
Route::resource('kategoribarang', 'KategoriBarangController');
Route::resource('divisi', 'DivisiController');