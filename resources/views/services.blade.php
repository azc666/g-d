@extends('layout')

@section('title')
Services
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="flex p-8 pb-0 sm:pb-2 md:-mb-6 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

  <div class="flex container m-0">

    <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-full mr-12" src="/assets/posters/services.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="text-4xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
        Our Services
      </h1>
      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        Printing
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-4 sm:mr-6 font-myriad">
        Our high-speed digital, pantone certified color presses produce documents with world-class image quality on a wide variety of substrates. For direct mail projects, posters and multi-page stitched booklets, you can expect faithful color for your photos, images and text. We maintain the highest quality production standards for traditional commercial printing products like business cards, envelopes, stationery, brochures, flyers, rack cards, and carbonless sets.
      </p>

      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        Mailing Services & Variable Data
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-4 sm:mr-6 font-myriad">
        We offer full mailing services including targeted lists to assist you in reaching your largest possible audience. Our services include addressing, CASS certification, list de-dupe, route presort, NCOA updates, inserting, sealing, and mail drop. You can expect to pay the lowest allowable postage rates!
      </p>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-4 sm:mr-6 font-myriad">
        Target your audience with personalized commucications. We can extend your targeted marketing campaigns beyond direct mail with email, text, and pURL campaigns for maximum effectiveness. Variable Data is perfect for other products as well, including Name Badges, Table Cards, Event Passes, and other digitally printed items.
      </p>

      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        Posters and Trade Show Signage
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 pb-8 sm:mr-6 font-myriad">
        Make Your ideas really pop! Archival fine art prints, POP displays, floor graphics, backlit signage, indoor & outoor vinyl banners, and trade show items are some of the products we offer. Our in-house laminating and mounting department can add that finishing
        touch to your project. Let Graphics + Design help make
        your BIG idea look great.
      </p>

      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        Typesetting & Design Services
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 pb-8 sm:mr-6 font-myriad">
        Not into the "design thing"? No worries! We can help from concept to completion. Create or augment your branding with products ranging from logos to traditional business products including Business Cards, Brochures, Flyers and much more! Our staff will work with you directly, making sure you are part of the creative process through the duration of your project.
      </p>


    </div>

  </div>

</div>

<div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
