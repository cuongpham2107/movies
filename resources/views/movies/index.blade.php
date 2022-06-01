@extends('layouts.main')

@section('content')

    <div class=" mx-auto  border border-gray-800">
        <img class="h-[100vh] w-full object-cover" src="{{ $topRated['backdrop_path'] }}" alt="">
        <div class="absolute top-[40vh] left-0 mx-10 md:w-[70%] lg:w-[60%] xl:w-[40%]">
            <h1 class="text-blue-400 font-bold text-8xl text-[min(10vw,100px)] ">
               {{$topRated['title']}}
            </h1>
            <p class="font-semibold text-white text-sm">{{$topRated['overview']}}</p>
            <div class="flex space-x-3 mt-4">
                <a href="{{ route('movies.show', $topRated['id']) }}" class="btn-gray">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M7 6v12l10-6z"></path></svg>
                    
                    Phát</a>
                <a href="{{ route('movies.show', $topRated['id']) }}" class="btn-gray !bg-gray-400 !text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                    Thông tin khác</a>
            </div>
        </div>
    </div>

    <div class=" mx-auto px-14 py-4 lg:py-5 mt-[-200px]">
        <div class="pupolar-movies">
            <h2 class="uppercase tracking-wider text-white text-lg font-semibold">Phim chiếu Rạp phổ biến</h2>
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                    @foreach ($popularMovies as $movie)
                        <x-movie-card :movie="$movie"  />
                    @endforeach
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            
        </div>
        <!--end popular-movies -->

        <div class="now-playing-movies py-8">
            <h2 class="uppercase tracking-wider text-white text-lg font-semibold">Xem ngay</h2>
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                    @foreach ($nowPlayingMovies as $movie)
                        <x-movie-card :movie="$movie"  />
                    @endforeach
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!--end now-playing-movies -->

        <div class="now-playing-movies py-8">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  
                </div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
        </div>
    </div>
@endsection
@section('scripts')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    slidesPerView: 7,
    spaceBetween: 30,

    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
    
    // breakpoints: {
    //   "@0.00": {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //   },
    //   "@0.75": {
    //     slidesPerView: 2,
    //     spaceBetween: 20,
    //   },
    //   "@1.00": {
    //     slidesPerView: 3,
    //     spaceBetween: 40,
    //   },
    //   "@1.50": {
    //     slidesPerView: 4,
    //     spaceBetween: 50,
    //   },
    // },
  });
</script>
@endsection