<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/index', [PagesController::class, "index"]);
