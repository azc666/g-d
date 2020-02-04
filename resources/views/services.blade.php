@extends('layout')

@section('content')

{{-- <body class="relative m-0 pb-48 min-h-full bg-fixed bg-no-repeat bg-center bg-cover"
  style="background-image: url(./assets/tie-dye2.png)"> --}}

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="flex p-8 pb-2 mt-16 mx-auto container background-trans border rounded-lg shadow-lg">

  <div class="flex container m-4">

    <div class="w-1/4">
      <img class="w-full mr-12" src="/assets/posters/services.jpg" alt="">
    </div>

    <div class="w-3/4">
      <h1 class="text-6xl text-gray-800 pl-12 text-left font-chicle">
        Our Services
      </h1>
      <h3 class="text-3xl text-gray-800 pl-12 text-left font-chicle">
        Printing
      </h3>
      <p class="text-xl text-gray-700 m-12 mt-0 mb-6 font-myriad">
        Our high-speed digital color press paired with our powerful RIPs, produces documents with world-class image quality. The
        digital press is pantone certified and can accommodate heavy stocks. From direct mail projects using VDP (variable data
        printing), to posters and short-run multi-page stitched booklets, you can expect faithful color for your photos, images
        and text.

        We have over 30 years experience in commercial offset printing, and have integrated our digital prepress expertise into
        the printing processes. We maintain the highest quality production standards for products like business cards,
        envelopes, stationery, brochures, flyers, carbonless sets, as well as other traditional business printing.
      </p>
      <h3 class="text-3xl text-gray-800 pl-12 text-left font-chicle">
        Variable Data Printing
      </h3>
      <p class="text-xl text-gray-700 m-12 mt-0 mb-6 font-myriad">
        VDP is the engine that automates the production of unique, relevant communications cross-media. These cross-media
        campaigns motivate the recipients to take action. Create personalized direct mail with postcards, flyers, letters, or
        virtually any marketing and sales promotional piece, that utilizes variable data and leads the recipient to their
        personal URL microsite. VDP is also a cost effective solution for products such as numbered tickets, event passes or any
        other item that requires personalization. Make more of an impact at your next event with less effort!
      </p>
      <h3 class="text-3xl text-gray-800 pl-12 text-left font-chicle">
        Mailing Services
      </h3>
      <p class="text-xl text-gray-700 m-12 mt-0 mb-6 font-myriad">
        We offer full mailing services including targeted lists to assist you in reaching your largest possible audience. Our
        services include addressing, CASS certification, list de-dupe, route presort, NCOA updates, inserting and mail drop.
        Also, you can expect to pay the lowest allowable postage rates!
      </p>
      <h3 class="text-3xl text-gray-800 pl-12 text-left font-chicle">
        Large Format
      </h3>
      <p class="text-xl text-gray-700 m-12 mt-0 font-myriad">
        This is the age of large color. Today, in order for your ideas to be effective, images must be big, bold, and colorful.
        Our Archival compatible large format color prints and in-house laminating and mounting department can add that finishing
        touch to your trade show exhibits, POP signage, backlit signage, vinyl banners and more. Let Graphics + Design help make
        your BIG idea look great.
      </p>


    </div>

  </div>

</div>

<div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
