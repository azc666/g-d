<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>tw-card</title>
</head>

<body class="bg-gray-300">
  <div class="bg-gray-100 flex">
    <div class="px-8 py-12 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
      <div class="xl:max-w-lg xl:ml-auto">
        <img class="h-10" src="/assets/logo.svg" alt="Workation Logo">
        <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden"
          src="/assets/beach-work.jpg" alt="">
        <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:mt-8 sm:text-4xl lg:text-3xl xl:text-4xl">
          You can work from anywhere.
          <br class="hidden lg:inline"><span class="text-indigo-500">Take advantage of it.</span>
        </h1>
        <p class="mt-2 text-gray-600 sm:mt-4 sm:text-xl">
          Workcation helps you find work-friendly rentals in beautiful locations so you can enjoy some nice weather even
          when
          you're not on vacation.
        </p>
        <div class="mt-4 sm:mt-6">
          <a href="#" class="btn btn-indigo shadow-lg sm:text-base">Book
            your escape</a>
          <a href="#" class="ml-2 btn btn-gray sm:text-base">Learn More</a>
        </div>
      </div>

    </div>
    <div class="hidden lg:block lg:w-1/2 lg:relative">
      <img class="absolute inset-0 h-full w-full object-cover object-center" src="/assets/beach-work.jpg" alt="">
    </div>
  </div>

  <div id="app">
    <example-component></example-component>
  </div>
  <div id="app2">
    <example2-component></example2-component>
  </div>
  <div id="app3">
    <app-component></app-component>
  </div>

  <script src="/js/app.js"></script>

</body>

</html>
