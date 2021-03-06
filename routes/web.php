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

Route::get('/', 'HomeController@index');
Route::get('contacts', 'HomeController@contacts');
Route::get('admin', 'HomeController@admin');
Route::get('lesson/{id}', 'HomeController@lesson');
Route::post('lesson', 'HomeController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
