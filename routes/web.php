<?php

use Illuminate\Support\Facades\Route;
use App\User;

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
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@register');

Route::get('/login', [LoginController::class, 'index']);


Route::resource('kontol', TController::class);

Route::resource('login', LoginController::class);

Route::get('/home', 'ViewController@index');
Route::get('/', 'ViewController@index');