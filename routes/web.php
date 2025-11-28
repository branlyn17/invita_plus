<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index']);

Route::get('/landing-test', [LandingPageController::class, 'index'])->name('landing.test');
Route::get('/landing-test/{lang}', [LandingPageController::class, 'changeLanguage'])->name('lang.change');
Route::get('/catalogo', [CatalogController::class, 'index'])->name('catalog.index');
Route::resource('users', UserController::class);