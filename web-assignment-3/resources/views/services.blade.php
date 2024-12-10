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
    @foreach ($services as $service)
        <article class="feature-card">
            <img
                loading="lazy"
                src="{{ asset($service->image_url) }}"
                data-original="{{ asset($service->image_url) }}"
                data-hover="{{ asset($service->hover_image_url) }}"
                class="feature-image"
                alt="{{ $service->title }} feature illustration"
                onmouseover="this.src='{{ asset($service->hover_image_url) }}';"
                onmouseout="this.src='{{ asset($service->image_url) }}';"
            />
            <h3 class="feature-title">{{ $service->title }}</h3>
            <p class="feature-description">{{ $service->description }}</p>
        </article>
    @endforeach
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
