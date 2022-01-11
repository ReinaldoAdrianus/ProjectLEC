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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware('customer')->group(function () {
    Route::get('pesan/{id}', 'PesanController@index');
    Route::post('pesan/{id}', 'PesanController@pesan');
    Route::get('check-out', 'PesanController@check_out');
    Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');
    Route::get('history', 'HistoryController@index');
    Route::get('history/{id}', 'HistoryController@detail');
});

Route::middleware('admin')->group(function () {
    Route::get('insert', 'InsertController@insert')->name('insert');
    Route::post('store', 'InsertController@store')->name('insert');
    Route::get('pesan/{id}', 'PesanController@index');
});
