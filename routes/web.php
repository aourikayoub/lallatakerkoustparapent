<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\Lang;
use App\Http\Controllers\servicesController;


Route::get('/' , [HomeController::class , 'HomePage'])->name('HomePage');

// quad
Route::get('/quad', function () {
    return view('quad');
})->name('quad');

// camel
Route::get('/camel', function () {
    return view('camel');
})->name('camel');


Route::get('/{locale}' , [Lang::class , 'LangSwicher'])->name('langSwitcher')->where('locale', '[a-zA-Z]{2}');

Route::get('/{services_name}', [servicesController::class, 'servicesDetailsPage'])->name('services.details');
