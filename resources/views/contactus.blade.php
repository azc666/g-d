@extends('layout')

@section('title')
Contact Us
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="p-8 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-2xl">

  <div class="flex container m-0">

    <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-full mr-12" src="/assets/posters/homeimg.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="text-4xl sm:text-5xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
        Need to Contact Us?
      </h1>
      <h3 class="text-xl sm:text-2xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
        You can either call, fax, email, send the form or just stop on by &nbsp;&#128522;
      </h3>

      <div class="container flex">
        <div class="flex-1/3">
          <p class="tracking-tight text-base sm:text-xl text-gray-700 sm:ml-12 mt-6 mb-2 md:mb-16 sm:mr-12 font-myriad">
            <span class="font-bold">Graphics + Design</span><br>
            <span class="tracking-tighter">1111</span> W Cass Street<br>
            Tampa, FL 33606<br><br>
            <img class="h-4 w-4 inline-block" src="assets/icons/phone.svg" alt />
            &nbsp;813-254-9444
            <br />

            <img class="h-4 w-4 inline-block" src="assets/icons/fax.svg" alt />
            &nbsp;813-254-9445
            <br />

            <img class="h-4 w-4 inline-block" src="assets/icons/at.svg" alt />
            &nbsp;<a href="mailto:output@g-d.com">output@g-d.com</a>
            <br />
          </p>
        </div>

        <div class="flex-2/3 mt-6 p-4 h-lg45 w-3/5 bg-teal-300 opacity-75 order-solid border-2 border-gray-600 rounded">
          <form class="w-full">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3 mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-first-name">
                  Name
                </label>
                <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white"
                  id="grid-first-name" type="text" placeholder="John Lennon">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-password">
                  E-mail
                </label>
                <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="email" type="email" placeholder="john@johnimagines.com">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3 mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-first-name">
                  Subject
                </label>
                <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white"
                  id="grid-first-name" type="text" placeholder="subject">
              </div>
            </div>

            {{-- <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="subject">
                  Subject
                  </label>
                <select id="subject" class="block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 mb-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-10" style="box-sizing: border-box;">
                  <option value="" disabled selected hidden><span class="text-gray-100 h-10">Select a Subject</span> </option>
                  <option value="mr">General Inquiry</option>
                  <option value="ms">Request an Estimate</option>
                  <option value="ms">Technical Question</option>
                  <option value="ms">Billing Question</option>
                  <option value="ms">Words of Wisdom</option>
                </select>
              </div>
            </div> --}}

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-password">
                  Message
                </label>
                <textarea
                  class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-1 px-2 pb-2 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-xlg resize-none"
                  id="message"></textarea>
              </div>
            </div>

            <div class="md:flex md:justify-center">
              <div class="md:w-full">
                <button
                  class="shadow bg-teal-700 hover:bg-teal-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 w-full rounded"
                  type="button">
                  <span class="uppercase">Submit the Inquiry</span>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>

      <br>
<span class="italic">Note: Safari versions before Catalina may not display the Google Map.</span>
    </div>
  </div>

  <div class="flex">
    <iframe class="rounded-lg shadow-2xl sm:flex-1 h-xxl mt-1 mb-1" width: 100% frameborder="0" style=""
      src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfFnBuFVaBQR0FFyUS7-9fY&key={{ env('GOOGLE_MAPS_KEY') }}"
      allowfullscreen></iframe>
  </div>

</div>


@endsection
