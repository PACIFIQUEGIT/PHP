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



Route::get('pages/image', [App\Http\Controllers\ImageController::class, 'create'])->middleware('auth');
Route::post('pages/image', [App\Http\Controllers\ImageController::class, 'store']);


Route::get('pages/advantage', [App\Http\Controllers\AdvantageController::class, 'create'])->middleware('auth');
Route::post('pages/advantage', [App\Http\Controllers\AdvantageController::class, 'store']);

Route::get('pages/fruit', [App\Http\Controllers\FruitController::class, 'create'])->middleware('auth');
Route::post('pages/fruit', [App\Http\Controllers\FruitController::class, 'store']);

Route::get('pages/offer', [App\Http\Controllers\OfferController::class, 'create'])->middleware('auth');
Route::post('pages/offer', [App\Http\Controllers\OfferController::class, 'store']);

Route::get('pages/vegetable', [App\Http\Controllers\VegetableController::class, 'create'])->middleware('auth');
Route::post('pages/vegetable', [App\Http\Controllers\VegetableController::class, 'store']);

Route::get('pages/best', [App\Http\Controllers\BestController::class, 'create'])->middleware('auth');
Route::post('pages/best', [App\Http\Controllers\BestController::class, 'store']);

Route::get('pages/best1', [App\Http\Controllers\Best1Controller::class, 'create'])->middleware('auth');
Route::post('pages/best1', [App\Http\Controllers\Best1Controller::class, 'store']);

Route::get('pages/number', [App\Http\Controllers\NumberController::class, 'create'])->middleware('auth');
Route::post('pages/number', [App\Http\Controllers\NumberController::class, 'store']);

Route::get('pages/testimonial', [App\Http\Controllers\TestimonialController::class, 'create'])->middleware('auth');
Route::post('pages/testimonial', [App\Http\Controllers\TestimonialController::class, 'store']);

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);



Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
