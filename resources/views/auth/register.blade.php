<x-public-area.layouts.app-layout>

    <x-slot name="hero">
        <section id="hero-animated" class="hero-animated d-flex align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
              <h2>Welcome to <span>HeroBiz</span></h2>
              <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
              <div class="d-flex">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              </div>
            </div>
          </section>
    </x-slot>

    <x-slot name="page">
        <main id="main">
            <div class="card col-sm-6 shadow" style="margin: 50px 25%" >
                <div class="card-header" align="center">
                    <b>Sign Up</b>
                </div>
                <div class="card-body justify-content-center">
                <div class="container">

                    <div class="col-lg-8">
                      <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="inp-name">Name:</label>
                            <input type="text"
                              class="form-control" name="name" id="inp-name" value="{{ old('name') }}" aria-describedby="inp-name" placeholder="name" required>
                            <small id="inp-name" class="form-text text-muted">Please enter name.</small>
                            @error('name')
                                <span class="text-danger"><br>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="inp-email">Email:</label>
                            <input type="text"
                              class="form-control" name="email" id="inp-email" aria-describedby="inp-email" value="{{ old('email') }}" placeholder="Email" required>
                            <small id="inp-email" class="form-text text-muted">Please enter email.</small>
                            @error('email')
                                <span class="text-danger"><br>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="inp-password">Password:</label>
                            <input type="password"
                              class="form-control" name="password" id="inp-password" aria-describedby="inp-password" placeholder="Password" required>
                            <small id="inp-password" class="form-text text-muted">Please enter password.</small>
                            @error('password')
                                <span class="text-danger"><br>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="inp-password_confirmation">Password:</label>
                            <input type="password"
                              class="form-control" name="password_confirmation" id="inp-password_confirmation" aria-describedby="inp-password_confirmation" placeholder="Re-Password" required>
                            <small id="inp-password_confirmation" class="form-text text-muted">Please re-enter password.</small>
                            @error('password_confirmation')
                                <span class="text-danger"><br>{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </div>

                    </form>
                    </div><!-- End Contact Form -->
                </div>
                </div>
                </div>


        </main><!-- End #main -->
    </x-slot>

</x-public-area.layouts.app-layout>



