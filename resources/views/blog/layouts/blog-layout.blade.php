<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('blog/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('blog/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <x-blog.libraries.styles/>

</head>

<body>

  <!-- ======= Header ======= -->
  <x-blog.components.navigation/>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <x-blog.components.side-bar/>
    <!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    {{ $post }}
     <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
    {{ $cCategory }}
    <!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    {{ $bCategory }}
   <!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    {{ $lCategory }}
   <!-- End Lifestyle Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <x-blog.components.footer/>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <x-blog.libraries.scripts/>
</body>

</html>
