@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white shadow-md rounded-lg px-8 py-6 mb-4 flex items-center justify-center flex-col">
                <!-- User Icon -->
                <div class="rounded-full overflow-hidden w-20 h-20 mb-4">
                    <img class="w-full h-full object-cover" src="https://stories.infobae.com/wp-content/uploads/2022/02/perfil-1.png" alt="User Icon">
                </div>

                <h2 class="text-2xl font-semibold mb-4">Your Profile</h2>

                <div class="mb-4">
                    <p class="text-gray-700"><strong>Name:</strong> {{ $user->name }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-gray-700"><strong>Email:</strong> {{ $user->email }}</p>
                </div>  

                <a href="{{ route('movies.index') }}" class="text-blue-500 hover:underline">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
