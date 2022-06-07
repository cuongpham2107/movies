<div class=" flex-col shadow-2xl border rounded border-gray-800 bg-gray-800 " x-data="{show:true}" x-data="filter">
    <div class="flex justify-between items-center  text-white text-lg py-3 px-2" @click.prevent="show = ! show">
      <h3 class="" >Sort</h3>
      <svg class="w-4 h-4" :class="show == true ? 'rotate-90' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
    </div>
    <div class=" py-3 px-2 border-t border-gray-700" x-show="show">
      <span class=" text-white text-sm">Sort Results By</span>
      <div class="px-2 border rounded border-gray-600 bg-gray-600 mt-2" x-data="{open: false}">
        <div class="flex justify-between items-center" @click.prevent="open = ! open">
          <a class="" href="#" >Popularity Descending</a>
          <svg class="w-3 h-3 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></svg>
        </div>
        <ul x-show="open">
          <li><a href="">Popularity Descending</a></li>
          <li><a href="">Popularity Ascending</a></li>
          <li><a href="">Rating Descending</a></li>
          <li><a href="">Rating Ascending</a></li>
          <li><a href="">Release Date Descending</a></li>
          <li><a href="">Release Date Ascending</a></li>
          <li><a href="">Title (A-Z)</a></li>
          <li><a href="">Title (Z-A)</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class=" flex-col shadow-2xl rounded bg-gray-800 mt-4" x-data="{show:false}">
    <div class="flex justify-between items-center text-white text-lg py-3 px-2 " @click.prevent="show = ! show">
      <h3 class="" >Filters</h3>
      <svg class="w-4 h-4" :class="show == true ? 'rotate-90' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
    </div>
    <div class="border-t border-gray-700" x-show="show">
        <div class="my-2 mx-2">
            <span>Show Me</span>
        
            <div>
              <input class="cursor-pointer" id="huey" type="radio" name="movie" value=""
                     checked>
              <label class="cursor-pointer" for="huey">Everything</label>
            </div>
        
            <div>
              <input class="cursor-pointer" id="dewey" type="radio" name="movie" value="">
              <label class="cursor-pointer" for="dewey">Movies I Haven't Seen</label>
            </div>
        
            <div>
              <input class="cursor-pointer" id="louie" type="radio" name="movie" value="">
              <label class="cursor-pointer" for="louie">Movies I Have Seen</label>
            </div>
        </div>
        <div class="border-t border-gray-700 py-2 px-2" x-data="{check: false}">
            <span>Availabilities</span>
            <div >
                <input class="cursor-pointer" id="all-availabilities" type="checkbox" value="" x-model="check" >
                <label class="cursor-pointer" for="all-availabilities">Search all availabilities?</label>
            </div>
            <div x-show="!check">
                <div>
                    <input class="cursor-pointer" id="Stream" type="checkbox" value="" checked>
                    <label class="cursor-pointer" for="Stream">Stream</label>
                </div>
                <div>
                    <input class="cursor-pointer" id="Free" type="checkbox" value="" checked>
                    <label class="cursor-pointer" for="Free">Free</label>
                </div>
                <div>
                    <input class="cursor-pointer" id="Ads" type="checkbox" value="" checked>
                    <label class="cursor-pointer" for="Ads">Ads</label>
                </div>
                <div>
                    <input class="cursor-pointer" id="Rent" type="checkbox" value="" checked>
                    <label class="cursor-pointer" for="Rent">Rent</label>
                </div>
                <div>
                    <input class="cursor-pointer" id="Buy" type="checkbox" value="" checked>
                    <label class="cursor-pointer" for="Buy">Buy</label>
                </div>
            </div>
            {{-- <template x-if="!check">
                <div >
                    <div>
                        <input class="cursor-pointer" id="Stream" type="checkbox" value="" checked>
                        <label class="cursor-pointer" for="Stream">Stream</label>
                    </div>
                    <div>
                        <input class="cursor-pointer" id="Free" type="checkbox" value="" checked>
                        <label class="cursor-pointer" for="Free">Free</label>
                    </div>
                    <div>
                        <input class="cursor-pointer" id="Ads" type="checkbox" value="" checked>
                        <label class="cursor-pointer" for="Ads">Ads</label>
                    </div>
                    <div>
                        <input class="cursor-pointer" id="Rent" type="checkbox" value="" checked>
                        <label class="cursor-pointer" for="Rent">Rent</label>
                    </div>
                    <div>
                        <input class="cursor-pointer" id="Buy" type="checkbox" value="" checked>
                        <label class="cursor-pointer" for="Buy">Buy</label>
                    </div>
                </div>
            </template> --}}
            
        </div>
        <div class="border-t border-gray-700 py-2 px-2">
          <span>Release Dates</span>
        </div>
        <div class="border-t border-gray-700 py-2 px-2">
          <span>Genres</span>
          <ul class="">
            {{-- @dd($genres) --}}
            @foreach ($genres as $item)
              <li class="border border-gray-500 rounded-full px-2 inline-block mt-2 mr-1 font-medium hover:bg-gray-100 hover:text-black"><a href="">{{$item['name']}}</a></li>
            @endforeach
            
          </ul>
        </div>
        <div class="border-t border-gray-700 py-2 px-2">
          <span>Keywords</span>
          <input class="border rounded py-1 px-2 mt-2" type="search" placeholder="Search ... ">
          
        </div>
    </div>
    
  </div>
@section('scripts')
  <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('filter', () => ({
            list_genres:[],

            init(){
              this.list_genres = JSON.parse(@json($genres))
              console.log(this.list_genres);
            }
        }))
    })
</script>
@endsection