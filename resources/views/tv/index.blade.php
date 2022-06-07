@extends('layouts.main')
@section('content')
   <div class="container mx-auto px-14 py-4 lg:py-5 ">
     <div class="tv-movies pt-[60px]  lg:pt-[65px]">
       <h2 class="uppercase tracking-wider text-white text-lg font-semibold">Tv Show</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-7 gap-6">
          {{-- @dd($tvMovies) --}}
          @foreach ($tvMovies as $movie)
            <x-tv-card :movie="$movie"  />
          @endforeach
        </div>
     </div>
   </div>
@endsection

@section('scripts')

@endsection
