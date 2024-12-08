<header class="header">
      <nav class="navbar">
        <div class="navbar__logo-container">
          <img
            src="./images/logot.png"
            alt="Triathlon PK Logo"
            class="navbar__logo"
          />
        </div>
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="{{ route('home') }}" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item">
              <a href="{{ route('about') }}" class="navigation__link">About Us</a>
          </li>
          <li class="navigation__item">
              <a href="{{ route('services') }}" class="navigation__link">Our Services</a>
          </li>
          <li class="navigation__item">
              <a href="{{ route('contact') }}" class="navigation__link">Contact Us</a>
          </li>
          <li class="navigation__item">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="navigation__link logout_link" >Log Out</button>
            </form>
          </li>
        </ul>
        <!-- Checkbox for toggle -->
        <input type="checkbox" id="menuToggle" class="navbar__checkbox" />
        <!-- Label for the checkbox to act as the toggle button -->
        <label for="menuToggle" class="navbar__toggle">
          <i class="fa fa-bars"></i>
        </label>
        <!-- Mobile menu -->
        <ul class="mobile__menu">
          <li class="navigation__item">
            <a href="{{ route('home') }}" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('about') }}" class="navigation__link">About Us</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('services') }}" class="navigation__link">Our Services</a>
          </li>
          <li class="navigation__item">
            <a href="{{ route('contact') }}" class="navigation__link">Contact Us</a>
          </li>
        </ul>
      </nav>
</header>