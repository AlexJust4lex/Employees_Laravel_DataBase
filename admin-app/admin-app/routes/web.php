<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/SingIn', 'App\Http\Controllers\MainController@signIn');
Route::get('/SingInAdmin', 'App\Http\Controllers\MainController@signInAdmin');
Route::get('/adminPage', 'App\Http\Controllers\MainController@adminPage')->name('adminPage');
Route::post('/adminPage', 'App\Http\Controllers\MainController@adminPage')->name('adminPage');
Route::get('/createNewData', 'App\Http\Controllers\MainController@newDataAppend');
Route::post('/createNewData', 'App\Http\Controllers\MainController@createNewData');
Route::post('/SingIn/check', 'App\Http\Controllers\MainController@signInCheck');
Route::post('/SingInAdmin/check', 'App\Http\Controllers\MainController@signInAdminCheck');
Route::post('/adminPage/check', 'App\Http\Controllers\MainController@createNewData');

Route::get('/admin', function(){
    echo 'I am Admin';
})->middleware('admin');
