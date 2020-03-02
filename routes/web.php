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

Route::get('/transaksi', 'KasirController@transaksi');
Route::post('/insertt', 'KasirController@insertt');
Route::get('/data', 'KasirController@tampil');
Route::get('/tambah', 'KasirController@tambah');
Route::post('/insertb', 'KasirController@insertb');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
