<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="navbar">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="navbar_items">
                    <div id="navbar_logo">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{-- {{ config('app.name', 'Laravel') }} --}}
                            <img src="https://www.edigitalagency.com.au/wp-content/uploads/netflix-logo-png-large.png" alt="logo" width="100px" >
                        </a>
                    </div>
                    <div id="navbar_links">
                        <a href="movie">HOME</a>
                        <a href="browse">BROWSE</a>
                        <a href="search">SEARCH</a>
                        <a href="users">USERS</a>
                    </div>
                </div>
                {{-- <div class="navbar_links">
                    
                </div> --}}
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        
    </div>
</body>
</html>