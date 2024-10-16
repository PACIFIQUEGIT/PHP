<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');


    


Route::post('/products', 'App\Http\Controllers\ProductController@store');