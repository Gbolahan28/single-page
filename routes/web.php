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
    return view('welcome');
});


Route::resource('send', 'SendController');
Route::get('send-template', 'SendController@sendTemplateMail');
Route::get('view-template', 'SendController@viewTemplate');
Route::get('email', 'SendController@email');
Route::get('config', 'SendController@config');