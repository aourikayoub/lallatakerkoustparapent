<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;


Route::get('/' , [HomeController::class , 'HomePage'])->name('HomePage');

// quad
Route::get('/quad', function () {
    return view('quad');
})->name('quad');

// camel
Route::get('/camel', function () {
    return view('camel');
})->name('camel');


Route::get('/hotel', function () {
    return view('hotel');
})->name('hotel');

Route::get('/{locale}' , [LanguageController::class , 'LangSwicher'])->name('langSwitcher')->where('locale', '[a-zA-Z]{2}');

Route::get('/service/{service_name}', [ServiceController::class, 'servicesDetailsPage'])->name('services.details');

// Reviews
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
