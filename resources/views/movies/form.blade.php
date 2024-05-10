@extends('layouts.app')

@section('content')
<div class="bg-black text-white py-12">
    <div class="w-full max-w-md mx-auto">
        <form action="{{ isset($movie) ? route('movies.update', ['movie' => $movie->id]) : route('movies.store') }}" method="POST" class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @isset($movie)
                @method('PUT')
            @endisset

            <div class="mb-4">
                <label class="block text-sm font-bold text-white mb-2" for="title">Movie Title</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200" id="title" type="text" placeholder="Movie Title" name="title" value="{{ isset($movie) ? $movie->title : old('title') }}">
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold text-white mb-2" for="description">Description</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200 h-32" id="description" placeholder="Movie Description" name="description">{{ isset($movie) ? $movie->description : old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold text-white mb-2" for="trailer_url">Trailer URL</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200" id="trailer_url" type="text" placeholder="Trailer URL" name="trailer_url" value="{{ isset($movie) ? $movie->trailer_url : old('trailer_url') }}">
                @error('trailer_url')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold text-white mb-2">Genres</label>
                @foreach($genres as $genre)
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="checkbox" id="genre{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}" @if(isset($movie) && $movie->genres->contains($genre->id)) checked @endif>
                        <label class="text-sm text-gray-400" for="genre{{ $genre->id }}">
                            {{ $genre->name }}
                        </label>
                    </div>
                @endforeach
                @error('genres')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    {{ isset($movie) ? 'Update Movie' : 'Add Movie' }}
                </button>
                <a href="{{ route('movies.index') }}" class="btn bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
