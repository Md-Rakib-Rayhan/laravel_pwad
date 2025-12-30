@extends('layouts.default')

 

@section('content')

<div class="container" style="padding:60px 0; max-width:900px;">

  <h1 class="text-center">About Our Company</h1>
  <p class="text-center text-muted" style="margin-bottom:40px;">
    Who we are, what we believe in, and why we do what we do
  </p>

  <hr>

  <section style="margin-top:40px;">
    <h3>Who We Are</h3>
    <p>
      We are a growing company built on creativity, responsibility, and a
      strong commitment to quality. Our team consists of dedicated individuals
      who enjoy solving problems and creating meaningful digital experiences.
    </p>
    <p>
      Instead of following trends, we focus on building solutions that are
      practical, reliable, and designed to last.
    </p>
  </section>

  <section style="margin-top:40px;">
    <h3>Our Mission</h3>
    <p>
      Our mission is to help people and businesses succeed by delivering
      simple, effective, and user-friendly solutions. We aim to make technology
      easier to understand and more accessible for everyone.
    </p>
  </section>

  <section style="margin-top:40px;">
    <h3>Our Vision</h3>
    <p>
      We envision a future where innovation is driven by purpose. Our goal is
      to grow alongside our clients, building long-term relationships based on
      trust, transparency, and consistent results.
    </p>
  </section>

  <section style="margin-top:40px;">
    <h3>What Makes Us Different</h3>
    <ul>
      <li>We prioritize quality over quantity</li>
      <li>We listen carefully before offering solutions</li>
      <li>We believe in clear communication and honesty</li>
      <li>We focus on continuous learning and improvement</li>
    </ul>
  </section>

  <section style="margin-top:40px;">
    <h3>Let’s Work Together</h3>
    <p>
      Whether you have a clear idea or just a starting point, we’re here to help.
      Reach out to us and let’s create something valuable together.
    </p>
    <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
  </section>

</div>

@endsection

