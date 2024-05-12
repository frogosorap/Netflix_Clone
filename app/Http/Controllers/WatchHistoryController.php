<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\WatchHistory;
use Illuminate\Support\Facades\Auth;

class WatchHistoryController extends Controller
{

    public function index()
    {
        $watchHistory = WatchHistory::all();

        $movies = [];

        foreach ($watchHistory as $history) {
            $movie = Movie::find($history->movie_id);

            if ($movie) {
                $movies[] = $movie;
            }
        }
        return view('watchHistory.index', ['movies' => $movies]);
    }


    public function store(Request $request, Movie $movie)
    {
        $user = auth()->user();

        if ($user->watchHistory()->where('movie_id', $movie->id)->exists()) {
            return redirect()->route('movies.show', $movie->id)->with('warning', 'You have already watched this movie.');
        }

        $user->watchHistory()->attach($movie);

        return redirect()->route('movies.show', $movie->id)->with('success', 'Movie added to watch history successfully.');
    }
}
