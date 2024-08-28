@extends('layouts.app')

@section('title', 'rising_desks')

@section('content')
<div class="container">
    <!-- Your content here -->
    <div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Rising Desks Collection</h1>
        <p class="lead">Explore our premium range of height-adjustable rising desks designed for comfort and productivity.</p>
        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-warning mt-4" data-bs-toggle="modal" data-bs-target="#specialOfferModal">
          View Special Offers
        </button>

        <!-- Modal -->
        <div class="modal fade" id="specialOfferModal" tabindex="-1" aria-labelledby="specialOfferModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="specialOfferModalLabel">Special Offers on Rising Desks</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Get a 10% discount on all rising desks this month! Use code RISE10 at checkout.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="#" class="btn btn-primary">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Rising Desk 1">
                <div class="card-body">
                    <h5 class="card-title">Premium Electric Rising Desk</h5>
                    <p class="card-text">Effortlessly adjust the height with the touch of a button, allowing you to switch between sitting and standing positions.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Rising Desk 2">
                <div class="card-body">
                    <h5 class="card-title">Eco-Friendly Bamboo Rising Desk</h5>
                    <p class="card-text">Sustainably sourced bamboo desktop paired with a smooth electric lifting system for a greener workspace.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Rising Desk 3">
                <div class="card-body">
                    <h5 class="card-title">Compact Manual Rising Desk</h5>
                    <p class="card-text">Perfect for small spaces, this manually adjustable desk is ideal for home offices and tight workspaces.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Rising Desk 4">
                <div class="card-body">
                    <h5 class="card-title">Executive Glass Top Rising Desk</h5>
                    <p class="card-text">A sleek glass top with a high-end motorized lifting system, perfect for modern offices.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Rising Desk 5">
                <div class="card-body">
                    <h5 class="card-title">Corner Rising Desk</h5>
                    <p class="card-text">Maximize your workspace with this corner desk that offers plenty of room for multiple monitors and devices.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="display-5">Why Choose Rising Desks?</h2>
        <p class="lead mt-4">Rising desks are designed to offer flexibility, allowing you to maintain a healthy posture throughout the day.</p>
        <a href="#" class="btn btn-success btn-lg mt-3">Explore Benefits</a>
    </div>
</div>
<div class="accordion mt-5" id="risingDesksAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Electric Rising Desk Features
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#risingDesksAccordion">
      <div class="accordion-body">
        Our electric rising desks come with a dual-motor system for smooth adjustments, a memory function to save your preferred heights, and a durable steel frame.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Bamboo Rising Desk Sustainability
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#risingDesksAccordion">
      <div class="accordion-body">
        The bamboo used in our desks is sustainably sourced and provides a natural, eco-friendly workspace. The desk is designed to be both stylish and environmentally responsible.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Manual Rising Desk Adjustability
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#risingDesksAccordion">
      <div class="accordion-body">
        Our manual rising desks offer a cost-effective solution for those looking to improve their workspace ergonomics. Easily adjustable by hand, these desks are both practical and affordable.
      </div>
    </div>
  </div>
</div>
</div>
@endsection
