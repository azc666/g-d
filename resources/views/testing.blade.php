<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testing Nav</title>
  {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-fixed bg-no-repeat bg-center bg-cover" style="background-image: url(./assets/tie-dye2.png)">
  <div>
    <div class="max-w-4xl mt-6 mx-auto">
      <ul id="primary" class="flex mx-auto justify-around">
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Sending Files</a></li>
        <li><a href="">Contact Us</a></li>
      </ul>
    </div>
  </div>

  <header class="bg-gray-900 opacity-50">
    <div class="flex items-center justify-between px-4 py-3">
      <div>
        <img class="h-8" src="/assets/logo-inverted.svg" alt="Workcation">
      </div>
      <div>
        <button type="button" class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="px-2 pt-2 pb-4">
      <a href="#" class="block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">About Us</a>
      <a href="#" class="mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Services</a>
      <a href="#" class="mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Sending Files</a>
      <a href="#" class="mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Contact Us</a>
    </div>

  </header>
</body>

</html>
