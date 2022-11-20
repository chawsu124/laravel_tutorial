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

// Auth PJ
Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
    Route::get('/normal_users','App\Http\Controllers\HomeController@index')->name('home');

    Route::get('/users','App\Http\Controllers\UserController@index');
    Route::get('/users/{id}/edit','App\Http\Controllers\UserController@edit');
    Route::post('/users/{id}/edit','App\Http\Controllers\UserController@update');

    Route::get('/managers','App\Http\Controllers\ManagerController@index');
    Route::get('/supervisors','App\Http\Controllers\SupervisorController@index');
    Route::get('/staffs','App\Http\Controllers\StaffController@index');

    Route::get('/roles','App\Http\Controllers\RoleController@index');
});

// CRUD for posts PJ
Route::get('/posts','App\Http\Controllers\PostController@index');
Route::get('/posts/create','App\Http\Controllers\PostController@create');
Route::post('/posts/create','App\Http\Controllers\PostController@store');
Route::get('/posts/{id}/edit','App\Http\Controllers\PostController@edit');
Route::post('/posts/{id}/edit','App\Http\Controllers\PostController@update');
Route::get('/posts/{id}/delete','App\Http\Controllers\PostController@destroy');

// Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
