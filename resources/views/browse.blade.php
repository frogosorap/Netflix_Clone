@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <div class="container py-10">
        @auth
            @if(Auth::user()->access_level === 'admin')
                <a href="{{ route('movies.create') }}" class="btn bg-red-600 hover:bg-red-700">Add Movie</a>
            @endif
        @endauth
        <h1 class="text-4xl font-bold text-center mb-8">Browse</h1>
        
        <!-- Dropdown Filter -->
        <div class="mt-8">
            <form id="sortForm" action="{{ route('browse') }}" method="GET">
                <label for="sort" class="text-white">Sort by:</label>
                <select name="sort" id="sort" class="bg-gray-200 text-gray-900 rounded-md px-3 py-2">
                    <option value="">Sort By Name</option>
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </form>
        </div>
        
        <!-- Movies Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10" id="movies-grid">
            @foreach ($movies as $movie)
            <div class="bg-gray-800 rounded-lg shadow-md relative overflow-hidden" style="height: 180px; width:280px;">
                <img src="{{$movie['img_url']}}" alt="{{$movie['title']}}" style="width: 100%; height: 100%; object-fit: cover;" class="rounded-t-lg">
                <div class="p-6 absolute inset-0 bg-black bg-opacity-75 opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h2 class="text-xl font-semibold text-white mb-2">{{ $movie['title'] }}</h2>
                        <p class="text-sm text-black-400 mt-2"><strong>Genre:</strong>
                            <span class="py-4"> <!-- Adding larger padding top and bottom -->
                                @foreach ($movie->genres as $genre)
                                    <span class="bg-red-600 px-0.8 py-0.8 rounded text-white">{{ $genre->name }}</span>
                                @endforeach
                            </span>
                        </p>

                        <form action="{{ route('watchHistory.store', $movie->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn bg-red-600 hover:bg-red-700 mt-2 w-full">Watch Movie</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination removed -->
    </div>
</div>

<script>
    document.getElementById('sort').addEventListener('change', function() {
        var sortDirection = this.value;
        fetchMovies(sortDirection);
    });

    function fetchMovies(sortDirection) {
        var url = "{{ route('browse') }}?sort=" + sortDirection;

        fetch(url)
            .then(response => response.text())
            .then(data => {
                var moviesGrid = document.getElementById('movies-grid');
                moviesGrid.innerHTML = getMoviesGridContent(data);
            })
            .catch(error => console.error('Error fetching movies:', error));
    }

    function getMoviesGridContent(htmlString) {
        // Create a temporary container element
        var tempContainer = document.createElement('div');
        tempContainer.innerHTML = htmlString;

        // Extract and return the movies grid content
        var moviesGridContent = tempContainer.querySelector('#movies-grid').innerHTML;
        return moviesGridContent;
    }
</script>
@endsection
