<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

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

Route::get('/', 'App\Http\Controllers\MainController@home');
//Route::get('/SingIn', 'App\Http\Controllers\MainController@signIn');
Route::get('/SingIn', 'App\Http\Controllers\MainController@signIn');
Route::get('/signUp', 'App\Http\Controllers\UserController@signUp');
Route::post('/signUp/check', 'App\Http\Controllers\UserController@register');
Route::get('/adminPage', 'App\Http\Controllers\UserController@adminPage')->name('adminPage');
Route::post('/adminPage', 'App\Http\Controllers\UserController@adminPage')->name('adminPage');
Route::get('/createNewData', 'App\Http\Controllers\UserController@newDataAppend');
Route::post('/createNewData', 'App\Http\Controllers\UserController@createNewData');
Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/adminPage/check', 'App\Http\Controllers\UserController@createNewData');
Route::get('/userPage', 'App\Http\Controllers\UserController@userPage')->name('userPage');
Route::get('/dashboard', 'App\Http\Controllers\UserController@dashboard')->name('dashboard');

