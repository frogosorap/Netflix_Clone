@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="w-4/5 mx-auto mt-8">
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

<div class="bg-black text-white py-12">
    <div class="w-full max-w-md mx-auto">
        <form action="/movie" method="POST" class="bg-red-700 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="title">
                    Movie Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Movie Title" name="title">
            </div>

            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Movie Description" name="description"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="release_date">
                    Release Date
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="release_date" type="date" name="release_date" value="2018-07-22" min="2018-01-01" max="2018-12-31">
            </div>

            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="trailer_url">
                    Trailer URL
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="trailer_url" type="text" placeholder="Trailer URL" name="trailer_url">
            </div>

            <div class="mb-6">
                <label class="block text-white text-sm font-bold mb-2" for="movie_url">
                    Movie URL
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="movie_url" type="text" placeholder="Movie URL" name="movie_url">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-white hover:bg-gray-300 text-red-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Movie
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
