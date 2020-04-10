@extends('layout')

@section('title')
  paf confirmation
@endsection

@section('content')

  <div id="mainnav">
    <nav-component></nav-component>
  </div>

  <div class="flex p-8 pb-0 sm:pb-2 md:-mb-6 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

    <div class="flex container m-0">

      <div class="w-1 sm:w-1/4">
        <img class="w-0 sm:w-full mr-12" src="/assets/posters/paf.png" alt="">
      </div>

      <div class="w-full sm:w-3/4">
        <h1 class="text-4xl text-gray-800 sm:mb-4 sm:pl-12 text-center sm:text-left font-chicle">
          Thank You!
        </h1>
        <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-4 sm:mr-6 font-myriad">
          You have successfully completed the USPS PAF (Processing Acknowledgment Form) confirming that you are the rightful list owner.</p>
          <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-8 sm:mr-6 font-myriad">
            <img src="assets/MeterStamp1.png" alt="">
            We will contact you shortly to provide the correct postage amount for your mailing. Thank you for giving us the opportunity to serve your direct mailing requirements.</p>

          <p class="font-semibold sm:text-xl text-gray-700 text-semibold sm:ml-12 mb-6 sm:mr-6 font-myriad text-center">
            Graphics + Design is your go-to, full service, print and mail resource!</p>
           <p class="font-semibold text-center sm:text-2xl text-gray-700 text-semibold sm:ml-12 mb-4 md:mb-16 sm:mr-6 font-myriad">
            Graphics + Design<br><span class="italic sm:text-xl">Imaging at the Speed of Business</span> </p>



      </div>

    </div>

  </div>

  <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
