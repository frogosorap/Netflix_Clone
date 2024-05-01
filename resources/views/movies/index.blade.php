@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div>
        <h1 class="text-4xl">Movies</h1>
    </div>


    @if(Auth::check())
    <div>
        <a href="/movie/create" class="bg-blue-700 p-3 m-[50px] text-white rounded-md">Add a movie</a>
    </div>
    @endif
    @foreach ($movies as $movie)
        <div>
        <div>
             <iframe width="420" height="315"
            src="{{ $movie->trailer_url }}">
        </iframe>
        </div>
        <div>
            <h2 class="text-red-700">{{ $movie->title }}</h2>
            <p>{{ $movie->description }}</p>
           

        </div>
    </div>
    @endforeach
    
</div>
