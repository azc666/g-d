<!DOCTYPE html>
<html lang="en" class="m-0 p-0 h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testing Nav</title>
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">
{{-- <link rel="stylesheet" href="/css/footer.css"> --}}
</head>

<body id="body" class="relative m-0 pb-24 bg-fixed bg-no-repeat bg-center bg-cover" style="background-image: url(./assets/tie-dye2.png)">

  <div class=”main-container min-h-100”>

    </div>
    <div id="app">
      <nav-component></nav-component>
    </div>

    @yield('content')

    <div id="footer">
      <footer-component></footer-component>
    </div>

  </div>

  <script src="/js/app.js"></script>

</body>

</html>
