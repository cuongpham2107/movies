@extends('layouts.main')

@section('content')
    <div class=" container mx-auto px-14 py-4 lg:py-5 ">
        <div class="pupolar-movies pt-[60px]  lg:pt-[65px]">
            <h2 class="uppercase tracking-wider text-white text-lg font-semibold">Popular Movies</h2>
            <div class="flex flex-col lg:flex-row lg:space-x-8">
              <div class=" lg:block lg:w-1/4 xl:w-1/6 mt-8">
                <x-filters />
              </div>
              <div class=" lg:w-3/4 xl:w-5/6 ">
                <div class="flex-none">
                  <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
                    @foreach ($popularMovies as $movie)
                      <x-movie-card :movie="$movie"  />
                    @endforeach
                  </div>
                  
                </div>
                
              </div>
            </div>
           
           
            
        </div>
        <!--end popular-movies -->
    </div>

        
@endsection
