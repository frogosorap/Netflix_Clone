<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WatchHistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCRUDController;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Models\Genre;
use App\Models\WatchHistory;
use Illuminate\Support\Facades\Auth;

// Define routes for browsing and searching movies
Route::get('/index', [PagesController::class, "index"]);

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


Route::get('/browse', function (Illuminate\Http\Request $request) {
    $moviesQuery = \App\Models\Movie::query();

    // Check if a genre filter is applied
    if ($request->has('genre')) {
        $genreId = $request->input('genre');
        // Retrieve movies related to the selected genre
        $moviesQuery->whereHas('genres', function ($query) use ($genreId) {
            $query->where('id', $genreId);
        });
    }

    // Check if a sort filter is applied
    if ($request->has('sort')) {
        $sortDirection = $request->input('sort');
        if ($sortDirection === 'asc' || $sortDirection === 'desc') {
            $moviesQuery->orderBy('title', $sortDirection);
        }
    }

    // Check if a description sort filter is applied
    if ($request->has('descriptionSort')) {
        $descriptionSortDirection = $request->input('descriptionSort');
        if ($descriptionSortDirection === 'asc' || $descriptionSortDirection === 'desc') {
            $moviesQuery->orderBy('description', $descriptionSortDirection);
        }
    }

    $movies = $moviesQuery->get(); // Retrieve all filtered movies
    $genres = Genre::all(); // Retrieve all genres

    return view('browse', ['movies' => $movies, 'genres' => $genres]);
})->name('browse');



Route::get('/search', function (Request $request) {
    $query = $request->query('query');
    $movies = \App\Models\Movie::where('title', 'like', '%' . $query . '%')
        ->orWhere('description', 'like', '%' . $query . '%')
        ->get();

    return view('search', ['movies' => $movies]);
})->name('search');


Route::get('/profile', function () {
    return view('profile', ['user' => Auth::user()]);
})->name('profile.show')->middleware('auth');


Route::get('/watch-history', [WatchHistoryController::class, 'index'])->name('watchHistory.index')->middleware('auth');
Route::post('/watchHistory/{movie}', [WatchHistoryController::class, 'store'])->name('watchHistory.store');

Route::get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe');

Auth::routes();
