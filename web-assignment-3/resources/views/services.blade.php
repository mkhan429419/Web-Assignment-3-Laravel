<!-- Create pages for your case study (e.g., “About Us”, “Services”, or “Products”) and 
extend the master layout. -->
@extends('layouts.app')

@section('title', 'Triathlon PK - Services')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    <div class="container">
      <!-- Features Section -->
      <section class="features-section">
        <header class="features-header">
          <div class="features-content">
            <h2 class="features-title">Services We Offer</h2>
            <p class="features-description">
              At Triathlon PK, we specialize in building your confidence,
              health, and self-fulfillment through a wide range of services.
            </p>
            <button class="getStartedBtn cta-button">Get Started</button>
          </div>
        </header>

        <div class="features-grid">
          <article class="feature-card">
            <img
              loading="lazy"
              src="images/s11.png"
              data-original="images/s11.png"
              data-hover="images/s11-hover.png"
              class="feature-image"
              alt="Collaboration Teams feature illustration"
            />
            <h3 class="feature-title">Weight Training Area</h3>
            <p class="feature-description">
              Our weight training area is fully equipped with a bench press,
              squat rack, free weights, and leg press to build strength.
            </p>
          </article>

          <article class="feature-card">
            <img
              loading="lazy"
              src="images/s2.png"
              data-original="images/s2.png"
              data-hover="images/s2-hover.png"
              class="feature-image"
              alt="Cloud Storage feature illustration"
            />
            <h3 class="feature-title">Yoga & Pilates</h3>
            <p class="feature-description">
              Train your mind and body with our full yoga and Pilates equipment
              on a specially designed sports training floor.
            </p>
          </article>

          <article class="feature-card">
            <img
              loading="lazy"
              src="images/s3.png"
              data-original="images/s3.png"
              data-hover="images/s3-hover.png"
              class="feature-image"
              alt="Daily Analytics feature illustration"
            />
            <h3 class="feature-title">Endless Pool</h3>
            <p class="feature-description">
              Train like a pro with our endless pool designed for low-impact,
              high-intensity swimming workouts.
            </p>
          </article>
        </div>
      </section>

      <!-- Pricing Section -->
      <section class="pricing-section">
        <header class="pricing-header">
          <div class="pricing-content">
            <h2 class="pricing-title">Pricing Plans</h2>
            <p class="pricing-description">
              Choose the right plan for your training needs
            </p>
            <div>
            <button id="addItemBtn" class="cta-button">Add Item</button>
            <button id="removeItemBtn" class="cta-button">
              Remove last item
            </button>
            </div>
          </div>
        </header>

        <!-- Pricing Cards -->
        <!-- <div class="pricing-cards" id="pricingCardsContainer">
          <div class="pricing-card">
            <h3>Personal Training</h3>
            <p class="price">$30 <span>per hour</span></p>
            <p class="plan-description">1-on-1 training sessions</p>
            <button class="pricing-button">Start free trial</button>
          </div>

          <div class="pricing-card">
            <h3>Boot Camp</h3>
            <p class="price">$200 <span>for 8 weeks</span></p>
            <p class="plan-description">8-week fitness boot camp</p>
            <button class="pricing-button">Get started</button>
          </div>

          <div class="pricing-card">
            <h3>Yoga & Pilates</h3>
            <p class="price">$15 <span>per session</span></p>
            <p class="plan-description">Relax with full yoga equipment</p>
            <button class="pricing-button">Join a Session</button>
          </div>
        </div> -->
        <div class="pricing-cards" id="pricingCardsContainer">
          @foreach ($pricingPlans as $plan)
              <div class="pricing-card" data-id="{{ $plan->id }}">
                  <h3>{{ $plan->name }}</h3>
                  <p class="price">${{ $plan->price }} <span>{{ $plan->rate }}</span></p>
                  <p class="plan-description">{{ $plan->description }}</p>
                  <button class="pricing-button">Start free trial</button>
                  <button id="update-button">Update plan</button>
              </div>
          @endforeach
      </div>
        <div id="addPlanModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close-btn" id="closeModal">&times;</button>
            </div>
            <h2>Add a New Pricing Plan</h2>
            <form id="addPlanForm">
              <label for="planName">Plan Name:</label>
              <input
                type="text"
                id="planName"
                placeholder="Enter plan name"
                required
              />

              <label for="planPrice">Price ($):</label>
              <input
                type="number"
                id="planPrice"
                placeholder="Enter price"
                required
              />

              <label for="planRate">Rate Per Period:</label>
              <input
                type="text"
                id="planRate"
                placeholder="e.g., per session"
                required
              />

              <label for="planDescription">Description:</label>
              <textarea
                id="planDescription"
                placeholder="Provide a brief description"
                rows="4"
                required
              ></textarea>

              <button type="submit">Add Plan</button>
            </form>
          </div>
        </div>
        @if ($pricingPlans->isNotEmpty())
        <div id="updatePlanModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close-btn" id="closeUpdateModal">&times;</button>
            </div>
            <h2>Update the Pricing Plan</h2>
            <form id="updatePlanForm">
              @csrf
              @method('PUT')
              <input type="hidden" id="planId" value="{{ $plan->id }}"  />
              <label for="planName">Plan Name:</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter plan name"
                required
              />

              <label for="planPrice">Price ($):</label>
              <input
                type="number"
                id="price"
                name="price"
                placeholder="Enter price"
                required
              />

              <label for="planRate">Rate Per Period:</label>
              <input
                type="text"
                id="rate"
                name="rate"
                placeholder="e.g., per session"
                required
              />

              <label for="planDescription">Description:</label>
              <textarea
                id="description"
                placeholder="Provide a brief description"
                name="description"
                rows="4"
                required
              ></textarea>
              <button type="submit">Update Plan</button>
            </form>
          </div>
        </div>
        @endif

        <!-- Feature Comparison Table -->
        <table class="feature-comparison">
          <thead>
            <tr>
              <th>Features</th>
              <th>Basic Plan</th>
              <th>Business Plan</th>
              <th>Enterprise Plan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Basic Features</td>
              <td>&#10003;</td>
              <td>&#10003;</td>
              <td>&#10003;</td>
            </tr>
            <tr>
              <td>Users</td>
              <td>10</td>
              <td>20</td>
              <td>Unlimited</td>
            </tr>
            <tr>
              <td>Individual Data</td>
              <td>20GB</td>
              <td>40GB</td>
              <td>Unlimited</td>
            </tr>
            <tr>
              <td>Support</td>
              <td>&#10003;</td>
              <td>&#10003;</td>
              <td>&#10003;</td>
            </tr>
            <tr>
              <td>Automated Workflows</td>
              <td>&mdash;</td>
              <td>&#10003;</td>
              <td>&#10003;</td>
            </tr>
            <tr>
              <td>200+ Integrations</td>
              <td>&mdash;</td>
              <td>&mdash;</td>
              <td>&#10003;</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
@endsection
