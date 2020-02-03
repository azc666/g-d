<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/lln4snf.css">
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="relative m-0 pb-48 min-h-full bg-fixed bg-no-repeat bg-center bg-cover"
  style="background-image: url(./assets/tie-dye2.png)">

  <div id="app">
    <nav-component></nav-component>
  </div>

  <h1 class=" mt-3 sm:mt-6 text-4xl sm:text-6xl text-center font-myriad font-bold leading-tight">Graphics+Design</h1>
  <h3 class="text-2xl sm:text-3xl text-center font-myriad italic">Imaging at the Speed of Business</h3>

  <div class="pb-6">
    <div class="p-8 mt-5 sm:mt-8 mx-auto container background-trans border rounded-lg shadow-lg">

      <img class="h-48 sm:h-64 xl:h-300 w-full object-cover xl:object-none" src="/assets/G+D Building.png" alt="">

    </div>
  </div>

  <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

<div class="flex-1">
    <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
      <div class="font-chicle text-4xl text-center">
        About Us
      </div>
      <img class="h-auto w-full object-fill" src="/assets/posters/homeimg.webp" alt="">
    </div>
</div>

    <div class="flex-1">
    <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
      <div class="font-chicle text-4xl text-center">
        Services
      </div>
      <img class="h-auto w-full object-cover" src="/assets/posters/services.webp" alt="">
    </div>
    </div>

    <div class="flex-1">
    <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
      <div class="font-chicle text-4xl text-center">
        Send Files
      </div>
      <img class="h-auto w-full object-cover" src="/assets/posters/sendfiles.webp" alt="">
    </div>
    </div>

    <div class="flex-1">
    <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto background-trans border rounded-lg shadow-lg">
      <div class="font-chicle text-4xl text-center">
        Contact Us
      </div>
      <img class="h-auto w-full object-cover" src="/assets/posters/sendfiles.webp" alt="">
    </div>
    </div>

  </div>

  <div id="footer">
    <footer-component></footer-component>
  </div>

  </div>
  <script src="/js/app.js"></script>
</body>

</html>
