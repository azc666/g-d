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
      <img class="w-0 sm:w-full mr-12" src="/assets/posters/homeimg.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="ml-24 text-4xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
        Your Message Has Been Submitted!
      </h1>
      <p class="text-base sm:text-xl text-gray-700 ml-12 mb-2 md:mb-8 sm:mr-6 font-myriad">

          <h3 class="text-xl font-semibold text-gray-800 pl-24">Thanks for your message.</h3> <br>
        <div class="text-base text-gray-700 pl-24">
          An email confirmation has been sent to <span class="font-semibold">{{ session()->get('name') }}</span> ({{ session()->get('email') }}).
          <br><br>
          <span class="font-semibold">Subject:</span>  <br>
          {{ session()->get('subject') }}
          <br><br>
          <span class="font-semibold">Your Message:</span> <br>
          {{ session()->get('message') }}
        </div>
      </p>
      {{-- <br><br> --}}
      <p
        class="sm:text-xl text-semibold bg-purple-200 border-purple-800 border-2 rounded-lg mt-16 mx-32 text-purple-700 hover:bg-purple-500 hover:text-purple-200">
        <a href="/"><span class="mx-48 p-4 ront-semibold uppercase">Home</span></a>
      </p>
    </div>

  </div>

</div>

<div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
