@extends('layouts.main')

@section('content')
{{-- @dd($movie) --}}
    <div class="movie-info border-b border-gray-800 pt-14">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
          <a href="" class="flex-none md:w-1/2 lg:w-1/3 xl:w-1/4  block">
            <img class="w-full h-auto " src="{{ $movie['poster_path'] }}" alt="">
          </a>
            <div class="mt-8 md:mt-0 mx-5">
                <h2 class="text-4xl font-semibold">
                    {{$movie['name']}}
                </h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24 " xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                        </path>
                    </svg>
                    <span class="ml-1">{{$movie['vote_average']}}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie['first_air_date']}}</span>
                    <span class="mx-2">|</span>
                    <span>Thể loại: </span>
                    <span>
                      {{$movie['genres']}}
                    </span>
                   
                </div>
                <p class="text-gray-300 mt-8">
                   {{$movie['overview']}}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                      @foreach ($movie['crew'] as $crew)
                      
                        <div class="mr-8">
                          <div>{{$crew['name']}}</div>
                          <div class="text-sm text-gray-400">
                            {{$crew['job']}}
                          </div>
                        </div>
                        
                        
                      @endforeach
                       
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">
                                Screenplay
                            </div>
                        </div>
                    </div>
                </div>
                <div x-data="{open:false}">
                  @if(count($movie['videos']['results']) > 0)
                    <div class="mt-12 ">
                      
                      <button
                          @click="open=true"
                          class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <span class="ml-2">Play Trailer</span>
                      </button>
                    </div>
                  @endif

                  <div  x-show.transition.opacity="open" x-trap.noscroll="open" style="background-color: rgba(0, 0, 0, .5);" 
                  class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto z-50">
                    <div  class="container mx-auto lg:px-32 rounded-lg overflow-y-auto" >
                      <div class="bg-gray-900 rounded" @click.outside="open=false">
                        <div class="flex justify-end pr-4 pt-2">
                          <button @click="open=false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                        </div>
                        <div class="modal-body px-8 py-8">
                          <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                            <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtobe.com/embeb/{{$movie['videos']['results'][0]['key']}}" style="border: 0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
               
            </div>
        </div>
    </div><!-- end movie info -->
    <div class="movie-cast border-b border-gray-800">
      <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
          <div class="swiper mySwiper select-none mt-8">
            <div class="swiper-wrapper">
              @foreach ($movie['cast'] as $item)
              
                  <div class="swiper-slide">
                    <a href="{{ route('actors.show', $item['id']) }}">
                      <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $item['profile_path'] }}" alt="doctor-strange-2-teaser-poster" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                      <a href="{{ route('actors.show', $item['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$item['name']}}</a>
                      
                      <div class="text-gray-400 text-sm">
                        {{$item['character']}}
                      </div>
                    </div>
                  </div>
               
              @endforeach
              
              
            </div>
            <div  class="swiper-button-prev"></div>
            <div  class="swiper-button-next"></div>
          </div>
      </div>
    </div>
    <div class="movie-image border-b border-gray-800" 
      x-data="{
        open:false,
        image_show: '',
        showImage(image){
          this.open =true
          this.image_show = image
        }
      }">
      <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Hình ảnh</h2>
         <!-- Chia col theo grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 mt-8 gap-8" >
          @foreach ($movie['images'] as $item)
            <div>
              <a @click.prevent="showImage('{{$item['file_path']}}')" href="#">
                <img  src="{{ 'https://image.tmdb.org/t/p/w500/' . $item['file_path'] }}" alt="">
              </a>
            </div>
          @endforeach
        </div>
        <!--End Chia col theo grid -->


        <!-- Chia col theo flex -->
        {{-- <div class="flex flex-wrap -mx-4 mt-8">
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
          <div class="px-4 w-1/4 mb-8">
            <div class="w-full">
              <img src="{{asset('img/poster.jpg')}}" alt="">
            </div>
            
          </div>
        </div> --}}
         <!--End Chia col theo flex -->
      </div>
      <div  x-show.transition.opacity="open " x-trap.noscroll="open" style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto z-50">
        <div  class="container mx-auto lg:px-32 rounded-lg overflow-y-auto" >
          <div class="bg-gray-900 rounded" @click.outside="open=false">
            <div class="flex justify-end pr-4 pt-2">
              <button @click="open=false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
            </div>
            <div class="modal-body px-8 py-8">
              <div class="responsive-container overflow-hidden relative" >
                <img class="w-full" :src="'https://image.tmdb.org/t/p/w500' + image_show" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection
@section('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
 const swiper = new Swiper('.swiper', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 15,
    loop: true,

    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
     
      // when window width is >= 480px
      321: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 15
      },
      1024:{
        slidesPerView: 5,
        spaceBetween: 20
      },
    }

    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
</script>
@endsection
