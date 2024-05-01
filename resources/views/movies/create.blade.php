{{-- @extends('layouts.app') --}}

@section('content')
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    
@endif
<div class="w-4/5 m-auto text-center">

    <form action="/movie" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <input type="text" placeholder="movie title">
        </div>

        <div>
            <input type="text" placeholder="movie description">
        </div>
        <div>
            <input type="date" id="start" name="movie-release" value="2018-07-22" min="2018-01-01" max="2018-12-31" />
        </div>
        <div>
            <input type="text" placeholder="movie trailer url">
        </div>
        <div>
            <input type="text" placeholder="movie url">
        </div>
        <div>
            <label for="movie_thumbnail_image">Upload Movie Image</label>
            <input type="file" name="image" class="hidden" id="movie_thumbnail_image">
        </div>

        <div>
            <button type="submit">Add Movie</button>
        </div> 
    </form>
</div>
