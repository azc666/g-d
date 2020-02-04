@extends('layout')

@section('content')
<body class="relative m-0 pb-48 min-h-full bg-fixed bg-no-repeat bg-center bg-cover"
  style="background-image: url(./assets/tie-dye2.png)">

  <div id="mainnav">
    <nav-component></nav-component>
  </div>

  <h1 class=" mt-3 sm:mt-6 text-4xl sm:text-6xl text-center font-myriad font-bold leading-tight">Send Files</h1>
  <h3 class="text-2xl sm:text-3xl text-center font-myriad italic">Imaging at the Speed of Business</h3>

  <div class="pb-6">
    <div class="p-8 mt-5 sm:mt-8 mx-auto container background-trans border rounded-lg shadow-lg">

      <img class="h-48 sm:h-64 xl:h-300 w-full object-cover xl:object-none" src="/assets/G+D Building.png" alt="">

    </div>
  </div>

  <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

    <div class="flex-1 zoom">
      <a href="/aboutus" class=" block hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
          <div class="font-chicle text-4xl text-center">
            About Us
          </div>
          <img class="h-auto w-full object-fill" src="/assets/posters/homeimg.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/services" class=" block hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
          <div class="font-chicle text-4xl text-center">
            Services
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/services.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/sendfiles" class="hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
          <div class="font-chicle text-4xl text-center">
            Send Files
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/sendfiles.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/contactus" class="hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
          <div class="font-chicle text-4xl text-center">
            Contact Us
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/sendfiles.jpg" alt="">
        </div>
      </a>
    </div>

  </div>

@endsection
