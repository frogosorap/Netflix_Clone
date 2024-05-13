@extends('layouts.app')

@section('content')
<div class="bg-black h-screen flex items-center justify-center">
    <div class="absolute w-full h-full bg-cover bg-center" style="background-image: url('https://cdn.kibrispdr.org/data/749/netflix-background-image-25.jpg')"></div>
    <div class="relative w-full max-w-md bg-black bg-opacity-75 rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-white mb-6">Sign In</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-bold text-white mb-2" for="email">Email Address</label>
                <input type="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200" placeholder="Enter your email" required>
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-sm font-bold text-white mb-2" for="password">Password</label>
                <input type="password" name="password" class="shadow appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200" placeholder="Enter your password" required>
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    Sign In
                </button>
            </div>
        </form>
        <p class="text-center text-gray-400 mt-4">
            Don't have an account? <a href="{{ route('register') }}" class="text-red-600 hover:text-red-700 font-bold">Sign up</a>
        </p>
    </div>
</div>
@endsection
