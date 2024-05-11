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
        return view('watchHistory.index', ['watchHistory' => $watchHistory]);
    }

    public function store(Movie $movie)
    {

        $user = Auth::user();

        // $user->watchHistory()->attach($movie->id);

        return redirect()->route('movies.index')->with('success', 'Movie added to watch history!');
    }
}
