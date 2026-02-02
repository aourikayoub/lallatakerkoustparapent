<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;


Route::get('/' , [HomeController::class , 'HomePage'])->name('HomePage');

// quad
Route::get('/quad', function () {
    return view('quad');
})->name('quad');

// camel
Route::get('/camel', function () {
    return view('camel');
})->name('camel');
