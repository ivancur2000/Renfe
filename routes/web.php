<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
  Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
  Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
  Route::get('/route', [RouteController::class, 'index'])->name('route.index');
  Route::get('/station', [StationController::class, 'index'])->name('station.index');
  Route::get('/wheather', function(){
      return view('wheather');
  })->name('wheather');
});
