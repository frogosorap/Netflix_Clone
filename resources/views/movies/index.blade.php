@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <div class="w-4/5 mx-auto text-center py-10">
    
        <div>
            <h1 class="text-4xl">Movies</h1>
        </div>

        @if(Auth::check())
        <div>
            <a href="/movie/create" class="bg-red-700 py-3 px-6 mt-8 inline-block rounded-md">Add a Movie</a>
        </div>
        @endif
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
            @foreach ($movies as $movie)
            <div class="bg-red-800 rounded-lg p-4 shadow-md">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="w-full h-full" src="{{ $movie->trailer_url }}" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold">{{ $movie->title }}</h2>
                    <p class="text-sm">{{ $movie->description }}</p>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>
@include('footer')
@endsection
