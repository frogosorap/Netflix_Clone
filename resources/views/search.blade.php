@extends('layouts.app')

@section('content')
    <div class="bg-black text-white flex flex-col lg:flex-row">
        <!-- Left side: Search bar and virtual keyboard -->
        <div class="flex-1/4 p-4 lg:p-10">
            <div class="text-center">
                <h1 class="text-2xl lg:text-4xl">Search</h1>
            </div>

            <form action="{{ route('search') }}" method="GET" class="mt-4 lg:mt-8 flex">
                <input type="text" name="query" id="searchInput" placeholder="Search movies..." class="bg-gray-800 text-white py-2 px-2 lg:px-3 rounded-l-md w-full" style="font-size: 14px;">
                <button type="submit" class="bg-red-700 py-2 px-4 lg:px-6 ml-2 rounded-r-md" style="font-size: 14px;">Search</button>
            </form>

            <!-- Virtual Keyboard -->
            <div class="mt-4 lg:mt-8">
                <div class="keyboard">
                    <div class="keyboard-row">
                        <div class="keyboard-key" onclick="addCharacter('1')">1</div>
                        <div class="keyboard-key" onclick="addCharacter('2')">2</div>
                        <div class="keyboard-key" onclick="addCharacter('3')">3</div>
                        <div class="keyboard-key" onclick="addCharacter('4')">4</div>
                        <div class="keyboard-key" onclick="addCharacter('5')">5</div>
                        <div class="keyboard-key" onclick="addCharacter('6')">6</div>
                        <div class="keyboard-key" onclick="addCharacter('7')">7</div>
                        <div class="keyboard-key" onclick="addCharacter('8')">8</div>
                        <div class="keyboard-key" onclick="addCharacter('9')">9</div>
                        <div class="keyboard-key" onclick="addCharacter('0')">0</div>
                        <div class="keyboard-key" onclick="deleteCharacter()">Del</div>
                    </div>
                    <div class="keyboard-row">
                        <div class="keyboard-key" onclick="addCharacter('Q')">Q</div>
                        <div class="keyboard-key" onclick="addCharacter('W')">W</div>
                        <div class="keyboard-key" onclick="addCharacter('E')">E</div>
                        <div class="keyboard-key" onclick="addCharacter('R')">R</div>
                        <div class="keyboard-key" onclick="addCharacter('T')">T</div>
                        <div class="keyboard-key" onclick="addCharacter('Y')">Y</div>
                        <div class="keyboard-key" onclick="addCharacter('U')">U</div>
                        <div class="keyboard-key" onclick="addCharacter('I')">I</div>
                        <div class="keyboard-key" onclick="addCharacter('O')">O</div>
                        <div class="keyboard-key" onclick="addCharacter('P')">P</div>
                    </div>
                    <div class="keyboard-row">
                        <div class="keyboard-key" onclick="addCharacter('A')">A</div>
                        <div class="keyboard-key" onclick="addCharacter('S')">S</div>
                        <div class="keyboard-key" onclick="addCharacter('D')">D</div>
                        <div class="keyboard-key" onclick="addCharacter('F')">F</div>
                        <div class="keyboard-key" onclick="addCharacter('G')">G</div>
                        <div class="keyboard-key" onclick="addCharacter('H')">H</div>
                        <div class="keyboard-key" onclick="addCharacter('J')">J</div>
                        <div class="keyboard-key" onclick="addCharacter('K')">K</div>
                        <div class="keyboard-key" onclick="addCharacter('L')">L</div>
                    </div>
                    <div class="keyboard-row">
                        <div class="keyboard-key" onclick="addCharacter('Z')">Z</div>
                        <div class="keyboard-key" onclick="addCharacter('X')">X</div>
                        <div class="keyboard-key" onclick="addCharacter('C')">C</div>
                        <div class="keyboard-key" onclick="addCharacter('V')">V</div>
                        <div class="keyboard-key" onclick="addCharacter('B')">B</div>
                        <div class="keyboard-key" onclick="addCharacter('N')">N</div>
                        <div class="keyboard-key" onclick="addCharacter('M')">M</div>
                    </div>
                    <div class="keyboard-row">
                        <div class="keyboard-key" style="width: 100px;" onclick="addCharacter(' ')">Space</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right side: Movies -->
        <div class="flex-3 p-4 lg:p-10 overflow-x-auto" style="max-height: 80vh;" id="flex-3/4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
                @forelse ($movies as $movie)
                    <div class="bg-gray-800 rounded-lg shadow-md relative overflow-hidden" style="height: 180px;">
                        <img src="{{$movie['img_url']}}" alt="{{$movie['title']}}" style="width: 100%; height: 100%; object-fit: cover;" class="rounded-t-lg">
                        <div class="p-4 absolute inset-0 bg-black bg-opacity-75 opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                <h2 class="text-lg font-semibold text-white mb-1">{{ $movie['title'] }}</h2>
                                <p class="text-xs text-gray-400"><strong>Genre:</strong>
                                    <span class="py-2">
                                        @foreach ($movie->genres as $genre)
                                            <span class="bg-red-600 px-1 py-0.5 rounded text-white">{{ $genre->name }}</span>
                                        @endforeach
                                    </span>
                                </p>

                                @if(auth()->check())
                                    <form action="{{ route('watchHistory.store', $movie->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn bg-red-600 hover:bg-red-700 mt-2 w-full">Watch Movie</button>
                                    </form>
                                @else
                                    <a href="{{ route('subscribe') }}" class="bg-red-600 hover:bg-red-700 mt-2 w-full text-white py-3 px-5 rounded-lg inline-block block mx-auto text-center">Subscribe To Watch</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">No movies found for your search.</div>
                @endforelse
            </div>
        </div>
    </div>


<script>
function addCharacter(char) {
    document.getElementById('searchInput').value += char;
}

function deleteCharacter() {
    var input = document.getElementById('searchInput');
    input.value = input.value.slice(0, -1);
}
</script>
@endsection