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

Route::get('/', 'PageController@main')->name('main');
Route::resource('orders', 'OrderController')->except(['edit', 'update', 'destroy']);
Route::get('queries', 'OrderController@search')->name('queries.search');