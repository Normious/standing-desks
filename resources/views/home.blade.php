@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <!-- Your content here -->
    <div class="container mx-auto px-4 py-8">
    <div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Welcome to Standing Desks Ltd</h1>
        <p class="lead">Explore our wide range of ergonomic standing desks and discover the health benefits of standing while working.</p>
                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#welcomeModal">
                Login/Signup
                </button>
                  <!-- Modal -->
                  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="welcomeModalLabel">Welcome to Standing Desks Ltd!</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p>Discover our range of ergonomic desks designed to keep you healthy and productive.</p>
                                  
                                  <!-- Authentication Links within Modal -->
                                  @if (Route::has('login'))
                                      <div class="d-flex justify-content-center mt-4">
                                          @auth
                                              <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary">Dashboard</a>
                                          @else
                                              <a href="{{ route('login') }}" class="btn btn-outline-secondary me-2">Log in</a>
                                              @if (Route::has('register'))
                                                  <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                                              @endif
                                          @endauth
                                      </div>
                                  @endif
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                          </div>
                      </div>
                  </div>


    </div>

    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Featured Desk 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ergonomic Desks for Your Comfort</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Featured Desk 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Adjustable Height Desks</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Standing Desk 1">
                <div class="card-body">
                    <h5 class="card-title">Adjustable Standing Desk</h5>
                    <p class="card-text">Perfect for laptops and desktops. Ergonomically designed for comfort.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Standing Desk 2">
                <div class="card-body">
                    <h5 class="card-title">Compact Desk Riser</h5>
                    <p class="card-text">Great for small spaces, offering flexibility to convert any desk into a standing desk.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Standing Desk 3">
                <div class="card-body">
                    <h5 class="card-title">Electric Standing Desk</h5>
                    <p class="card-text">Easily adjust the height with the touch of a button for a seamless transition between sitting and standing.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="display-5">Why Choose a Standing Desk?</h2>
        <p class="lead mt-4">Discover the health benefits of standing desks, from improved posture to increased productivity.</p>
        <a href="#" class="btn btn-success btn-lg mt-3">Learn More</a>
    </div>
</div>
</div>
@endsection
