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
</head>

<body class="relative m-0 pb-48 min-h-full bg-fixed bg-no-repeat bg-center bg-cover"
  style="background-image: url(./assets/tie-dye2.png)">

  @yield('content')

  <div id="footer">
    <footer-component></footer-component>
  </div>

  {{-- </div> --}}

  <script src="/js/app.js"></script>

</body>

</html>
