<div class="relative mt-3 md:mt-0" x-data="{isOpen: true}" @click.away="isOpen = false">
    <input wire:model.debounce.500ms="search" 
        type="text"   
        class="bg-white text-gray-800 text-sm rounded-full w-64 pl-8 px-4 py-1  ring-0 focus:ring-2 ring-green-300 "
        
        @foucs="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.windown="isOpen = false"
        @keydown.shift.tab="isOpen = false"
        placeholder="Search (Press '/' to focus)">
    <div class="absolute top-0">
        <svg class="fill-current text-gray-500 w-4 mt-2 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path
                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
            </path>
            <path
                d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z">
            </path>
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3">

       
    </div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4" 
        x-show.transition.opacity="isOpen"
        @keydown.escape.windown="isOpen = false"
        >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                    <li class="border-b border-gray-700">
                        <a href="{{route('movies.show', $result['id'])}}" class="hover:bg-gray-700 px-3 py-3 flex items-center" 
                        @if($loop->last) 
                        @keydown.tab="isOpen = false" @endif>
                            @if ($result['poster_path'])
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $result['poster_path'] }}" alt="poster" class="w-8">
                            @else
                                <img src="https://via.placeholder.com/58x75" alt="poster" class="w-8">
                            @endif
                           
                            <span class="ml-4">{{$result['title']}}</span>
                        </a>
                    </li>
                    @endforeach
                
                
                </ul>
            @else
                <div class="px-3 py-3">
                    No results for "{{$search}}"
                </div>
            @endif
            
        </div>
    @endif
    
</div>
