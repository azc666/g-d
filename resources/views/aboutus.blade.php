@extends('layout')

@section('title')
  About Us
@endsection

@section('content')

  <div id="mainnav">
    <nav-component></nav-component>
  </div>

  <div class="flex p-8 pb-0 sm:pb-8 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

    <div class="flex container m-0">

      <div class="w-1 sm:w-1/4">
        <img class="w-0 sm:w-full mr-12" src="/assets/posters/homeimg.jpg" alt="">
      </div>

      <div class="w-full sm:w-3/4">
        <h1 class="text-4xl md:text-6xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
          About Us
        </h1>
        <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 md:mb-16 sm:mr-6 font-myriad">
          Graphics + Design has been a leading service provider to the Tampa Bay Area since 1987, supplying pre-press
          services,
          printing, post-press services and large format color output. We also offer direct mail (static and variable)
          with
          complete mailing services. Combined with our cross-media marketing services (VDP, pURLs, eMail Campaigns and
          Text
          Campaigns), we can provide complete targeted marketing solutions.
        </p>
        <h1 class="text-4xl md:text-6xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
          Mission Statement
        </h1>
        <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-16 sm:mr-6 font-myriad">
          From company inception to the present, our mission has remained the same: To provide dependable, personalized
          service.
          Our philosophy is to treat your project as our own. With an emphasis on service, we strive for the best
          quality
          possible, at a fair price and timely delivery.
        </p>
      </div>

    </div>

  </div>

  <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
