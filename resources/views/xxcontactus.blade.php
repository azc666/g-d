<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/tie-dye2-icon.png">
  <title>Contactus</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/lln4snf.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/parsley.css">
  {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
  {{-- @yield('stylesheets') --}}
</head>

{{-- @section('stylesheets')
  <link rel="stylesheet" href="/css/parsley.css">
@endsection --}}
<body class="relative m-0 pb-48 min-h-screen bg-fixed bg-no-repeat bg-center bg-cover"
  style="background-image: url(./assets/tie-dye2.png)">


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
      <h3 class="text-2xl 2xl:text-3xl text-gray-800 xxs:-mb-4 md:-mb-2 lg:mb-4 text-center leading-tight font-chicle">
        Call, email, send us a message
        <span class="2xl:hidden"><br></span>
        <a href="#map" class="border-b-2 border-teal-600 hover:text-gray-600">or just stop on
          by</a>&nbsp;&#128522;
      </h3>

      <div class="container md:block 2xl:block 2xl:px-32">
        <div class="block sm:flex-1/3 md:flex-1/3 2xl:flex-1/3 lg:-ml-2">
          <p
            class="tracking-tight text-base sm:text-xl text-gray-700 md:ml-12 mt-6 -mb-2 text-center md:text-cemter 2xl:text-center md:mr-12 font-myriad">

            <div class="text-center sm:pt-3 md:pt-3">
              <span class="text-xl 2xl:text-2xl font-bold">Graphics + Design</span>

              <p class="-mb-2 text-center md:text-center 2xl:text-center 2xl:text-xl">
                <span class="tracking-tighter">1111</span> W Cass Street
                <br>
                Tampa, FL 33606
              </p>
            </div>
            {{-- </a> --}}

            <br>

            <div class="flex justify-around mx-auto -mt-2 md:mt-4 xl:mt-6 mb-3 xl:mx-24">

              <span class="flex md:pb-2 sm:text-base md:text-lg 2xl:text-xl">
                <img style="width:24px; height:24px;" class="" src="assets/icons/phone2.png" alt="" />&nbsp;
                <a href="tel:8132549444" class="hover:text-gray-600">813-254-9444</a>
              </span>

              <span class="flex sm:flex md:pb-2 sm:text-base md:text-lg 2xl:text-xl">
                <img style="width:24px; height:24px;" class="" src="assets/icons/at2.png" alt="" />&nbsp;
                <a href="mailto:output@g-d.com" class="hover:text-gray-600">output@g-d.com</a>
              </span>

            </div>

            <br />
          </p>
        </div>

        <div>
          {{-- <vuelidatetest-component></vuelidatetest-component> --}}
          {{-- <contact-form></contact-form> --}}
          {{-- <testsubmit-component></testsubmit-component> --}}

          <div
            class="flex-2/3 sm:-ml-24 md:ml-8 lg:ml-16 xl:ml-32 2xl:ml-16 mx-auto mt-2 sm:mt-8 md:mt-0 px-2 pb-6 pt-0 h-56 sm:w-108 lg:w-122 xl:w-650 2xl:w- bg-teal-300 order-solid border-2 border-gray-600 rounded">

            {{-- @if ($errors->any())
            <div class="text-red-900 font-semibold">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif --}}

            <form id="validate_form" class="w-full" action="/contact-response" method="POST">
              @csrf

              <div class="input flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 pt-2 -mb-2">
                  <label for="name"
                    class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">Name*</label>
                  <input type="text" name="name" id="name"
                    placeholder="John Lennon"
                    value="{{ old('name', '') }}"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-800"
                    required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" />
                </div>
              </div>

              <div class="input flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 pt-2 -mb-2">
                  <label for="email"
                    class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">email*</label>
                  <input type="email" name="email" id="email"
                    placeholder="john@test.com"
                    value="{{ old('email', '') }}"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-800"
                    required data-parsley-type="email" data-parsley-trigger="keyup" />
                </div>
              </div>

              <div class="input flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 pt-2 -mb-2">
                  <label for="subject" class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">Subject*</label>
                  <input type="text" name="subject" id="subject" placeholder="Your Subject" value="{{ old('subject', '') }}"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-800"
                    required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" />
                </div>
              </div>

              <div class="input flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 pt-2 -mb-2">
                  <label for="message"
                    class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1">message*</label>
                  <textarea id="message" name="message" type="text" placeholder="Your Message"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-lg "
                     required maxlength="10">{{ old('message') }}</textarea>


                </div>
              </div>

              <div class="md:flex md:justify-center">
                <div class="w-full pt-4 px-2">

                  <button class="submit shadow focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 w-full rounded
                    bg-teal-700 hover:bg-teal-600" type="submit"><span class="uppercase">Send the Message</span>
                  </button>


                </div>
              </div>

            </form>

          </div>

        </div>

      </div>

      <br><br><br>

    </div>
  </div>

  <div id="map" class="flex">
    <iframe class="rounded-lg shadow-2xl flex-1 h-xxl -mt-6 -mb-12 sm:-mb-2" frameborder="0" style=""
      src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfFnBuFVaBQR0FFyUS7-9fY&key={{ env('GOOGLE_MAPS_KEY') }}"
      allowfullscreen></iframe>
  </div>

</div>
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
    {{-- <script src="js/parsley.min.js"><script> --}}



</body>


</html>
<script>
    $(document).ready(function(){
      $('#validate_form').parsley();
    });
    </script>
