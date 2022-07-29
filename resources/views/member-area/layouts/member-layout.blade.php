<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hero - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('member-area/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('member-area/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <x-member-area.libraries.styles/>

</head>

<body>

  <!-- ======= Header ======= -->
  <x-member-area.components.navigation/>
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <x-member-area.components.sider-bar/>
  <!-- End Sidebar-->

  <main id="main" class="main">



   {{ $breadcrumb??'' }}


      {{ $page??'' }}
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <x-member-area.components.footer/>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <x-member-area.libraries.scripts/>


</body>

</html>
