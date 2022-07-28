<x-public-area.layouts.app-layout>

    <x-slot name="hero">
        <section id="hero-animated" class="hero-animated d-flex align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
              <img src="{{ asset('img/hero-carousel/hero-carousel-3.svg') }}" class="img-fluid animated">
              <h2>Welcome to <span>HeroBiz</span></h2>
              <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
              <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              </div>
            </div>
          </section>
    </x-slot>

    <x-slot name="page">
        <main id="main">

            <!-- ======= Featured Services Section ======= -->
            @include('public-area.pages.Home.components.featured-section')
           <!-- End Featured Services Section -->
        
            <!-- ======= About Section ======= -->
            @include('public-area.pages.Home.components.about-us')
           <!-- End About Section -->
        
            <!-- ======= Clients Section ======= -->
            @include('public-area.pages.Home.components.clients')
            <!-- End Clients Section -->
        
            <!-- ======= Call To Action Section ======= -->
            @include('public-area.pages.Home.components.cta')
            <!-- End Call To Action Section -->
        
            <!-- ======= On Focus Section ======= -->
            @include('public-area.pages.Home.components.onfocus')
            <!-- End On Focus Section -->
        
            <!-- ======= Features Section ======= -->
            @include('public-area.pages.Home.components.features')
            <!-- End Features Section -->
        
            <!-- ======= Services Section ======= -->
            @include('public-area.pages.Home.components.services')
           <!-- End Services Section -->
        
            <!-- ======= Testimonials Section ======= -->
            @include('public-area.pages.Home.components.testimonials')
           <!-- End Testimonials Section -->
        
            <!-- ======= Pricing Section ======= -->
            @include('public-area.pages.Home.components.pricing')
           <!-- End Pricing Section -->
        
            <!-- ======= F.A.Q Section ======= -->
            @include('public-area.pages.Home.components.faq')
           <!-- End F.A.Q Section -->
        
            <!-- ======= Portfolio Section ======= -->
            @include('public-area.pages.Home.components.portfolio')
            <!-- End Portfolio Section -->
        
            <!-- ======= Team Section ======= -->
            @include('public-area.pages.Home.components.team')
           <!-- End Team Section -->
        
            <!-- ======= Recent Blog Posts Section ======= -->
            @include('public-area.pages.Home.components.recent-blog-posts')
           <!-- End Recent Blog Posts Section -->
        
            <!-- ======= Contact Section ======= -->
            @include('public-area.pages.Home.components.contact')
           <!-- End Contact Section -->
        
          </main><!-- End #main -->
    </x-slot>

</x-public-area.layouts.app-layout>
