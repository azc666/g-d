@extends('layout')

@section('title')
Contact Us
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="p-6 pb-20 sm:mt-8 sm:mb-0 mx-auto container background-trans border rounded-lg shadow-2xl">

  <div class="sm:flex container m-0 lg:pb-8 2xl:pb-16">

    <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-full mr-12" src="/assets/posters/contactus.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="text-4xl 2xl:text-5xl text-gray-800 text-center font-chicle">
        Need to Contact Us?
      </h1>
      <h3
        class="text-2xl 2xl:text-3xl text-gray-800 xxs:-mb-4 md:-mb-2 lg:mb-4 text-center leading-tight font-chicle">
        Call, email, send us a message
        <span class="2xl:hidden"><br></span>
        <a href="#map" class="hover:text-gray-600">or just stop on
          by</a>&nbsp;&#128522;
      </h3>

      <div class="container md:block 2xl:block 2xl:px-32">
        <div class="block sm:flex-1/3 md:flex-1/3 2xl:flex-1/3 lg:-ml-2">
          <p
            class="tracking-tight text-base sm:text-xl text-gray-700 md:ml-12 mt-6 mb-2 text-center md:text-cemter 2xl:text-center md:mr-12 font-myriad">

            <div class="text-center sm:pt-3 md:pt-5">
              <span class="text-xl 2xl:text-2xl font-normal">Graphics + Design</span>

              <p class="text-center md:text-center 2xl:text-center">
                <span class="tracking-tighter">1111</span> W Cass Street
                <br>
                Tampa, FL 33606
              </p>
            </div>


            <br>

            <div class="flex justify-around mx-auto -mt-2 md:mt-4 xl:mt-6 mb-3 sm:mb-10 xl:mx-24">

              <span class="flex sm:flex md:pb-2 sm:text-base md:text-xl">
                <img class="h-4 w-4" src="assets/icons/phone.svg" alt=""/>&nbsp;
                <a href="tel:8132549444" class="hover:text-gray-600">813-254-9444</a>
              </span>

              {{-- <span class="flex items-center md:flex md:pb-2">
                <img class="h-4 w-4" src="assets/icons/fax.svg" alt=""/>&nbsp;
                813-254-9445
              </span> --}}

              <span class="flex sm:flex md:pb-2 sm:text-base md:text-xl">
                <img class="h-4 w-4" src="assets/icons/at.svg" alt=""/>&nbsp;
                <a href="mailto:output@g-d.com" class="hover:text-gray-600">output@g-d.com</a>
              </span>

            </div>

            <br />
          </p>
        </div>



        <div id="validate">
          <formtest-component></formtest-component>
        </div>
      </div>



      <br><br><br>
      {{-- <span class="italic">Note: Safari versions before Catalina may not display the Google Map.</span> --}}
    </div>
  </div>

  <div id="map" class="flex">
    <iframe class="rounded-lg shadow-2xl flex-1 h-xxl -mt-6 -mb-12 sm:-mb-2" frameborder="0" style=""
      src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfFnBuFVaBQR0FFyUS7-9fY&key={{ env('GOOGLE_MAPS_KEY') }}"
      allowfullscreen></iframe>
  </div>

</div>
<div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

@endsection
