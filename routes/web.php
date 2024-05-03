<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCRUDController;



Route::get('/index', [PagesController::class, "index"]);

Route::resource('/movie', MoviesController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/movie', UserCRUDController::class);

Route::resource('/users', UserCRUDController::class);

Route::get('/', function () {
    return redirect()->route('movie.index');
});
