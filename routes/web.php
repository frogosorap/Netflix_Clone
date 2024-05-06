<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCRUDController;
use App\Http\Controllers\Auth\LoginController;



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

// Route::get('/browse', function () {
//     // Retrieve movies data from your database or any other source
//     $movies = \App\Models\Movie::all(); // Assuming you want to fetch all movies
    
//     // Pass movies data to the view
//     return view('browse', ['movies' => $movies]);
// })->name('browse');

Route::get('/browse', function (Illuminate\Http\Request $request) {
    $movies = \App\Models\Movie::query();

    if ($request->has('sort')) {
        $sortDirection = $request->input('sort');
        $movies->orderBy('title', $sortDirection);
    }

    $movies = $movies->get();

    return view('browse', ['movies' => $movies]);
})->name('browse');
