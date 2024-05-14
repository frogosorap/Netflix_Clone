@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <div class="relative">
        <img src="https://thepopculturestudio.files.wordpress.com/2022/02/the-batman_header.jpg?w=1920&h=768&crop=1" alt="Movie Website Header" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white">All Movies</h1>
        </div>
    </div>
    <div class="container py-10">
        <div class="flex justify-end mb-4">
            @auth
                @if(Auth::user()->access_level === 'admin')
                    <a href="{{ route('movies.create') }}" class="btn bg-red-600 hover:bg-red-700">Add Movie</a>
                @endif
            @endauth
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($movies as $movie)
                <div class="bg-gray-800 rounded-lg shadow-md relative overflow-hidden" style="height: 180px; width:280px;">
                    <img src="{{$movie['img_url']}}" alt="{{$movie['title']}}" style="width: 100%; height: 100%; object-fit: cover;" class="rounded-t-lg">
                    <div class="p-6 absolute inset-0 bg-black bg-opacity-75 opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h2 class="text-xl font-semibold text-white mb-2">{{ $movie['title'] }}</h2>
                            <p class="text-sm text-black-400 mt-2"><strong>Genre:</strong>
                                <span class="py-4">
                                    @foreach ($movie->genres as $genre)
                                        <span class="bg-red-600 px-0.8 py-0.8 rounded text-white">{{ $genre->name }}</span>
                                    @endforeach
                                </span>
                            </p>
                            @if(auth()->check())
                                <form action="{{ route('watchHistory.store', $movie->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn bg-red-600 hover:bg-red-700 mt-2 w-full">Watch Movie</button>
                                </form>
                            @else
                                <a href="{{ route('subscribe') }}" class="bg-red-600 hover:bg-red-700 mt-2 w-full text-white py-3 px-5 rounded-lg inline-block block mx-auto text-center">Subscribe To Watch</a>
                            @endif
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
