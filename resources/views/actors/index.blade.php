@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="pupolar-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
              @foreach ($popularActors as $actor)
                <div class="actors mt-8">
                  <a href="{{ route('actors.show',$actor['id']) }}">
                    <img src="{{$actor['profile_path']}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                  </a>
                  <div class="mt-2">
                    <a href="{{ route('actors.show',$actor['id']) }}" class="text-lg hover:text-gray-300">{{$actor['name']}}</a>
                    <div class="text-sm truncate text-gray-400">{{$actor['known_for']}}</div>
                  </div>
                </div>
              @endforeach
            </div>
        </div> <!--end popular-actors -->
        <div class="flex justify-between my-16">
          @if ($previous)
          <div class="flex items-center rounded bg-orange-300 p-2 pr-4">
            <svg class="!fill-current text-white w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path></svg>
            <a class="text-gray-800 font-semibold" href="/actors/page/{{ $previous }}">Previous</a> 
          </div>
           
          @else
            <div></div>
          @endif

          @if ($next)
          <div class="flex items-center rounded bg-orange-300 p-2 pl-4">
            <a class="text-gray-800 font-semibold" href="/actors/page/{{ $next }}">Next</a>
            <svg class="!fill-current text-white w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>

          </div>
            
          @else
            <div></div>
          @endif

        </div>
        {{-- <div class="page-load-status my-8">
          <div class="flex justify-center">
            <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
          </div>
          <p class="infinite-scroll-last">End of content</p>
          <p class="infinite-scroll-error">Error</p>
        </div> --}}
    </div>
@endsection

@section('scripts')
  {{-- <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.js"></script>
  <script >
    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
      // options
      path: '/actors/page/@{{#}}',
      append: '.actor',
      status:'.page-load-status',
      // history: false,
    });
  </script> --}}
@endsection
