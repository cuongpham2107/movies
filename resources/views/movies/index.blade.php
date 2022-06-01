@extends('layouts.main')

@section('content')

    <div class=" mx-auto  border border-gray-800">
        <img class="h-[100vh] w-full object-cover" src="{{ $topRated['backdrop_path'] }}" alt="">
        <div class="absolute top-[40vh] left-0 mx-10 md:w-[70%] lg:w-[60%] xl:w-[40%]">
            <h1 class="text-blue-400 font-bold text-8xl text-[min(10vw,100px)] ">
                Bác sĩ thiên tài
            </h1>
            <p class="font-semibold text-white text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor porro nam, dolores assumenda quaerat vitae neque repellat reiciendis quisquam sed incidunt ab aut itaque beatae iste corrupti possimus facere cumque.</p>
            <div class="flex space-x-3 mt-4">
                <button class="btn-gray">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M7 6v12l10-6z"></path></svg>
                    
                    Phát</button>
                <button class="btn-gray !bg-gray-400 !text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                    Thông tin khác</button>
            </div>
        </div>
    </div>

    <div class=" mx-auto px-14 py-4 lg:py-5 mt-[-200px]">
        <div class="pupolar-movies">
            <h2 class="uppercase tracking-wider text-white text-lg font-semibold">Phim chiếu Rạp phổ biến</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3  md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-7 gap-6">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie"  />
                    @if($loop->index >= 13)
                        
                    @break
                    @endif
                @endforeach
            </div>
        </div>
        <!--end popular-movies -->

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 gap-8">

                @foreach ($nowPlayingMovies as $movie)
                  <x-movie-card :movie="$movie"  />
                @endforeach

            </div>
        </div>
    </div>
@endsection
