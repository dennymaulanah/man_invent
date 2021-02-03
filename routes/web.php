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

Route::get('/', 'AuthController@login')->name('login');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/disable', 'DashboardController@disable');


Route::group(['middleware'=> ['auth','checkRole:1']], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/users','UsersController@index');
    Route::post('/users/create','UsersController@create');
    Route::get('/users/{id}/edit','UsersController@edit');
    Route::post('/users/{id}/update','UsersController@update');
    Route::get('/users/{id}/delete','UsersController@delete');
});

Route::group(['middleware'=> ['auth','checkRole:1,2']], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/users','UsersController@index');
    Route::post('/users/create','UsersController@create');
    Route::get('/users/{id}/edit','UsersController@edit');
    Route::post('/users/{id}/update','UsersController@update');
    Route::get('/users/{id}/delete','UsersController@delete');

    Route::get('/kategori', 'KategoriController@index');
    Route::post('/kategori/create', 'KategoriController@create');
    Route::get('/kategori/{id}/edit','KategoriController@edit');
    Route::post('/kategori/{id}/update','KategoriController@update');
    Route::get('/kategori/{id}/delete','KategoriController@delete');
});

Route::group(['middleware'=> ['auth','checkRole:1,2,3']], function(){
    Route::get('/dashboard','DashboardController@index');
    
    Route::get('/barang', 'BarangController@index');
    Route::post('/barang/create', 'BarangController@create');
    Route::get('/barang/{id}/edit','BarangController@edit');
    Route::post('/barang/{id}/update','BarangController@update');
    Route::get('/barang/{id}/delete','BarangController@delete');

    Route::get('/ruangan', 'RuanganController@index');
    Route::post('/ruangan/create', 'RuanganController@create');
    Route::get('/ruangan/{id}/edit','RuanganController@edit');
    Route::post('/ruangan/{id}/update','RuanganController@update');
    Route::get('/ruangan/{id}/delete','RuanganController@delete');
});

Route::group(['middleware'=> ['auth','checkRole:2']], function(){
    Route::get('/staff', 'StaffController@index');
    Route::post('/staff/create', 'StaffController@create');
    Route::get('/staff/{id}/edit','StaffController@edit');
    Route::post('/staff/{id}/update','StaffController@update');
    Route::get('/staff/{id}/delete','StaffController@delete');
});