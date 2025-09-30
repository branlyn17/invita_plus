<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index']);

Route::get('/landing-test', [LandingPageController::class, 'index'])->name('landing.test');
Route::get('/landing-test/{lang}', [LandingPageController::class, 'changeLanguage'])->name('lang.change');