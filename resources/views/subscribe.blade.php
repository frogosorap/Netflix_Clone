@extends('layouts.app')

@section('content')
<div class="bg-black py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Choose Your Subscription Plan</h1>
            <p class="text-gray-400 mb-8">Pick the plan that fits your needs and budget.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-red-600 rounded-lg shadow-md overflow-hidden">
                <div class="bg-black py-2 text-center">
                    <img src="https://t4.ftcdn.net/jpg/05/59/52/89/360_F_559528909_4At7imeNk5AZzyX7LMgcLiOSFGAe8wBw.jpg" class=" w-full h-20 object-cover" alt="Netflix Standard Logo">
                </div>
                <div class="bg-red-600 py-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Standard</h2>
                    <p class="text-gray-400">For basic users</p>
                </div>
                <div class="p-8 bg-gray-900">
                    <div class="text-4xl font-bold text-white mb-2">$9<span class="text-2xl">/month</span></div>
                    <ul class="text-gray-400 mb-8">
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            1080p Video Quality
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            2 Simultaneous Streams
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            No HD
                        </li>
                    </ul>
                    <a href="register" class="inline-block bg-red-600 text-white py-3 px-6 rounded-lg hover:bg-red-700 transition-colors duration-300">Subscribe</a>
                </div>
            </div>

            <div class="bg-red-700 rounded-lg shadow-md overflow-hidden">
                <div class="bg-black py-2 text-center">
                    <img src="https://ak3.picdn.net/shutterstock/videos/1530800/thumb/1.jpg" class=" w-full h-20 object-cover" alt="Netflix Plus Logo">
                </div>
                <div class="bg-red-700 py-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Plus</h2>
                    <p class="text-gray-200">For advanced users</p>
                </div>
                <div class="p-8 bg-gray-900">
                    <div class="text-4xl font-bold text-white mb-2">$14<span class="text-2xl">/month</span></div>
                    <ul class="text-gray-400 mb-8">
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            1080p Video Quality
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            4 Simultaneous Streams
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            HD Streaming
                        </li>
                    </ul>
                    <a href="register" class="inline-block bg-red-700 text-white py-3 px-6 rounded-lg hover:bg-red-800 transition-colors duration-300">Subscribe</a>
                </div>
            </div>

            <div class="bg-red-800 rounded-lg shadow-md overflow-hidden">
                <div class="bg-black py-2 text-center">
                    <img src="https://static.videezy.com/system/resources/thumbnails/000/009/944/original/red-and-pink-4k-horizontal-lines-moving-and-fading-on-dark-background.jpg" class=" w-full h-20 object-cover" alt="Netflix Premium Logo">
                </div>
                <div class="bg-red-800 py-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Premium</h2>
                    <p class="text-gray-200">For power users</p>
                </div>
                <div class="p-8 bg-gray-900">
                    <div class="text-4xl font-bold text-white mb-2">$19<span class="text-2xl">/month</span></div>
                    <ul class="text-gray-400 mb-8">
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            4K Video Quality
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            6 Simultaneous Streams
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Offline Viewing
                        </li>
                    </ul>
                    <a href="register" class="inline-block bg-red-800 text-white py-3 px-6 rounded-lg hover:bg-red-900 transition-colors duration-300">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
