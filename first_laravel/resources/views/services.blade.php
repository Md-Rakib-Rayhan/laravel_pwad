@extends('layouts.default')

@section('content')

<div class="container-fluid text-center bg-grey">
  <h2>Our Services</h2>
  <p class="text-muted">What we do best to help you succeed</p>
</div>

<div class="container" style="padding:60px 0;">

  <!-- Service Row 1 -->
  <div class="row">
    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-cog logo-small"></span>
      <h4>Custom Development</h4>
      <p>
        We build tailored solutions designed specifically for your business
        needs using modern and reliable technologies.
      </p>
    </div>

    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4>Responsive Design</h4>
      <p>
        Our designs look great on all devices, ensuring a smooth and consistent
        user experience across mobile, tablet, and desktop.
      </p>
    </div>

    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Security & Reliability</h4>
      <p>
        We focus on secure systems and best practices to protect your data
        and keep your applications running smoothly.
      </p>
    </div>
  </div>

  <hr style="margin:50px 0;">

  <!-- Service Row 2 -->
  <div class="row">
    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-cloud logo-small"></span>
      <h4>Cloud Solutions</h4>
      <p>
        Scalable cloud-based solutions that grow with your business and improve
        performance and availability.
      </p>
    </div>

    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-stats logo-small"></span>
      <h4>Performance Optimization</h4>
      <p>
        We analyze and optimize systems to ensure fast load times and efficient
        performance.
      </p>
    </div>

    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Ongoing Support</h4>
      <p>
        Continuous support, updates, and improvements to keep your project
        running at its best.
      </p>
    </div>
  </div>

</div>

<!-- Extra Section -->
<div class="container-fluid text-center" style="background:#fff; padding:60px 50px;">
  <h2>Why Choose Us</h2>
  <p style="max-width:800px; margin:20px auto;">
    We combine technical expertise with clear communication and a strong focus
    on quality. Our goal is not just to deliver a service, but to build solutions
    that truly add value to your business.
  </p>

  <a href="{{ url('/contact') }}" class="btn btn-lg btn-danger" style="margin-top:20px;">
    Request a Service
  </a>
</div>

@endsection
