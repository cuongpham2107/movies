<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Trang chủ - Netflix</title>

    <link rel="shortcut icon" href="{{ asset('img/nficon2016.ico') }}" type="image/png">

    <meta property="og:image" content="{{ asset('img/logo-netflix.jpg') }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="Trang chủ - Netflix" />
   
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

  <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @livewireStyles
 
</head>
<body class="font-sans bg-gray-900 text-white">

  @include('layouts.header')

  @yield('content')

  @yield('scripts')
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>