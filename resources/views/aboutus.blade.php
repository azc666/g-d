@extends('layout')

@section('title')
  About Us
@endsection

@section('content')

  <div id="mainnav">
    <nav-component></nav-component>
  </div>

  <div class="flex p-8 pb-0 sm:pb-2 md:-mb-6 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

    <div class="flex container m-0">

      <div class="w-1 sm:w-1/4">
        <img class="w-0 sm:w-full mr-12" src="/assets/posters/homeimg.jpg" alt="">
      </div>

      <div class="w-full sm:w-3/4">
        <h1 class="text-4xl text-gray-800 sm:mb-4 sm:pl-12 text-center sm:text-left font-chicle">
          Our Story
        </h1>
        <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-4 sm:mr-6 font-myriad">
          Graphics + Design was formed in 1987 to provide dependable, personalized graphic services to the Tampa Bay business community. We are proud of our 30 years experience with commercial printing, and we continue to maintain the highest quality production standards.</p>
          <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-4 sm:mr-6 font-myriad">
            Whether you are a designer, advertising agency, local business or national corporation, our personable and knowledgeable staff can assist with your image, and extend your outreach to a targeted clientel.</p>
          <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-4 sm:mr-6 font-myriad">
            Throughout the years our philosophy has remained unchanged: treat your project as our own. With an emphasis on service, we strive for the best quality possible, at a fair price, and timely delivery.</p>
            <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-4 sm:mr-6 font-myriad">
              See what our clients think of us on the <span
                class="tsm:text-xl text-semibold bg-purple-200 border-purple-800 border-2 rounded-lg p-1 pl-2 pr-2 text-purple-700 hover:bg-purple-500 hover:text-purple-200">
                <a href="/testimonials">Testimonials</a></span> page.</p>
          <p class="font-semibold sm:text-xl text-gray-700 text-semibold sm:ml-12 mb-6 sm:mr-6 font-myriad">
            Graphics + Design is your go-to, full service, print and mail resource!</p>
           <p class="font-semibold text-center sm:text-2xl text-gray-700 text-semibold sm:ml-12 mb-4 md:mb-16 sm:mr-6 font-myriad">
            Graphics + Design<br><span class="italic sm:text-xl">Imaging at the Speed of Business</span> </p>



      </div>

    </div>

  </div>

  <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
