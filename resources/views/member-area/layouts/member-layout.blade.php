<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

   {{ $breadcrumb ?? '' }}

    <section class="section dashboard">
      {{ $page ?? '' }}
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <x-member-area.components.footer/>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <x-member-area.libraries.scripts/>

</body>

</html>
