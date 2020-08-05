@extends('layout')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
@section('title')
Contact Us
@endsection

@section('head')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://parsleyjs.org/dist/parsley.js"></script>
<link rel="stylesheet" href="/css/parsley.css">
<style>
  @media screen and (min-width: 375px) {
    span img {
      width: 20px;
      height: 20px;
    }
  }

  @media screen and (min-width: 640px) {
    span img {
      width: 24px;
      height: 24px;
    }
  }

  @media screen and (min-width: 1024px) {
    .icon {
      width: 24px;
      height: 24px;
    }
  }

  .test {
    color: red;
  }
</style>
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="sm:p-6 pb-20 sm:mt-8 sm:mb-0 mx-auto container background-trans border rounded-lg shadow-2xl">

  <div class="flex">
    <div class="sm:w-1/4">
      <img class="w-0 sm:w-full sm:pb-0 sm:mb-0" src="/assets/posters/contactus.jpg" alt="">
    </div>


    <div class="md:w-3/4 sm:-mb-32">

      <h1 class="xxs:pl-20 xs:pl-24 sm:-pl-30 md:-ml-20 text-4xl lg:text-5xl text-gray-800 text-center font-chicle">
        Need to Contact Us?
      </h1>
      <h3
        class="xxs:pl-16 xs:pl-22 sm:ml-2 sm:mb-6 md:-ml-20 text-2xl md:text-3xl lg:text-4xl text-gray-800 text-center leading-tight font-chicle">
        Call, email, send us a message,
        <span class="lg:hidden"><br></span>
        <a href="#map" class="border-b-2 border-teal-600 hover:text-gray-600">or just stop on
          by</a>&nbsp;&#128522;<br>
      </h3>

      <div class="flex justify-center xxs:block">
        <div class="flex-1 xxs:pl-12 xxs:mt-4 xs:pl-16 sm:ml-12 sm:mb-20 md:-ml-12 text-center">
          <span class="text-base sm:text-xl md:text-2xl font-semibold sm:-ml-8">Graphics + Design</span>
          <p class="xxs:-mb-4 md:text-xl lg:text-xl text-center">
            <span class="sm:-ml-8 tracking-tighter">1111</span> W Cass Street
            <br>
            <span class="sm:-ml-8">Tampa, FL 33606</span>
          </p>
        </div>

        <div class="lg:hidden flex-1 xxs:mt-8">
          <span class="xxs:flex sm:-mt-16 sm:ml-3 md:ml-12 sm:text-base md:text-lg">
            <img class="xxs:ml-26 xs:ml-32" src="assets/icons/phone2.png" alt="" />&nbsp;&nbsp;
            <a href="tel:8132549444" class="xs:-mr-8 hover:text-gray-600">813-254-9444</a>
          </span>

          <span class="xxs:flex sm:ml-4 sm:mt-2 md:ml-12 md:pb-2 sm:text-base md:text-lg">
            <img class="xxs:ml-24 xs:ml-30 sm:-ml-2" src="assets/icons/at2.png" alt="" />
            &nbsp;&nbsp;
            <a href="mailto:output@g-d.com"
              class="xxs:-mr-6 xs:-mr-8 sm:mr-0 sm:mb-6 hover:text-gray-600">output@g-d.com</a>
          </span>
        </div>

        <div class="xxs:invisible lg:visible lg:flex lg:justify-around lg:px-40 lg:-mt-16">

          <div class="lg:inline-flex lg:text-xl">
            <div class="lg:self-center">
              <img class="icon lg:visible lg:self-center" src="assets/icons/phone2.png" alt="" />
            </div>
            &nbsp;&nbsp;
            <div class="lg:visible self-center">
              <a href="tel:8132549444" class="hover:text-gray-600">813-254-9444</a>
            </div>
          </div>

          <div class="lg:inline-flex lg:text-xl">
            <div class="lg:self-center">
              <img class="icon lg:visible lg:self-center" src="assets/icons/at2.png" alt="" />
            </div>
            &nbsp;&nbsp;
            <div class="lg:visible self-center">
              <a href="mailto:output@g-d.com" class="hover:text-gray-600">output@g-d.com</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="xxs:-mt-26 xxs:ml-6 xxs:w-80 xs:w-88 xs:ml-8 xs:mr-4 md:pl-3 lg:pl-16 2xl:pl-80 md:pt-8">
    <div
      class="sm:ml-2 sm:mt-26 lg:ml-48 xl:ml-80 sm:w-108 md:w-122 lg:w-650 xl:w-700 lg:-mt-28 xl:-mt-56 2xl:-mt-80 p-2 pb-6 bg-teal-300 opacity-75 order-solid border-2 border-gray-600 rounded">

  <form id="validate_form" class="w-full" action="/contact-response" method="POST">
    @csrf

    <div class="input flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 pt-2 -mb-2">
        <label for="name"
          class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">Name*</label>
        <input type="text" name="name" id="name" placeholder="John Lennon" value="{{ old('name', '') }}"
          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-500"
          required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-minlength="5" data-parsley-maxlength="100"
          data-parsley-trigger="keyup" />
      </div>
    </div>

    <div class="input flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 pt-2 -mb-2">
        <label for="email" class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">email*
          (Must be a verifyable address)</label>
        <input type="email" name="email" id="email" placeholder="john@test.com" value="{{ old('email'), '' }}"
          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-500"
          required data-parsley-type="email" data-parsley-maxlength="100" data-parsley-trigger="keyup" />

        @if (Session::get('error'))
          <div class="text-red-900 font-semibold mt-4 pl-4 uppercase">
            {{ session('error') }}
          </div>
        @endif

      </div>

    </div>

    <div class="input flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 pt-2 -mb-2">
        <label for="subject"
          class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">Subject*</label>
        <input type="text" name="subject" id="subject" placeholder="Your Subject" value="{{ old('subject', '') }}"
          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-500"
          required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-minlength="6" data-parsley-maxlength="50"
          data-parsley-trigger="keyup" />
      </div>
    </div>

    <div class="input flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 pt-2 -mb-2">
        <label for="message"
          class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">message*</label>
        <textarea id="message" name="message" type="text" placeholder="Your Message"
          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-lg "
          required maxlength="255" minlength="10">{{ old('message') }}</textarea>
      </div>
    </div>

    <div class="md:flex md:justify-center w-full pt-4 px-2">

      <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
      <button
        class="submit shadow focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 w-full rounded bg-teal-700 hover:bg-teal-600"
        type="submit">
        <span class="uppercase">Send the Message</span>
      </button>
    </div>

  </form>

</div>
</div>

<div id="map" class="flex mt-12 xxs:mx-6">
  <iframe class="rounded-lg shadow-2xl flex-1 h-xxl -mt-6 -mb-12 sm:-mb-2" frameborder="0" style=""
    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfFnBuFVaBQR0FFyUS7-9fY&key={{ env('GOOGLE_MAPS_KEY') }}"
    allowfullscreen></iframe>
</div>


</div>

@endsection

@section('scripts')
<script>
  $(document).ready(function(){
              $('#validate_form').parsley();
            });
</script>
@endsection
