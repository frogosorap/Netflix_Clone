@extends('layouts.app')

@section('content')
<div class="bg-black text-white">
    <div class="relative">
        <img src="https://cdn.vox-cdn.com/thumbor/PqBGdG8nMyHCp8k0LtrZaoNqdJ0=/158x0:1746x794/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/13198493/Screen_Shot_2018_10_02_at_10.15.16_AM.png" alt="Movie Website Header" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white">Browse Movies</h1>
        </div>
    </div>
    <div class="container py-10">
        <h1 class="text-4xl font-bold text-center mb-8">Browse</h1>
        
        <!-- Dropdown Filters -->
        <div class="mt-8 flex justify-between">
            <form id="sortForm" action="{{ route('browse') }}" method="GET">
                {{-- <label for="sort" class="text-white">By Name:</label> --}}
                <select name="sort" id="sort" class="custom-dropdown">
                    <option value="">-- By Name --</option>
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </form>
            <form id="descriptionSortForm" action="{{ route('browse') }}" method="GET">
                {{-- <label for="descriptionSort" class="text-white">By Description:</label> --}}
                <select name="descriptionSort" id="descriptionSort" class="custom-dropdown">
                    <option value="">-- By Description --</option>
                    <option value="asc">Popular</option>
                    <option value="desc">Recommended</option>
                </select>
            </form>
            <form id="genreForm" action="{{ route('browse') }}" method="GET">
                {{-- <label for="genre" class="text-white">By Genre: </label> --}}
                <select name="genre" id="genre" class="custom-dropdown">
                    <option value="">-- By Genre --</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
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
            @endforeach
        </div>
        <!-- Pagination removed -->
    </div>
</div>

<script>
    document.getElementById('sort').addEventListener('change', function() {
        var sortDirection = this.value;
        var genreFilter = document.getElementById('genre').value;
        var descriptionSort = document.getElementById('descriptionSort').value;
        fetchMovies(sortDirection, genreFilter, descriptionSort);
    });

    document.getElementById('genre').addEventListener('change', function() {
        var sortDirection = document.getElementById('sort').value;
        var genreFilter = this.value;
        var descriptionSort = document.getElementById('descriptionSort').value;
        fetchMovies(sortDirection, genreFilter, descriptionSort);
    });

    document.getElementById('descriptionSort').addEventListener('change', function() {
        var sortDirection = document.getElementById('sort').value;
        var genreFilter = document.getElementById('genre').value;
        var descriptionSort = this.value;
        fetchMovies(sortDirection, genreFilter, descriptionSort);
    });

    function fetchMovies(sortDirection, genreFilter, descriptionSort) {
        var url = "{{ route('browse') }}?sort=" + sortDirection;
        if (genreFilter) {
            url += "&genre=" + genreFilter;
        }
        if (descriptionSort) {
            url += "&descriptionSort=" + descriptionSort;
        }

        fetch(url)
            .then(response => response.text())
            .then(data => {
                var tempContainer = document.createElement('div');
                tempContainer.innerHTML = data;

                // Get the movies grid content from the fetched data
                var moviesGridContent = tempContainer.querySelector('#movies-grid').innerHTML;

                // Replace the movies grid content without affecting layout and CSS
                var moviesGrid = document.getElementById('movies-grid');
                moviesGrid.innerHTML = moviesGridContent;
            })
            .catch(error => console.error('Error fetching movies:', error));
    }
</script>

@endsection
