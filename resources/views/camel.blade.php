<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Camel lalla Takerkoust Parapente</title>
  <link rel="stylesheet" href="{{ asset('styles/quad.css') }}">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,900;1,400&display=swap"
    rel="stylesheet">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body id="home">

  <header class="navbar">
    <div class="logo"><img src=" {{ asset(path:"images/new logo.png") }}" alt="" class="logo-image"></div>

    <nav class="nav-links" id="navLinks">
     <a href="{{ route('HomePage') }}">Home</a>
      <a href="#about">About Us</a>
      <a href="#adventure-quad">Adventures</a>
      <a href="#">Packages</a>
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

    <!-- <img src="" alt="ATV Rider" class="hero-image"> -->

    <div class="hero-content">
      <div class="social-sidebar">
        <a href="#"><i data-lucide="instagram" size="18"></i></a>
        <a href="#"><i data-lucide="facebook" size="18"></i></a>
        <a href="#"><i data-lucide="linkedin" size="18"></i></a>
        <a href="#"><i data-lucide="youtube" size="18"></i></a>
      </div>

      <div class="headline-group">
        <h1 class="main-title">
          The Ultimate Camel <br>
          Experience in<br>
          <span class="outline">Marrakech</span>
        </h1>
        <!-- <p class="sub-headline">/ Your Ultimate Outdoor Adventure.</p> -->
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
    <div class="para-about">
      <h2>A Journey Beyond Time</h2>
      <p>We are driven by authenticity and inspired by the timeless tradition of camel riding.
        Our mission is to offer unforgettable camel experiences across
        the most beautiful desert landscapes around Marrakech. From peaceful rides through the Agafay Desert to
        breathtaking views near Lalla Takerkoust and Agargour, each journey is designed to combine comfort, culture, and
        unforgettable scenery. Guided by experienced locals, our camel tours allow you to slow down, connect with
        nature,
        and discover Morocco in its most authentic and memorable way.</p>
    </div>
    <div class="img-about">
      <img src="{{ asset("images/OIP.webp") }}" alt="">
      <a class="btn-about">Click here</a>
    </div>

  </section>
  <section class="adventure" id="adventure-quad">
    <div class="video-quad">

      <video src="{{ asset("videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4") }}" autoplay muted loop playsinline></video>
      <video src="{{ asset("videos/WhatsApp Video 2026-01-10 at 12.54.04 PM.mp4") }}" autoplay muted loop playsinline></video>
      <video src="{{ asset("videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4") }}" autoplay muted loop playsinline></video>
      <video src="{{ asset("videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4") }}" autoplay muted loop playsinline></video>

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