@extends('layout')

@section('title')
Message Submitted
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="flex p-8 pb-0 sm:pb-2 md:-mb-6 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

  <div class="flex container m-0">

    <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-full mr-12 pb-8" src="/assets/posters/homeimg.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="xxs:ml-0 xxs:mb-8 sm:pl-6 ml-24 text-4xl text-gray-800 sm:text-center text-center font-chicle">
        Your Message Has Been Submitted!
      </h1>
      <p class="text-base sm:text-xl text-gray-700 ml-12 mb-2 md:mb-8 sm:mr-6 font-myriad">

        <h3 class="text-xl font-semibold text-gray-800 xxs:pl-4 xs:pl-8 sm:ml-12 lg:ml-32 xl:ml-56 2xl:ml-72 pl-24">
          Thanks for your message.</h3> <br>
        <div class="text-base text-gray-700 xxs:pl-4 xs:pl-8 sm:ml-12 lg:ml-32 xl:ml-56 2xl:ml-72 pl-24">
          An email confirmation has been sent to: <br> <span class="font-semibold">{{ $name }}</span> ({{ $email }}).
          <br><br>
          <span class="font-semibold">Subject:</span> <br>
          {{ $subject }}
          <br><br>
          <span class="font-semibold">Your Message:</span> <br>
          {{ $message }}
        </div>
      </p>

      <a href="/">
        <p
          class="sm:text-xl text-center bg-purple-200 border-purple-800 border-2 rounded-lg mt-16 mb-8 xxs:w-64 sm:w-72 md:w-88 lg:w-96 xl:w-122 mx-auto text-purple-700 hover:bg-purple-500 hover:text-purple-200 shadow-2xl">
          <span class="font-semibold uppercase">Home</span>
        </p>
      </a>

    </div>

  </div>

</div>

{{-- <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap"> --}}

  @endsection
