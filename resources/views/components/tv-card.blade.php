 <div class="swiper-slide">
    <div class="mt-8">
        <a href="{{route('tv.show', $movie['id'])}}">
            <img src="{{  $movie['poster_path'] }}" alt="poster"
                class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="mt-2">
            <a href="{{route('movies.show', $movie['id'])}}" class="text-lg mt-2 hover:text-gray-300 line-clamp-2">
                {{ $movie['name']  }}
            </a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
    
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24 "
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                    </path>
                </svg>
                <span class="ml-1">{{ $movie['vote_average'] }}</span>
                <span class="mx-2">|</span>
                <span>{{ $movie['first_air_date'] }}</span>
            </div>
            <div class="text-gray-400 text-sm">
                <span class="font-semibold text-white">Thể loại: </span>
                <span>{{$movie['genres']}}</span>
                
            </div>
        </div>
    </div>
    
</div>
