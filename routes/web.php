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

Route::get('/personal', 'PersonalController@index')->name('personal.index');
Route::get('/personal/{id}', 'PersonalController@show')->name('personal.show');
// Route::delete('/personal//{id}', 'PersonalController@delete')->name('personal.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
