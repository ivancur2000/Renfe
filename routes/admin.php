<?php

use App\Http\Controllers\Admin\CityControler;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::resource('/city', CityControler::class)->names('city');
