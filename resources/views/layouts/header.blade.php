<nav class="w-full absolute bg-gradient-to-b from-black/70 to-transparent">
  <div class=" mx-auto px-14 py-4 lg:py-5">
    <div class="hidden  lg:flex flex-col md:flex-row items-center justify-between ">
      <ul class="flex flex-col md:flex-row items-center  space-x-0 md:space-x-10">
        <li >
          <a href="{{route('movies.index')}}" class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm.001 6c-.001 0-.001 0 0 0h-.466l-2.667-4H20l.001 4zM9.535 9 6.868 5h2.597l2.667 4H9.535zm5 0-2.667-4h2.597l2.667 4h-2.597zM4 5h.465l2.667 4H4V5zm0 14v-8h16l.002 8H4z"></path></svg>
           <span class="font-semibold text-lg">Movie  App</span>
          </a>
        </li>
        
        <li class="mt-3 md:mt-0">
          <a href="{{route('movies.index')}}" class="hover:text-gray-300">Movies</a>
        </li>
        <li class="mt-3 md:mt-0">
          <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
        </li>
        <li class="mt-3 md:mt-0">
          <a href="{{route('actors.index')}}" class="hover:text-gray-300">Actors</a>
        </li>

      </ul>
      <div class="flex items-center">
        <livewire:search-dropdown>
        <div class="mt-3 md:ml-4 md:mt-0 ml-2">
          <a href="" >
            <img class="rounded-full w-8 h-8" src="{{asset('img/avatar.jpg')}}" alt="">
          </a>
        </div>
      </div>
      
    </div>
    <div class="flex lg:hidden justify-between items-center">
      <a href="{{route('movies.index')}}" class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill:currentColor;transform: ;msFilter:;"><path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm.001 6c-.001 0-.001 0 0 0h-.466l-2.667-4H20l.001 4zM9.535 9 6.868 5h2.597l2.667 4H9.535zm5 0-2.667-4h2.597l2.667 4h-2.597zM4 5h.465l2.667 4H4V5zm0 14v-8h16l.002 8H4z"></path></svg>
        <span class="font-semibold text-lg ">Movie  App</span>
      </a>
      <button class="text-white rounded border p-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: currentColor ;transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
      </button>
    </div>
  </div>
</nav>