<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/tie-dye2-icon.png">
  <title>@yield('title')</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/lln4snf.css">
  <link rel="stylesheet" href="/css/app.css">

  @yield('head')
</head>

  <body class="relative m-0 pb-80 sm:pb-40 min-h-screen bg-fixed bg-no-repeat bg-center bg-cover"
    style="background-image: url(./assets/tie-dye2.png)">

  @yield('content')

  <div id="footer">
    <footer-component></footer-component>
  </div>

  <script src="/js/app.js"></script>

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

@yield('scripts')

