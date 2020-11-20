@extends('layout')

@section('title')
G+D Home
@endsection

@section('content')

<body class="relative m-0 pb-48 min-h-full bg-fixed bg-no-repeat bg-center bg-cover"
  style="background-image: url(./assets/tie-dye2.png)">

  <div id="mainnav">
    <nav-component></nav-component>
  </div>

  <h1 class=" mt-4 leading-none text-4xl sm:text-6xl text-center font-myriad font-bold tracking-tight">Graphics + Design
  </h1>
  <h3 class="mt-0 text-2xl sm:text-3xl text-center font-myriad italic">Imaging at the Speed of Business</h3>

  <div class="pb-4 flex">
    <div class="mx-auto sm:w-3/4 p-2 mt-5 sm:mt-8 background-trans border rounded-lg shadow-2xl">
      <img class="w-auto mx-auto object-cover rounded" src="/assets/G+D Building2.png" alt="">
      <div class="flex justify-between">
        <span class="block pt-2 pr-2 mb-0 text-sm sm:text-base text-red-500 font-bold">Hours: M-F 9:30am - 5pm</span>
        <span class="block pt-2 pr-2 mb-0 text-sm sm:text-base text-red-500 font-bold">Office Closed for Thanksgiving 11/26-11/27</span>
        <span class="pt-2 pr-2 mb-0 text-right text-sm sm:text-base text-gray-800 text-medium">The Home Office -
          Tampa, FL</span>
      </div>

    </div>
  </div>

  <div class="container pb-0 sm:pb-0 mx-auto flex flex-wrap">

    <div class="flex-1 zoom">
      <a href="/aboutus" class=" block hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            About Us
          </div>
          <img class="h-auto w-full object-fill" src="/assets/posters/homeimg.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/services" class=" block hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            Services
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/services.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/sendfiles" class="hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            Send Files
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/sendfiles.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/contactus" class="hover:bg-transparent">
        <div class="w-48 p-2 mt-3 mb-48 sm:mb-0 sm:mt-8 mx-auto background-trans border rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            Contact Us
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/contactus.jpg" alt="">
        </div>
      </a>
    </div>

  </div>

  @endsection
