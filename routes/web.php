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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth
//Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::post('/', 'App\Http\Controllers\HomeController@store');

Route::get('/{id}/delete', 'App\Http\Controllers\HomeController@destroy');

Route::get('/{id}/download', 'App\Http\Controllers\HomeController@download');
