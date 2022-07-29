<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HeroBiz Bootstrap Template - Home 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public-area/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('public-area/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <x-public-area.libraries.styles />

</head>

<body>

    <x-public-area.components.navigation />

    {{ $hero }}

    {{ $page }}

  <x-public-area.components.footer />

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

<x-public-area.libraries.scripts />

</body>

</html>
