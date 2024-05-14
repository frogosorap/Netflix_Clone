@extends('layouts.app')

@section('content')
<div class="bg-black h-screen flex items-center justify-center">
    <div class="absolute w-full h-full bg-cover bg-center" style="background-image: url('https://cdn.kibrispdr.org/data/749/netflix-background-image-25.jpg')"></div>
    <div class="relative w-full max-w-md bg-black bg-opacity-75 rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-white mb-6">{{ __('Register') }}</h2>
        <form class="w-full space-y-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name" class="block text-sm font-bold text-white mb-2">
                    {{ __('Name') }}:
                </label>
                <input id="name" type="text" class="shadow appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name"  autocomplete="name" autofocus>
                @error('name')
                <p class="text-red-500 text-xs italic mt-2">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-bold text-white mb-2">
                    {{ __('E-Mail Address') }}:
                </label>
                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" autocomplete="email">
                @error('email')
                <p class="text-red-500 text-xs italic mt-2">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-bold text-white mb-2">
                    {{ __('Password') }}:
                </label>
                <input id="password" type="password" class="shadow appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200 @error('password') border-red-500 @enderror" name="password" placeholder="Enter your password" autocomplete="new-password">
                @error('password')
                <p class="text-red-500 text-xs italic mt-2">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password-confirm" class="block text-sm font-bold text-white mb-2">
                    {{ __('Confirm Password') }}:
                </label>
                <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200" name="password_confirmation" placeholder="Confirm your password"  autocomplete="new-password">
            </div>
            <div>
                <label for="profile_image" class="block text-sm font-bold text-white mb-2">
                    {{ __('Profile Image') }}:
                </label>
                <input id="profile_image" type="file" class="appearance-none border rounded w-full py-3 px-3 text-[#2D2D2D] leading-tight focus:outline-none focus:shadow-outline bg-gray-200 @error('profile_image') border-red-500 @enderror" name="profile_image">
                @error('profile_image')
                <p class="text-red-500 text-xs italic mt-2">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    {{ __('Register') }}
                </button>
            </div>
            <p class="text-center text-gray-400">
                {{ __('Already have an account?') }} <a href="{{ route('login') }}" class="text-red-600 hover:text-red-700 font-bold">{{ __('Login') }}</a>
            </p>
        </form>
    </div>
</div>
@endsection
