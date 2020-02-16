<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/tie-dye2-icon.png">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/lln4snf.css">
  <link rel="stylesheet" href="/css/app.css">
</head>

{{-- <body class="relative mb-auto bg-fixed bg-no-repeat bg-center bg-cover min-h-screen"
  style="background-image: url(./assets/tie-dye2.png)"> --}}
  <body class="relative m-0 pb-48 min-h-screen bg-fixed bg-no-repeat bg-center bg-cover"
    style="background-image: url(./assets/tie-dye2.png)">

  @yield('content')

  <div id="footer">
    <footer-component></footer-component>
  </div>

  {{-- </div> --}}

  <script src="/js/app.js"></script>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script>
    $(function(){
            $('a').each(function(){
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('active'); $(this).parents('li').addClass('active');
                }
            });
        });
  </script>

</body>

</html>
