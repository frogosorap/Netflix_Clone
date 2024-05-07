@extends('layouts.app')

@section('content')
    @include('movies.form', ['movie'=> $movie])
@endsection