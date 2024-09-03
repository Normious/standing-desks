@extends('layouts.app')

@section('title', 'Health Benefits')

@section('content')
<div class="container">
  <!-- Your content here -->
  <div class="container mt-5">
    <div class="text-center mb-5">
      <h1 class="display-4">Health Benefits of Standing Desks</h1>
      <p class="lead">Discover the positive impact of standing desks on your health and well-being.</p>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <h2>Improves Posture</h2>
        <p>
          Standing desks encourage better posture by reducing the tendency to slouch. With adjustable heights, they help
          align your spine and reduce the risk of back pain.
        </p>
      </div>
      <div class="col-md-6">
        <img src="path-to-image/posture.jpg" class="img-fluid rounded shadow-sm" alt="Improving Posture">
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6 order-md-2">
        <h2>Boosts Productivity</h2>
        <p>
          Studies show that standing desks can help increase focus and energy levels, leading to enhanced productivity
          at work or study.
        </p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="path-to-image/productivity.jpg" class="img-fluid rounded shadow-sm" alt="Boosts Productivity">
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <h2>Reduces Risk of Weight Gain</h2>
        <p>
          Standing instead of sitting for extended periods can help burn more calories and reduce the risk of weight
          gain, promoting overall health.
        </p>
      </div>
      <div class="col-md-6">
        <img src="path-to-image/weight-loss.jpg" class="img-fluid rounded shadow-sm" alt="Reduces Risk of Weight Gain">
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6 order-md-2">
        <h2>Lowers Blood Sugar Levels</h2>
        <p>
          Standing desks have been linked to lower blood sugar levels, particularly after meals, which is beneficial for
          individuals with insulin resistance or diabetes.
        </p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="path-to-image/blood-sugar.jpg" class="img-fluid rounded shadow-sm" alt="Lowers Blood Sugar Levels">
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <h2>Reduces Back Pain</h2>
        <p>
          Many people experience a significant reduction in chronic back pain after using standing desks. Standing more
          often helps relieve pressure on the lower back.
        </p>
      </div>
      <div class="col-md-6">
        <img src="path-to-image/back-pain.jpg" class="img-fluid rounded shadow-sm" alt="Reduces Back Pain">
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6 order-md-2">
        <h2>Enhances Mood and Energy</h2>
        <p>
          Standing desks contribute to better mental well-being by reducing feelings of stress and fatigue, thereby
          enhancing mood and overall energy levels.
        </p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="path-to-image/mood-energy.jpg" class="img-fluid rounded shadow-sm" alt="Enhances Mood and Energy">
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/video-id" allowfullscreen></iframe>
        </div>
        <p class="text-center mt-3">
          Watch this video to learn more about the benefits of standing desks.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection