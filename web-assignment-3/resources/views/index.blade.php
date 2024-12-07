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
          <button class="btn btn__reset__txt__style">
            Reset Text Style
          </button>
        </div>
      </div>
      <div class="specialities__cards">
        <div class="card specialties__card">
          <img src="images/speciality-1.jpg" alt="Events" class="card__img" />
          <div class="card__content">
            <h3 class="card__title">Events</h3>
            <a href="#" class="btn btn__card btn__show">Show Details</a>
            <a href="#" class="btn btn__card btn__hide">Hide Details</a>
            <p class="card__text hide">
              Join us for exciting triathlon events across Pakistan! Check our calendar for upcoming races and be part of the
              challenge.
            </p>
          </div>
        </div>
        <div class="card specialties__card">
          <img src="images/speciality-2.jpg" alt="Results from Competitions" class="card__img" />
          <div class="card__content">
            <h3 class="card__title">Results from Competitions</h3>
            <a href="#" class="btn btn__card btn__show">Show Details</a>
            <a href="#" class="btn btn__card btn__hide">Hide Details</a>
            <p class="card__text hide">
              Celebrate the achievements of our athletes! View the results from our latest competitions. Join us in honoring their
              hard work.
            </p>
          </div>
        </div>
        <div class="card specialties__card">
          <img src="images/speciality-3.jpg" alt="Bootcamp fitness" class="card__img" />
          <div class="card__content">
            <h3 class="card__title">Boot Camp Fitness</h3>
            <a href="#" class="btn btn__card btn__show">Show Details</a>
            <a href="#" class="btn btn__card btn__hide">Hide Details</a>
            <p class="card__text hide">
              Transform your fitness with our dynamic Boot Camp classes! Designed for all levels, our program builds a supportive
              community.
            </p>
          </div>
        </div>
        <div class="card specialties__card">
          <img src="images/speciality-4.jpg" alt="Sports Training" class="card__img" />
          <div class="card__content">
            <h3 class="card__title">Sports Training</h3>
            <a href="#" class="btn btn__card btn__show">Show Details</a>
            <a href="#" class="btn btn__card btn__hide">Hide Details</a>
            <p class="card__text hide">
              Ready to take your performance to the next level? Our expert coaches offer specialized training in cycling, running,
              and triathlon.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
@endsection
