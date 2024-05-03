<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Cviebrock\EloquentSluggable\Services\SlugService;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index')
            ->with('movies', Movie::orderBy('release_date', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'release_date' => 'required',
            'trailer_url' => 'required',
            'movie_url' => 'required',
        ]);

        $movieData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'release_date' => $request->input('release_date'),
            'trailer_url' => $request->input('trailer_url'),
            'movie_url' => $request->input('movie_url'),
            'slug' => SlugService::createSlug(Movie::class, 'slug', $request->title),
            'user_id' => auth()->user()->id,
        ];

        Movie::create($movieData);

        return redirect('/blog')->with('message', 'Your post has been added!');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
