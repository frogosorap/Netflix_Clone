@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <nav class="flex justify-center mt-8">
        @auth
            @if(Auth::user()->access_level === 'admin')
                <a href="{{ route('movies.create') }}" class="btn bg-red-500 hover:bg-red-600">Add Movie</a>
            @endif
        @endauth
    </nav>
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-8">All Movies</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($movies as $movie)
            <div class="bg-gray-800 rounded-lg shadow-md relative overflow-hidden">
                <img src="{{$movie['img_url']}}" alt="{{$movie['title']}}" class="w-full h-80 object-cover transition duration-300 ease-in-out hover:scale-110 rounded-t-lg">
                <div class="p-6 absolute inset-0 bg-black bg-opacity-75 opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    {{-- <iframe width="100%" height="100%" src="{{$movie['trailer_url']}}" frameborder="0" allow="autoplay; fullscreen" class="rounded"></iframe> --}}
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <p class="text-sm text-gray-400 mt-4"><strong>Genres:</strong>
                            @foreach ($movie->genres as $genre)
                                <span class="bg-yellow-400 px-2 py-1 rounded text-black">{{ $genre->name }}</span>@if (!$loop->last), @endif
                            @endforeach
                        </p>
                        <h2 class="text-xl font-semibold mb-2">{{ $movie['title'] }}</h2>
                        <p class="text-sm text-gray-400 mb-4">{{ $movie['description'] }}</p>

                        <a href="{{ route('movies.show', $movie['id']) }}" class="btn bg-red-500 hover:bg-red-600 w-full">Watch Movie</a>
                    </div>
                    
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
