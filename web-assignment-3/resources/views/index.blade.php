<!DOCTYPE html>
<html>
  <head>
    <title>Triathlon PK</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    /> 
    <link rel="icon" type="image/x-icon" href="/images/icon.png" />
    @vite(['resources/css/styles.css'])
  </head>
  <body>
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
            <a href="./index.html" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item">
            <a href="./About.html" class="navigation__link">About Us</a>
          </li>
          <li class="navigation__item">
            <a href="./services.html" class="navigation__link">Our Services</a>
          </li>
          <li class="navigation__item">
            <a href="./Contact.html" class="navigation__link">Contact Us</a>
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
          <li><a href="./index.html">Home</a></li>
          <li><a href="./About.html">About Us</a></li>
          <li><a href="./services.html">Our Services</a></li>
          <li><a href="./Contact.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
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
          <!-- Overlay div added here -->
          <div class="hero__text">
            <h1 class="hero__title">Welcome to Triathlon PK</h1>
            <p class="hero__subtitle">
              Personal Training for Self-Confidence, Health, and
              Self-Fulfillment
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
              A leading sports training institution with over 30 years of
              experience in providing personalized fitness and sports
              instruction. Located in the heart of Multan Cantt, we are
              committed to helping individuals achieve their fitness goals
              through customized coaching programs. <br /><br />
              Starting in a modest apartment basement, we’ve now grown into a
              state-of-the-art facility equipped with modern training equipment
              and specialized areas designed for a variety of disciplines. Our
              facility features a fully equipped weight training area, a
              dedicated sports training floor with specialized flooring, and an
              endless pool for swim training.
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
              <img
                src="images/speciality-1.jpg"
                alt="Events"
                class="card__img"
              />
              <div class="card__content">
                <h3 class="card__title">Events</h3>
                <a href="#" class="btn btn__card btn__show">Show Details</a>
                <a href="#" class="btn btn__card btn__hide">Hide Details</a>
                <p class="card__text hide">
                  Join us for exciting triathlon events across Pakistan! Check
                  our calendar for upcoming races and be part of the challenge.
                </p>
              </div>
            </div>
            <div class="card specialties__card">
              <img
                src="images/speciality-2.jpg"
                alt="Results from Competitions"
                class="card__img"
              />
              <div class="card__content">
                <h3 class="card__title">Results from Competitions</h3>
                <a href="#" class="btn btn__card btn__show">Show Details</a>
                <a href="#" class="btn btn__card btn__hide">Hide Details</a>
                <p class="card__text hide">
                  Celebrate the achievements of our athletes! View the results
                  from our latest competitions. Join us in honoring their hard
                  work.
                </p>
              </div>
            </div>
            <div class="card specialties__card">
              <img
                src="images/speciality-3.jpg"
                alt="Bootcamp fitness"
                class="card__img"
              />
              <div class="card__content">
                <h3 class="card__title">Boot Camp Fitness</h3>
                <a href="#" class="btn btn__card btn__show">Show Details</a>
                <a href="#" class="btn btn__card btn__hide">Hide Details</a>
                <p class="card__text hide">
                  Transform your fitness with our dynamic Boot Camp classes!
                  Designed for all levels, our program build a supportive
                  community.
                </p>
              </div>
            </div>
            <div class="card specialties__card">
              <img
                src="images/speciality-4.jpg"
                alt="Sports Training"
                class="card__img"
              />
              <div class="card__content">
                <h3 class="card__title">Sports Training</h3>
                <a href="#" class="btn btn__card btn__show">Show Details</a>
                <a href="#" class="btn btn__card btn__hide">Hide Details</a>
                <p class="card__text hide">
                  Ready to take your performance to the next level? Our expert
                  coaches offer specialized training in cycling, running, and
                  triathlon.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="section section__testimonials">
          <h1 class="section__heading">Testimonials</h1>
          <div class="testimonials__cards">
            <figure class="testimonial testimonial-1">
              <figcaption class="testimonial__caption">
                <blockquote class="testimonial__blockquote">
                  <p class="testimonial__text">
                    … The teaching and instruction are absolutely dynamic, they
                    have the ability to break down movements and teach it at a
                    level suited to the student. I just look at the number of
                    students that have had some type of disability and what he
                    has managed to do for them.”
                  </p>
                </blockquote>
                <h4 class="testimonial__author">
                  Participants of Triathlon PK
                </h4>
              </figcaption>
            </figure>
            <figure class="testimonial testimonial-2">
              <figcaption class="testimonial__caption">
                <blockquote class="testimonial__blockquote">
                  <p class="testimonial__text">
                    Come to think of it, I am slightly disappointed that I
                    missed out on the Competition the other weekend. It’s hard
                    to keep track of all the events going on just of late.
                  </p>
                </blockquote>
                <h4 class="testimonial__author">
                  Participants of Triathlon PK
                </h4>
              </figcaption>
            </figure>
            <figure class="testimonial testimonial-3">
              <figcaption class="testimonial__caption">
                <blockquote class="testimonial__blockquote">
                  <p class="testimonial__text">
                    … I really like the whole atmosphere that they create. On
                    one hand it’s inviting, fun, and motivating, while on the
                    other hand its challenging, and at times downright hard.
                  </p>
                </blockquote>
                <h4 class="testimonial__author">
                  Participants of Triathlon PK
                </h4>
              </figcaption>
            </figure>
          </div>
        </section>
      </main>
      <footer class="footer">
        <div class="footer__container">
          <div class="footer__inner">
            <div class="footer__layout">
              <div class="layout__item w-50">
                <div class="newsletter">
                  <h3 class="newsletter__title">Subscribe to our Newsletter</h3>
                  <form action="" class="footer__form">
                    <input
                      type="text"
                      placeholder="Email Address"
                      class="footer__input"
                    />
                    <button class="newsletter__btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        />
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
              <div class="layout__item w-25">
                <nav class="footer__navigation">
                  <h4 class="footer__navigation__title">Menu</h4>
                  <ul class="footer__list footer__navigation__list">
                    <li class="footer__navigation__item">
                      <a href="./index.html" class="footer__navigation__link"
                        >Home</a
                      >
                    </li>
                    <li class="footer__navigation__item">
                      <a href="./About.html" class="footer__navigation__link"
                        >About Us</a
                      >
                    </li>
                    <li class="footer__navigation__item">
                      <a href="./services.html" class="footer__navigation__link"
                        >Our Services</a
                      >
                    </li>
                    <li class="footer__navigation__item">
                      <a href="./Contact.html" class="footer__navigation__link"
                        >Contact Us</a
                      >
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="layout__item w-25">
                <nav class="footer__navigation">
                  <h4 class="footer__navigation__title">Support</h4>
                  <ul class="footer__list footer__navigation__list">
                    <li class="footer__navigation__item">
                      <a href="#" class="footer__navigation__link"
                        >Help &amp; FAQ</a
                      >
                    </li>

                    <li class="footer__navigation__item">
                      <a href="#" class="footer__navigation__link"
                        >Terms &amp; Conditions</a
                      >
                    </li>
                    <li class="footer__navigation__item">
                      <a href="#" class="footer__navigation__link"
                        >Privacy Policy</a
                      >
                    </li>
                    <li class="footer__navigation__item">
                      <a href="#" class="footer__navigation__link"> Login </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="footer__layout layout__item__2">
              <div class="layout_item w-50">
                <ul class="footer__list footer__icons__list">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="32"
                      height="32"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M12 6.654a6.786 6.786 0 0 1 2.596 5.344A6.786 6.786 0 0 1 12 17.34a6.786 6.786 0 0 1-2.596-5.343A6.786 6.786 0 0 1 12 6.654zm-.87-.582A7.783 7.783 0 0 0 8.4 12a7.783 7.783 0 0 0 2.728 5.926 6.798 6.798 0 1 1 .003-11.854zm1.742 11.854A7.783 7.783 0 0 0 15.6 12a7.783 7.783 0 0 0-2.73-5.928 6.798 6.798 0 1 1 .003 11.854z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="32"
                      height="32"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M1 4h22v2H1V4zm0 14h22v2H1v-2zm18.622-3.086l-.174-.87h-1.949l-.31.863-1.562.003c1.005-2.406 1.75-4.19 2.236-5.348.127-.303.353-.457.685-.455.254.002.669.002 1.245 0L21 14.912l-1.378.003zm-1.684-2.062h1.256l-.47-2.18-.786 2.18zM7.872 9.106l1.57.002-2.427 5.806-1.59-.001c-.537-2.07-.932-3.606-1.184-4.605-.077-.307-.23-.521-.526-.622-.263-.09-.701-.23-1.315-.419v-.16h2.509c.434 0 .687.21.769.64l.62 3.289 1.574-3.93zm3.727.002l-1.24 5.805-1.495-.002 1.24-5.805 1.495.002zM14.631 9c.446 0 1.01.138 1.334.267l-.262 1.204c-.293-.118-.775-.277-1.18-.27-.59.009-.954.256-.954.493 0 .384.632.578 1.284.999.743.48.84.91.831 1.378-.01.971-.831 1.929-2.564 1.929-.791-.012-1.076-.078-1.72-.306l.272-1.256c.656.274.935.361 1.495.361.515 0 .956-.207.96-.568.002-.257-.155-.384-.732-.702-.577-.317-1.385-.756-1.375-1.64C12.033 9.759 13.107 9 14.63 9z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="32"
                      height="32"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M15 17a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zM2 2h4v20H2V2z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="32"
                      height="32"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-6v2h2v-2h1a2.5 2.5 0 0 0 2-4 2.5 2.5 0 0 0-2-4h-1V6h-2v2H8v8h3zm-1-3h4a.5.5 0 1 1 0 1h-4v-1zm0-3h4a.5.5 0 1 1 0 1h-4v-1z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="32"
                      height="32"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M20.067 8.478c.492.88.556 2.014.3 3.327-.74 3.806-3.276 5.12-6.514 5.12h-.5a.805.805 0 0 0-.794.68l-.04.22-.63 3.993-.032.17a.804.804 0 0 1-.794.679H7.72a.483.483 0 0 1-.477-.558L7.418 21h1.518l.95-6.02h1.385c4.678 0 7.75-2.203 8.796-6.502zm-2.96-5.09c.762.868.983 1.81.752 3.285-.019.123-.04.24-.062.36-.735 3.773-3.089 5.446-6.956 5.446H8.957c-.63 0-1.174.414-1.354 1.002l-.014-.002-.93 5.894H3.121a.051.051 0 0 1-.05-.06l2.598-16.51A.95.95 0 0 1 6.607 2h5.976c2.183 0 3.716.469 4.523 1.388z"
                      />
                    </svg>
                  </li>
                </ul>
              </div>
              <div class="layout_item w-25">
                <ul class="footer__list footer__icons__list">
                  <li>
                    <a
                      href="https://www.facebook.com/facebookBrasil"
                      target="_blank"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="32"
                        height="32"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="32"
                        height="32"
                        class="social-icon"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com/instagram/"
                      target="_blank"
                      class="social-icon"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="32"
                        height="32"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"
                        />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer__copyright">
            <p>&copy; 2024 Triathlon PK</p>
          </div>
        </div>
      </footer>
    </div>
    <script type="text/javascript" src="./Home.js"></script>
  </body>
</html>
