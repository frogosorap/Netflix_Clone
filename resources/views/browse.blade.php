@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Browse Page</h1>
</div>

<div class="bg-black text-white">
    <div class="w-4/5 mx-auto text-center py-10">
    
        <div>
            <h1 class="text-4xl">Browse</h1>
        </div>

        @if(Auth::check())
        <div>
            <a href="/movie/create" class="bg-red-700 py-3 px-6 mt-8 inline-block rounded-md">Add a Movie</a>
        </div>
        @endif
        
        <!-- Dropdown Filter -->
        <div class="mt-8">
            <form id="sortForm" action="{{ route('browse') }}" method="GET">
                <label for="sort">Sort by:</label>
                <select name="sort" id="sort" class="bg-gray-200 text-gray-900 rounded-md px-3 py-2">
                    <option value="">Sort By Name</option>
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </form>
        </div>
        
        <!-- Movies Grid -->
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

<!-- JavaScript to automatically submit the form when dropdown option changes -->
<script>
    document.getElementById('sort').addEventListener('change', function() {
        document.getElementById('sortForm').submit();
    });
</script>
@endsection