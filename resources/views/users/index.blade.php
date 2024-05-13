@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" class="h-full bg-black">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite('resources/css/app.css')

    <style>
        .center-heading {
            display: flex;
            justify-content: center;
            flex-direction: column; /* Added to stack elements vertically */
            align-items: center; /* Added to center items horizontally */
            text-align: center; /* Added to center text */
        }

        .center-heading a {
            margin-top: 1rem; /* Added margin to the button */
        }
    </style>
</head>
<body class="h-full bg-black text-white">
    <div class="bg-black">
        <div class="mx-auto px-4 py-8">
            <div class="center-heading mb-6"> <!-- Apply center-heading class here -->
                <h2 class="text-2xl font-bold text-white">Admin Dashboard</h2>
                <a href="{{ route('users.create') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Create User</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-white px-4 py-3 shadow-md mb-6" role="alert">
                    <div class="flex">
                        <div>
                            <p class="font-bold">Success</p>
                            <p class="text-sm">{{ $message }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="bg-[#4A4A4A] rounded-lg shadow-md overflow-x-auto">
                <table class="min-w-full divide-y divide-[#2D2D2D]">
                    <thead class="bg-[#2D2D2D]">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">S.No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">User Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">User Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">User Password</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-[#4A4A4A] divide-y divide-[#2D2D2D]">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-white">{{ $user->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-white">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-white">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-white">{{ $user->password }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('users.edit', $user->id) }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
</body>
</html>
@endsection
