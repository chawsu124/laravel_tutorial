<?php
use App\Models\User; // Declaration // using User.php file// Using standard Model
use App\Models\Post; // Declaration // using Post.php file// Using Model
use App\Models\Tutorial; // Declaration // using Tutorial.php file// Using Model
use App\Models\City; // Declaration // using City.php file// Using Model

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
// exist route
// Route::get('/', function () {
//     return view('welcome');
// });

// my create route
Route::get('/','App\Http\Controllers\PageController@index');
//*******for Products *********/
Route::get('products','App\Http\Controllers\PageController@index');

Route::get('products/create','App\Http\Controllers\ProductController@create');// for show product insert form
Route::post('products/create','App\Http\Controllers\ProductController@store');// for send product insert data to DB

Route::get('products/{id}/add-cart','App\Http\Controllers\PageController@add');

Route::get('products/cart','App\Http\Controllers\PageController@show');