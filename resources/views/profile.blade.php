@extends('layouts.app')

@section('content')
    <div class="bg-black">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-800 shadow-md rounded-lg px-8 py-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <!-- User Icon -->
                            <div class="rounded-full overflow-hidden w-20 h-20 mr-4">
                                <img class="w-full h-full object-cover" src="https://stories.infobae.com/wp-content/uploads/2022/02/perfil-1.png" alt="User Icon">
                            </div>
                            <h2 class="text-2xl font-semibold text-white">Your Profile</h2>
                        </div>
                        <a href="{{ route('logout') }}"
                           class="text-red-500 hover:underline"
                           onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                            <button type="submit" class="no-underline hover:underline text-red-500">{{ __('Logout') }}</button>
                        </form>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-4 border-2 border-gray-700 rounded-lg bg-gray-700">
                            <h3 class="text-lg font-semibold mb-2 text-white">Personal Information</h3>
                            <hr class="mb-4 border-gray-600">
                            <div class="mb-4">
                                <p class="text-gray-400"><strong class="text-white">Name:</strong> {{ $user->name }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-400"><strong class="text-white">Email:</strong> {{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="p-4 border-2 border-gray-700 rounded-lg bg-gray-700">
                            <h3 class="text-lg font-semibold mb-2 text-white">Account Settings</h3>
                            <hr class="mb-4 border-gray-600">
                            <div class="mb-4">
                                <p class="text-gray-400"><strong class="text-white">Joined:</strong> {{ $user->created_at->format('M d, Y') }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-400"><strong class="text-white">Last Updated:</strong> {{ $user->updated_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('movies.index') }}" class="text-red-500 hover:underline">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-black {
            background-color: #000000;
        }
        .bg-gray-700 {
            background-color: #4A4A4A;
        }
        .bg-gray-800 {
            background-color: #2d2d2d;
        }
        .border-gray-700 {
            border-color: #4a5568;
        }
        .border-gray-600 {
            border-color: #718096;
        }
        .text-white {
            color: #ffffff;
        }
        .text-gray-400 {
            color: #a0aec0;
        }
        .text-red-500 {
            color: #ef4444;
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .p-4 {
            padding: 1rem;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .mb-2 {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection
