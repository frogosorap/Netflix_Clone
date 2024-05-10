<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCRUDController;
// use App\Http\Controllers\Auth\LoginController;
use App\Models\Movie;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Genre;

Route::get('/index', [PagesController::class, "index"]);

// Route::resource('/movie', MoviesController::class);

Route::get('/movies', function () {
    return view(
        'movies.index',
        ['movies' => Movie::latest()->paginate(10)]
    );
})->name('movies.index');


Route::get('/movies/create', function () {
    $genres = Genre::all();
    return view('movies.create', ['genres' => $genres]);
})->name('movies.create');

Route::get('/movies/{movie}/edit', function (Movie $movie) {
    $genres = Genre::all();
    return view('movies.edit', [
        'movie' => $movie,
        'genres' => $genres
    ]);
})->name('movies.edit');

Route::get('movies/{movie}', function (Movie $movie) {
    return view('movies.show', ['movie' => $movie]);
})->name('movies.show');

Route::post('/movies', function (MovieRequest $request) {
    $movie = Movie::create($request->validated());

    if ($request->has('genres')) {
        $movie->genres()->sync($request->input('genres'));
    } else {
        $movie->genres()->detach();
    }

    return redirect()->route('movies.show', ['movie' => $movie->id])
        ->with('success', 'Movie created successfully!');
})->name('movies.store');

Route::put('/movies/{movie}', function (Movie $movie, MovieRequest $request) {
    $movie->update($request->validated());

    if ($request->has('genres')) {
        $movie->genres()->sync($request->input('genres'));
    } else {
        $movie->genres()->detach();
    }

    return redirect()->route('movies.show', ['movie' => $movie->id])
        ->with('success', "Movie updated successfully!");
})->name('movies.update');

Route::delete('/movies/{movie}', function (Movie $movie) {
    $movie->delete();
    return redirect()->route('movies.index')
        ->with('success', 'Movie deleted successfully!');
})->name('movies.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', UserCRUDController::class);

Route::get('/', function () {
    return redirect()->route('movies.index');
});


Route::get('/browse', function (Illuminate\Http\Request $request) {
    $movies = \App\Models\Movie::query();

    if ($request->has('sort')) {
        $sortDirection = $request->input('sort');
        $movies->orderBy('title', $sortDirection);
    }

    $movies = $movies->get();

    return view('browse', ['movies' => $movies]);
})->name('browse');



Route::get('/search', function (Request $request) {
    $query = $request->query('query');
    $movies = \App\Models\Movie::where('title', 'like', '%' . $query . '%')
        ->orWhere('description', 'like', '%' . $query . '%')
        ->get();

    return view('search', ['movies' => $movies]);
})->name('search');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['web'])->group(function () {
    Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('logout');
});
