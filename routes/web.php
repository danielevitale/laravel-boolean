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


Route::get('/', 'HomeController@home')->name('home');
Route::get('privacy-policy', 'HomeController@privacy_policy')->name('privacy');
Route::get('lavora-con-noi', 'HomeController@lavora')->name('lavora');
