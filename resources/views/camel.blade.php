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
    <div class="container-footer">
      <div class="about-footer">
        <img src="{{ asset("images/new logo.png") }}" alt="">
        <p>Experience the Magic of Camel Adventures</p>
      </div>
      <div class="links-footer">
        <h3>quick links</h3>
        <a href="#hone">Home</a>
        <a href="#about">About US</a>
        <a href="#adventure-quad">Adventure</a>
        <a href=""></a>
      </div>
      <div class="contact-footer">
        <h3>contact info</h3>
        <a href="">Tell me</a>
        <a href="">Email</a>
        <a href="">Whatssap</a>
      </div>
      <div class="social-footer">
        <h3>Follow us</h3>
        <a href="">Facebook</a>
        <a href="">instagram</a>
        <a href="">tiktok</a>
      </div>
    </div>
    <div class="footer-bottom">
      &copy;  {{ date(format: 'Y') }} <b>Ayoub AouRik</b> - All Rights Reserved.
    </div>
  </footer>
  <script src="quad.js"></script>
</body>

</html>