<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCRUDController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Movie;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

Route::get('/index', [PagesController::class, "index"]);

// Route::resource('/movie', MoviesController::class);

Route::get('/movies', function () {
    return view(
        'movies.index',
        ['movies' => Movie::latest()->paginate(5)]
    );
})->name('movies.index');


Route::view('movies/create', 'movies.create')
    ->name('movies.create');

Route::get('movies/{movie}/edit', function (Movie $movie) {
    return view('movies.edit', [
        'movie' => $movie
    ]);
})->name('movies.edit');

Route::get('movies/{movie}', function (Movie $movie) {
    return view('movies.show', ['movie' => $movie]);
})->name('movies.show');

Route::post('/movies', function (MovieRequest $request) {
    $movie = Movie::create($request->validated());

    return redirect()->route('movies.show', ['movie' => $movie->id])
        ->with('success', 'Movie created successfully!');
})->name('movies.store');

Route::put('/movies/{movie}', function (Movie $movie, MovieRequest $request) {
    $movie->update($request->validated());
    return redirect()->route('movies.show', ['movie' => $movie->id])
        ->with('success', "Movie updated successfully!");
})->name('movies.update');

Route::delete('/movies/{movie}', function (Movie $movie) {
    $movie->delete();
    return redirect()->route('movies.index')
        ->with('success', 'Movie deleted successfully!');
})->name('movies.destroy');

// Auth::routes();

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
