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


Route::group(['middleware'=> ['auth','checkRole:1,2']], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/users','UsersController@index');
    Route::post('/users/create','UsersController@create');
    Route::get('/users/{id}/edit','UsersController@edit');
    Route::post('/users/{id}/update','UsersController@update');
    Route::get('/users/{id}/delete','UsersController@delete');
});

Route::group(['middleware'=> ['auth','checkRole:1,2,3']], function(){
    Route::get('/dashboard','DashboardController@index');
});
