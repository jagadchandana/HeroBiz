<x-public-area.layouts.app-layout>

    <x-slot name="hero">
        <section id="hero-animated" class="hero-animated d-flex align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
              <h2>Welcome to <span>HeroBiz - Member Area</span></h2>
              <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
              <div class="d-flex">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              </div>
            </div>
          </section>
    </x-slot>

    <x-slot name="page">
          <main id="main" style="margin: 0% 0% 5% 35%">
            <livewire:public-area.member-request.counter />
          </main><!-- End #main -->
          
    </x-slot>

</x-public-area.layouts.app-layout>
