@extends('layouts.app')

@section('title', 'contact_us')

@section('content')
<div class="container">
    <!-- Your content here -->
    <div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Contact Us</h1>
        <p class="lead">We’d love to hear from you! Please fill out the form below to get in touch with us.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject of your message">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Write your message here"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 text-center">
            <div class="card p-3 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Our Office</h5>
                    <p class="card-text">123 Standing Desks Ave, Suite 100</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card p-3 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Email Us</h5>
                    <p class="card-text">support@standingdesks.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card p-3 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Call Us</h5>
                    <p class="card-text">+1 (555) 123-4567</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 ">
    <div class="row">
        <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=..." allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

</div>
@endsection