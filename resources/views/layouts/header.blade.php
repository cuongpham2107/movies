<nav class="w-full absolute bg-gradient-to-b from-black/70 to-transparent " x-data="menu_header">
    <div class="relative px-6  py-4 lg:py-0">
        <div class="w-full h-screen max-w-xs lg:h-auto lg:max-w-full flex flex-col lg:!flex  lg:flex-row  items-center lg:justify-between lg:py-5 absolute lg:static z-50 top-0 right-0 bg-gray-800 lg:bg-transparent translate-x-full lg:translate-x-0 transition-all duration-300 "
            :class="open == true ? '!translate-x-0' : ''">
            <ul class="w-full pt-14 lg:pt-0 px-4 lg:px-0 flex flex-col lg:flex-row lg:items-center   space-x-0 lg:space-x-10 ">
                <li class=" border-b border-gray-400 pb-4">
                    <a href="{{ route('home.index') }}" class="hidden  lg:flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm.001 6c-.001 0-.001 0 0 0h-.466l-2.667-4H20l.001 4zM9.535 9 6.868 5h2.597l2.667 4H9.535zm5 0-2.667-4h2.597l2.667 4h-2.597zM4 5h.465l2.667 4H4V5zm0 14v-8h16l.002 8H4z">
                            </path>
                        </svg>
                        <span class="font-semibold text-lg">Movie App</span>
                    </a>
                </li>

                <li class="pt-4 pb-4 mt-3 md:mt-0 lg:pt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="pb-4 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="pb-4 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>

            </ul>
            <div class="flex flex-nowrap items-center pt-4 lg:pt-0 px-4 w-full lg:w-auto mt-3 lg:mt-0 space-x-2">
              <div class="flex-grow min-w-0 lg:w-64">
                <livewire:search-dropdown>
              </div>
                <div class="flex-none relative" x-data={open:false}>
                    <div class="flex items-center">
                        <a class="pr-2" href="#" @click="open = ! open ">
                            <img class="rounded-full w-8 h-8" src="{{ asset('img/avatar.jpg') }}" alt="">
                        </a>
                        <svg class="w-3 h-3 transition-all duration-700" :class="open == true ? 'rotate-180' : '' " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19z"></path></svg>
                    </div>
                    
                    <div x-show="open" class="hidden lg:flex border border-gray-700 bg-black/90 text-white  z-50 absolute top-[calc(100%+15px)] right-0 font-normal  max-w-[170px] w-max">
                        <svg class="absolute bottom-full right-[1.8rem] w-3 h-3 " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19z"></path></svg>
                        <ul class="flex flex-col  justify-center w-full text-sm">
                            <li class="flex items-center space-x-2 border-b border-gray-800 py-4 px-2">
                                <img class="rounded-full w-8 h-8 " src="{{ asset('img/avatar.jpg') }}" alt="">
                                <a href="">Cường</a>
                                <svg class="!ml-auto w-4 h-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path></svg>
                            </li>
                            <li class="flex px-2 my-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg>
                                <a class="pl-2" href="">Quản lý hồ sơ</a>
                            </li> 
                            <li class="flex px-2 mt-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"></path><path d="m11 16 5-4-5-4v3.001H3v2h8z"></path></svg>
                                <a class="pl-2" href="">Thoát hồ sơ</a>
                            </li> 
                            <li class="flex px-2 border-t border-gray-800 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                                <a class="pl-2" href="">Tài khoản</a>
                            </li>
                            <li class="flex px-2 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                                <a class="pl-2" href="">Trung tâm trợ giúp</a>
                            </li>
                            <li class="px-2 border-t border-gray-800 py-3">
                                <a class="" href="">Đăng xuất khỏi Netflix</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex lg:hidden   items-center relative z-50">
            <a href="{{ route('home.index') }}" class="flex items-center space-x-2 mr-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                    style="fill:currentColor;transform: ;msFilter:;">
                    <path
                        d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm.001 6c-.001 0-.001 0 0 0h-.466l-2.667-4H20l.001 4zM9.535 9 6.868 5h2.597l2.667 4H9.535zm5 0-2.667-4h2.597l2.667 4h-2.597zM4 5h.465l2.667 4H4V5zm0 14v-8h16l.002 8H4z">
                    </path>
                </svg>
                <span class="font-semibold text-lg ">Movie App</span>
            </a>
            
            <div class="flex-none relative pr-2" x-data={open:false}>
                <div class="flex items-center">
                    <a class="pr-2" href="#" @click="open = ! open ">
                        <img class="rounded-full w-8 h-8" src="{{ asset('img/avatar.jpg') }}" alt="">
                    </a>
                    <svg class="w-3 h-3 transition-all duration-700" :class="open == true ? 'rotate-180' : '' " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19z"></path></svg>
                </div>
                
                <div x-show="open" class="flex border border-gray-700 bg-black/90 text-white  z-50 absolute top-[calc(100%+15px)] right-0 font-normal  max-w-[170px] w-max">
                    <svg class="absolute bottom-full right-[1.8rem] w-3 h-3 " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19z"></path></svg>
                    <ul class="flex flex-col  justify-center w-full text-sm">
                        <li class="flex items-center space-x-2 border-b border-gray-800 py-4 px-2">
                            <img class="rounded-full w-8 h-8 " src="{{ asset('img/avatar.jpg') }}" alt="">
                            <a href="">Cường</a>
                            <svg class="!ml-auto w-4 h-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path></svg>
                        </li>
                        <li class="flex px-2 my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg>
                            <a class="pl-2" href="">Quản lý hồ sơ</a>
                        </li> 
                        <li class="flex px-2 mt-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"></path><path d="m11 16 5-4-5-4v3.001H3v2h8z"></path></svg>
                            <a class="pl-2" href="">Thoát hồ sơ</a>
                        </li> 
                        <li class="flex px-2 border-t border-gray-800 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                            <a class="pl-2" href="">Tài khoản</a>
                        </li>
                        <li class="flex px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                            <a class="pl-2" href="">Trung tâm trợ giúp</a>
                        </li>
                        <li class="mx-2 border-t border-gray-800 py-3">
                            <a class="" href="">Đăng xuất khỏi Netflix</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button @click="open = ! open" class="text-white rounded border p-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    style="fill: currentColor ;transform: ;msFilter:;">
                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                </svg>
            </button>
        </div>
    </div>


</nav>
<script>
     document.addEventListener('alpine:init', () => {
        Alpine.data('menu_header', () => ({
            open : false,
            user : false,
           
        }))
    })
</script>
