@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <div class="w-4/5 mx-auto text-center py-10">
        <div class="max-w-5xl mx-auto px-4">
            <div class="mb-4">
                <a href="{{ route('movies.index') }}" class="text-gray-300 hover:text-white">&larr; Back to all movies</a>
            </div>
            <h1 class="text-4xl font-bold mb-4">{{ $movie->title }}</h1>
            <p class="text-lg mb-6">{{ $movie->description }}</p>
            <div class="relative" style="padding-top: 56.25%;">
                <iframe class="absolute inset-0 w-full h-full rounded-lg shadow-md" src="{{ $movie->trailer_url }}" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="flex justify-between text-sm mt-4">
                <p>Created at: {{ $movie->created_at->diffForHumans() }}</p>
                <p>Updated at: {{ $movie->updated_at->diffForHumans() }}</p>
            </div>
            
            <div class="flex justify-center space-x-4">
                <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this movie?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-red-500 hover:bg-red-600">Delete Movie</button>
                </form>
                <a href="{{ route('movies.edit', ['movie' => $movie]) }}" class="btn bg-blue-500 hover:bg-blue-600">Edit Movie</a>
            </div>
        </div>
    </div>
</div>
@endsection
