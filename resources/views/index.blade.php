@extends('layouts.main')
@section('content')
   <div class="container mx-auto px-4 pt-16"></div>
   <div class="populer-movies">
       <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
           Populer Movies
       </h2>
       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
           <div class="mt-8">
               <a href="#">
                   <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
               </a>
               <div class="mt-2">
                   <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                   <div class="flex item-center text-gray-400 text-sm mt-1">
                    <span class="fa fa-star fill-current text-orange-500 w-4"></span>
                       <span class="ml-1">85%</span>
                       <span class="ml-2">|</span>
                       <span>February 20, 2020</span>
                   </div>
                   <div class="text-gray-400 text-sm">
                    Action, Thriller, Comedy
                   </div>
               </div>
           </div>
      
    </div>
    
   </div>

@endsection