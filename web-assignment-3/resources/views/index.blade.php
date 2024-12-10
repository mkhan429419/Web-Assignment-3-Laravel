@extends('layouts.app')

@section('title', 'Home')

@push('styles')
@vite(['resources/css/styles.css'])
@endpush

@push('scripts')
@vite(['resources/js/Home.js'])
@endpush

@section('content')
<div class="page-container">
  <div class="anime">
    <i class="fa fa-bicycle" aria-hidden="true"></i>
  </div>
  <main class="main">
    <section class="section section__hero">
      <div class="hero__image">
        <img src="./images/hero.jpg" alt="Hero image" />
      </div>
      <div class="overlay"></div>
      <div class="hero__text">
        <h1 class="hero__title">Welcome to Triathlon PK</h1>
        <p class="hero__subtitle">
          Personal Training for Self-Confidence, Health, and Self-Fulfillment
        </p>
        <button class="btn btn__learn__more">Learn More</button>
      </div>
    </section>
    <section class="section section__intro">
      <div class="intro__image">
        <img src="./images/intro.jpg" alt="Intro image" />
      </div>
      <div class="intro__content">
        <h2 class="intro__title">Welcome to our Website</h2>
        <h3 class="intro__subtitle">Hi! We are Triathlon PK</h3>
        <p class="intro__text">
          A leading sports training institution with over 30 years of experience in providing personalized fitness and sports
          instruction. Located in the heart of Multan Cantt, we are committed to helping individuals achieve their fitness goals
          through customized coaching programs.
        </p>
        <a href="services.html" class="btn btn__signup">Sign Up Now</a>
      </div>
    </section>
    <section class="section section__specialties">
  <div class="section__header">
    <h1 class="section__heading">Our Specialties</h1>
    <div class="style__btns">
      <button class="btn btn__bg">Change Background</button>
      <button class="btn btn__txt__style">Change Text Style</button>
      <button class="btn btn__reset__txt__style">Reset Text Style</button>
    </div>
  </div>
  <div class="specialities__cards">
    @foreach ($specialties as $specialty)
      <div class="card specialties__card">
        <img src="{{ asset($specialty->image_url) }}" alt="{{ $specialty->title }}" class="card__img" />
        <div class="card__content">
          <h3 class="card__title">{{ $specialty->title }}</h3>
          <a href="#" class="btn btn__card btn__show">Show Details</a>
          <a href="#" class="btn btn__card btn__hide">Hide Details</a>
          <p class="card__text hide">
            {{ $specialty->description }}
          </p>
        </div>
      </div>
    @endforeach
  </div>
</section>

  </main>
</div>
@endsection
