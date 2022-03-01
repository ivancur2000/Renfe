<?php

use App\Http\Controllers\Admin\CityControler;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PreferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::resource('/city', CityControler::class)->names('city');
Route::resource('/preference', PreferenceController::class)->names('preference');