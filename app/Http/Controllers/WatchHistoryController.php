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
        // Retrieve all watch history entries
        $watchHistory = WatchHistory::all();

        // Initialize an array to store movie details
        $movies = [];

        // Iterate over each watch history entry
        foreach ($watchHistory as $history) {
            // Retrieve the movie associated with the watch history entry
            $movie = Movie::find($history->movie_id);

            // Check if the movie exists and add it to the movies array
            if ($movie) {
                $movies[] = $movie;
            }
        }

        // Pass the movies array to the view
        return view('watchHistory.index', ['movies' => $movies]);
    }


    public function store(Request $request, Movie $movie)
    {
        // Get the authenticated user
        $user = auth()->user();

        // Check if the user has already watched this movie
        if ($user->watchHistory()->where('movie_id', $movie->id)->exists()) {
            // If the user has already watched the movie, redirect back with a message
            return redirect()->route('movies.show', $movie->id)->with('warning', 'You have already watched this movie.');
        }

        // Store the watch history entry
        $user->watchHistory()->attach($movie);

        // Redirect back to the movie details page with a success message
        return redirect()->route('movies.show', $movie->id)->with('success', 'Movie added to watch history successfully.');
    }
}
