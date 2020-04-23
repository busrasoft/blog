@extends('layouts.main')
@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="/img/parasite.jpg" alt="parasite" class="w-96 hover:opacity-75 transition ease-in-out duration-150">
        </div>
        <div class="md:ml-24">
            Details Here
            <div class="mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite  (2019) </a>
                <div class="flex item-center text-gray-400 text-sm mt-1">
                 <span class="fa fa-star fill-current text-orange-500 w-4"></span>
                    <span class="ml-1">85%</span>
                    <span class="ml-2">|</span>
                    <span>February 20, 2020</span>
                    <span class="ml-2">|</span>
                    <span>Action, Thriller, Comedy</span>

                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci qui dolores neque, aut debitis dolorum cupiditate voluptatem sunt, similique culpa ipsum, excepturi officia ullam soluta nobis dicta suscipit illo dignissimos?
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Diretor, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
           
                <div class="mt-8">
                    <a href="">
                        <img src="" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300"></a>
                        <div class="text-sm text-gray-400">
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div> <!-- end movie-cast -->
@endsection