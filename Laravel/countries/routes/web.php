<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;


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

Route::get('/countries', [CountryController::class, 'index1']);
Route::get('/profile', [CountryController::class, 'index2']);
Route::post('/profile', [CountryController::class, 'store'])->name('profile.store');


