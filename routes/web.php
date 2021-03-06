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

Route::get('/clients', 'ClientsController@index')->name('clients');
Route::get('/clients/{id?}', 'ClientsController@show');
Route::post('/store', 'ClientsController@store')->name('clients.store');
Route::post('/destroy', 'ClientsController@destroy')->name('clients.destroy');
