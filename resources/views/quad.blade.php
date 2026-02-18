<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quad lalla Takerkoust Parapente</title>
  <link rel="stylesheet" href="{{ asset('styles/quad.css') }}">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,900;1,400&display=swap"
    rel="stylesheet">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  //icons
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body id="home">

  <header class="navbar">
    <div class="logo"><img src="{{ asset("images/new logo.png") }}" alt="logo Quad" class="logo-image"></div>

    <nav class="nav-links" id="navLinks">
      <a href="{{ route('HomePage') }}">Home</a>
      <a href="#about">About Us</a>
      <a href="#adventure-quad">Adventures</a>
      <div class="nav-item dropdown-hover mx-3">
        <a class="nav-link text-capitalize" href="#activities">
          activities
        </a>

        <ul class="dropdown-menu-custom">
          <li><a href="#">Paragliding</a></li>
          <li><a href="{{ route('quad') }}">Quad</a></li>
          <li><a href="{{ route('camel') }}">Camel Ride</a></li>
          <li><a href="#">Hotel</a></li>
        </ul>

      </div>
      <li class="nav-item dropdown-hover mx-3">
        <a class="nav-link text-capitalize">
          @if (app()->getLocale() == 'en')
            <img draggable="false" width="25" src="{{ asset('images/icons/flags/uk.svg') }}" alt="uk">
          @elseif (app()->getLocale() == 'ar')
            <img draggable="false" width="25" src="{{ asset('images/icons/flags/morocco.svg') }}" alt="morocco">
          @elseif (app()->getLocale() == 'fr')
            <img draggable="false" width="25" src="{{ asset('images/icons/flags/france.svg') }}" alt="france">
          @elseif (app()->getLocale() == 'es')
            <img draggable="false" width="25" src="{{ asset('images/icons/flags/spain.svg') }}" alt="spain">
          @elseif (app()->getLocale() == 'it')
            <img draggable="false" width="25" src="{{ asset('images/icons/flags/italy.svg') }}" alt="italy">
          @endif
          <span>
            <i class='bx bx-chevron-down'></i>
          </span>
        </a>

        <ul class="dropdown-menu-custom">
          <li><a href="{{ route('langSwitcher', 'en')}}">
              <img draggable="false" width="25" src="{{ asset('images/icons/flags/uk.svg') }}" alt="uk">
              <span class="px-2">
                English
              </span>
            </a></li>
          <li>
            <a href="{{ route('langSwitcher', 'ar')}}">
              <img draggable="false" width="25" src="{{ asset('images/icons/flags/morocco.svg') }}" alt="morocco">
              <span class="px-2">
                العربية
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('langSwitcher', 'fr')}}">
              <img draggable="false" width="25" src="{{ asset('images/icons/flags/france.svg') }}" alt="france">
              <span class="px-2">
                Française
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('langSwitcher', 'es')}}">
              <img draggable="false" width="25" src="{{ asset('images/icons/flags/spain.svg') }}" alt="spain">
              <span class="px-2">
                Español
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('langSwitcher', 'it')}}">
              <img draggable="false" width="25" src="{{ asset('images/icons/flags/italy.svg') }}" alt="italy">
              <span class="px-2">
                italiana
              </span>
            </a>
          </li>
        </ul>
      </li>
    </nav>

    <div class="nav-actions">
      <div class="search-container">
        <input type="text" id="search-bar" placeholder="Search adventures...">
        <i data-lucide="search" id="search-icon" style="cursor:pointer"></i>

      </div>

      <button class="btn-dark">Contact Us</button>
      <div class="menu-toggle" id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <main class="hero">
    <div class="bg-text"><img src="{{ asset("images/new logo.png") }}" alt="" class="hero-image"></div>


    <div class="hero-content">
      <div class="social-sidebar">
        <a href="#"><i data-lucide="instagram" size="18"></i></a>
        <a href="#"><i data-lucide="facebook" size="18"></i></a>
        <a href="#"><i data-lucide="linkedin" size="18"></i></a>
        <a href="#"><i data-lucide="youtube" size="18"></i></a>
      </div>

      <div class="headline-group">
        <h1 class="main-title">
          The Ultimate Quad <br>
          Experience in<br>
          <span class="outline">Marrakech</span>
        </h1>
      </div>

      <div class="hero-footer">
        <button class="btn-orange">
          Book Now <i data-lucide="arrow-right"></i>
        </button>

        <div class="video-preview">
          <div class="play-btn"><i data-lucide="play" fill="white"></i></div>
          <span>Watch Video</span>
        </div>
      </div>
    </div>
  </main>
  <section class="About" id="about">
     <div class="img-about">
      <img src="{{ asset("images/quad-marrakech.avif") }}" alt="Quad Agafay Marrakech">
      <a class="btn-about">Click here</a>
    </div>

    <div class="para-about">
      <h2>Driven by Adventure</h2>
      <p>We are driven by adventure and powered by a true passion for quad riding in Marrakech.
        Our mission is to offer unforgettable quad experiences across some of
        the most iconic landscapes in the region, including Agafay Desert, Lalla Takerkoust, and Agargour.
        From rocky trails to wide open desert paths, every ride is designed to combine thrill, safety,
        and breathtaking scenery. Whether you are a beginner or an experienced rider, our professional team
        ensures
        a unique and authentic adventure that lets you explore Morocco in the most exciting way.</p>
    </div>
   
  </section>
  <section class="adventure" id="adventure-quad">
    <div class="video-quad">

      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.26 PM.mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PM (1).mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PMa.mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.26 PM.mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PM (1).mp4" autoplay muted loop playsinline></video>
      <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PMa.mp4" autoplay muted loop playsinline></video>

    </div>


  </section>
  <footer>
    <div class="footer-container">
      <div class="logo_footer_container">
        <img class="footer-logo" src="{{ asset('images/ChatGPT Image Feb 15, 2026, 01_00_44 AM.png') }}" alt="">
        <p>Adventure, nature, and <br> unforgettable experiences in one <br> of Morocco's most stunning <br>
          destinations.</p>
      </div>

      <div>
        <h4>Quick Links</h4>
        <ul class="Quick-links">
          <li><a class="quick-link"  href="{{ route('HomePage') }}">Home</a></li>
          <li><a class="quick-link"  href="#about">About Us</a></li>
          <li><a class="quick-link"  href="#adventure-quad">Adventures</a></li>
          <li><a class="quick-link" href="#contact-form">Contact</a></li>
        </ul>
      </div>

      <div>
        <h4>Contact Info</h4>
        <p>Phone: <a class="phone" href="tel:+212652645856">+212 652 645 856</a></p>
        <p>Email: <a class="phone" href="mcmadlom53@gmail.com">contact@lallatakerkoust.com</a></p>
        <p>WhatsApp: <a class="whatssap" href="https://wa.me/212652645856">Message us</a></p>
      </div>

      <div class="footer-bott">
        <h4>Follow Us</h4>
        <a class="folow1" href="https://facebook.com/ayoub.aourik.2025"><i class="fa-brands fa-facebook-f"></i></a>
        <a class="folow2" href="https://www.instagram.com/lalla_takerkoust_parapent_vip?igsh=bm14dmE0M2xsYXQ="><i
            class="fa-brands fa-instagram"></i></a>
        <a class="folow3" href="#"><i class="fa-brands fa-tiktok"></i></a>


      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      &copy; {{ date(format: 'Y') }} Ayoub AouRik - All Rights Reserved.
    </div>
  </footer>
  <script src="quad.js"></script>
</body>

</html>