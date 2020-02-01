<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testing Nav</title>
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">

</head>

<body class="bg-fixed bg-no-repeat bg-center bg-cover h-screen flex flex-col" style="background-image: url(./assets/tie-dye2.png)">

<div id="app">
<nav-component></nav-component>
</div>

@yield('content')

<div id="app4">
<footer-component></footer-component>
</div>

<script src="/js/app.js"></script>

</body>

</html>
