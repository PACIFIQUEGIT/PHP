<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\VegetableController;
use App\Http\Controllers\BestController;
use App\Http\Controllers\Best1Controller;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get('pages/image', [App\Http\Controllers\ImageController::class, 'create'])->middleware('auth');
Route::post('pages/image', [App\Http\Controllers\ImageController::class, 'store'])->middleware('auth');


Route::get('pages/advantage', [App\Http\Controllers\AdvantageController::class, 'create'])->middleware('auth');
Route::post('pages/advantage', [App\Http\Controllers\AdvantageController::class, 'store'])->middleware('auth');

Route::get('pages/fruit', [App\Http\Controllers\FruitController::class, 'create'])->middleware('auth');
Route::post('pages/fruit', [App\Http\Controllers\FruitController::class, 'store'])->middleware('auth');

Route::get('pages/offer', [App\Http\Controllers\OfferController::class, 'create'])->middleware('auth');
Route::post('pages/offer', [App\Http\Controllers\OfferController::class, 'store'])->middleware('auth');

Route::get('pages/vegetable', [App\Http\Controllers\VegetableController::class, 'create'])->middleware('auth');
Route::post('pages/vegetable', [App\Http\Controllers\VegetableController::class, 'store'])->middleware('auth');

Route::get('pages/best', [App\Http\Controllers\BestController::class, 'create'])->middleware('auth');
Route::post('pages/best', [App\Http\Controllers\BestController::class, 'store'])->middleware('auth');

Route::get('pages/best1', [App\Http\Controllers\Best1Controller::class, 'create'])->middleware('auth');
Route::post('pages/best1', [App\Http\Controllers\Best1Controller::class, 'store'])->middleware('auth');

Route::get('pages/number', [App\Http\Controllers\NumberController::class, 'create'])->middleware('auth');
Route::post('pages/number', [App\Http\Controllers\NumberController::class, 'store'])->middleware('auth');

Route::get('pages/testimonial', [App\Http\Controllers\TestimonialController::class, 'create'])->middleware('auth');
Route::post('pages/testimonial', [App\Http\Controllers\TestimonialController::class, 'store'])->middleware('auth');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('home')->middleware(['auth', 'admin']);


Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

// Define the register route
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');



/*
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin'); */