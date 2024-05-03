{{-- resources/views/movies/create.blade.php --}}
@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="w-4/5 m-auto mt-8">
        <div class="bg-red-200 text-red-700 px-4 py-3 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Oops! Something went wrong.</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="mb-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<div class="w-4/5 m-auto text-center">

    <form action="/movie" method="POST">
        @csrf

        <div>
            <input type="text" placeholder="movie title" name="title">
        </div>

        <div>
            <input type="text" placeholder="movie description" name="description">
        </div>
        <div>
            <input type="date" id="start" name="release_date" value="2018-07-22" min="2018-01-01" max="2018-12-31"/>
        </div>
        <div>
            <input type="text" placeholder="movie trailer url" name="trailer_url">
        </div>
        <div>
            <input type="text" placeholder="movie url" name="movie_url">
        </div>

        <div>
            <button type="submit">Add Movie</button>
        </div> 
    </form>
</div>
@endsection
