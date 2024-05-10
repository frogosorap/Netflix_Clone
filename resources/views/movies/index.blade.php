@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <nav class="flex justify-center mt-8">
        <a href="{{ route('movies.create') }}" class="btn bg-red-500 hover:bg-red-600">Add Movie</a>
    </nav>
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-8">All Movies</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($movies as $movie)
            <div class="bg-gray-800 rounded-lg shadow-md">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="w-full h-full rounded-t-lg" src="{{ $movie->trailer_url }}" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $movie->title }}</h2>
                    <p class="text-sm text-gray-400 mb-4">{{ $movie->description }}</p>
                    <p class="text-sm text-gray-400 mb-4"><strong>Genres:</strong>
                        @foreach ($movie->genres as $genre)
                            {{ $genre->name }}@if (!$loop->last), @endif
                        @endforeach
                    </p>
                    <a href="{{ route('movies.show', $movie->id) }}" class="btn bg-red-500 hover:bg-red-600 w-full">View Details</a>
                </div>
            </div>
            @empty
            <div class="text-center">There are no movies</div>
            @endforelse
        </div>
        @if ($movies->count())
            <div class="flex justify-center mt-8">
                {{ $movies->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
