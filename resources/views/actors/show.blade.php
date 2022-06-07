@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800 pt-14">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
          <div class="flex-none">
            <img class="w-full h-auto " src="{{$actor['profile_path']}}" alt="">
            <ul class="flex items-center mt-4 space-x-2">
              @if ($social['facebook'])
              <li>
                <a href="#" title="Facebook" target="_blank">
                  <svg class="fill-current text-gray-400 hover:text-white w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" ><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                </a>
               
              </li>
              @endif

              @if ($social['instagram'])
              <li>
                <a href="#" title="Instagram" target="_blank">
                  <svg class="fill-current text-gray-400 hover:text-white w-6"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" ><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>
                </a>
              </li>
              @endif

              @if ($social['twitter'])
              <li>
                <a href="#" target="_blank">
                  <svg class="fill-current text-gray-400 hover:text-white w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" ><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg>
                </a>
              </li>
              @endif

              @if ($actor['homepage'])
                <li>
                  <a href="{{$actor['homepage']}}" target="_blank">
                    <svg class="fill-current text-gray-400 hover:text-white w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" ><path d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"></path></svg>
                  </a>
                </li>
              @endif
              
            </ul>
          </div>
          <div class="mt-8 md:mt-0 mx-5 min-w-0">
              <h2 class="text-4xl font-semibold">
                  {{$actor['name']}}
              </h2>
              <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                  <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24 " xmlns="http://www.w3.org/2000/svg"  ><path d="M23 7a8.44 8.44 0 0 0-5 1.31c-.36-.41-.73-.82-1.12-1.21l-.29-.27.14-.12a3.15 3.15 0 0 0 .9-3.49A3.9 3.9 0 0 0 14 1v2a2 2 0 0 1 1.76 1c.17.4 0 .84-.47 1.31l-.23.21a16.71 16.71 0 0 0-3.41-2.2c-2.53-1.14-3.83-.61-4.47 0a2.18 2.18 0 0 0-.46.68l-.18.53L5.1 8.87C6.24 11.71 9 16.76 15 18.94l5-1.66a1 1 0 0 0 .43-.31l.21-.18c1.43-1.44.51-4.21-1.41-6.9A6.63 6.63 0 0 1 23 9zm-3.79 8.37h-.06c-.69.37-3.55-.57-6.79-3.81-.34-.34-.66-.67-.95-1-.1-.11-.19-.23-.29-.35l-.53-.64-.28-.39c-.14-.19-.28-.38-.4-.56s-.16-.26-.24-.39-.22-.34-.31-.51-.13-.24-.19-.37-.17-.28-.23-.42-.09-.23-.14-.34-.11-.27-.15-.4S8.6 6 8.58 5.9s-.06-.24-.08-.34a2 2 0 0 1 0-.24 1.15 1.15 0 0 1 0-.26l.11-.31c.17-.18.91-.23 2.23.37a13.83 13.83 0 0 1 2.49 1.54A4.17 4.17 0 0 1 12 7v2a6.43 6.43 0 0 0 3-.94l.49.46c.44.43.83.86 1.19 1.27A5.31 5.31 0 0 0 16 13.2l2-.39a3.23 3.23 0 0 1 0-1.14c1.29 1.97 1.53 3.39 1.21 3.7zM4.4 11l-2.23 6.7A3.28 3.28 0 0 0 5.28 22a3.21 3.21 0 0 0 1-.17l6.52-2.17A18.7 18.7 0 0 1 4.4 11z"></path></svg>
                  <span class="ml-2 ">{{$actor['birthday']}} ({{$actor['age']}} years old) in {{$actor['place_of_birth']}}</span>
              </div>
              <p class="text-gray-300 mt-8">
                  {{$actor['biography']}}
              </p>
              
          </div>
        </div>
    </div><!-- end movie info -->
    <div class="credits border-b border-gray-800">
      <div class="container mx-auto px-4 py-16">
        <h4 class="text-4xl font-semibold">Known For</h4>
        <!-- Slider main container -->
        <div class="select-none mt-8">
          <!-- Swiper -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach ($knownForMovies as $item)
                <div class="swiper-slide">
                  <a href="{{ route('movies.show', $item['id']) }}">
                    <img  src="{{$item['poster_path']}}" alt="poster" 
                    class="hover:opacity-75 transition ease-in-out duration-150 w-full">
                  </a>
                  <a href="{{ route('movies.show', $item['id']) }}" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">{{$item['title']}}</a>
                </div>
              @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="credits border-b border-gray-800">
      <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">
          Credits
        </h2>
        <ul class="list-disc leading-loose pl-5 mt-8">
          @foreach ($credits as $item)
            <li>{{$item['release_year']}} &middot; <strong>{{$item['title']}}</strong> as {{$item['character']}}</li>
          @endforeach
        </ul>
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
    slidesPerView: 5,
    spaceBetween: 10,

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
