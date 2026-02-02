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

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body id="home">

    <header class="navbar">
        <div class="logo"><img src="{{ asset("images/new logo.png") }}" alt="logo Quad" class="logo-image"></div>

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
                    The Ultimate Quad <br>
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
            <h2>Driven by Adventure</h2>
            <p>We are driven by adventure and powered by a true passion for quad riding in Marrakech.
                Our mission is to offer unforgettable quad experiences across some of
                the most iconic landscapes in the region, including Agafay Desert, Lalla Takerkoust, and Agargour.
                From rocky trails to wide open desert paths, every ride is designed to combine thrill, safety,
                and breathtaking scenery. Whether you are a beginner or an experienced rider, our professional team
                ensures
                a unique and authentic adventure that lets you explore Morocco in the most exciting way.</p>
        </div>
        <div class="img-about">
            <img src="{{ asset("images/quad-marrakech.avif") }}" alt="Quad Agafay Marrakech">
            <a class="btn-about">Click here</a>
        </div>

    </section>
    <section class="adventure" id="adventure-quad">
        <div class="video-quad">

            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4" autoplay muted loop playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.26 PM.mp4" autoplay muted loop playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PM (1).mp4" autoplay muted loop
                playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PMa.mp4" autoplay muted loop playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.03 PM.mp4" autoplay muted loop playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.26 PM.mp4" autoplay muted loop playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PM (1).mp4" autoplay muted loop
                playsinline></video>
            <video src="videos/WhatsApp Video 2026-01-10 at 12.54.34 PMa.mp4" autoplay muted loop playsinline></video>

        </div>


    </section>
    <footer>
        <div class="container-footer">
            <div class="about-footer">
                <img src="{{ asset("images/new logo.png") }}" alt="">
                <p>Experience the Thrill of Quad Adventures</p>
            </div>
            <div class="links-footer">
                <h3>quick links</h3>
                <a href="#hone">Home</a>
                <a href="#about">About US</a>
                <a href="#adventure-quad">Adventure</a>
                <a href=""></a>
            </div>
            <div class="contact-footer">
                <h3>Contact Info</h3>
                <p>Phone: <a class="phone" href="tel:+212652645856">+212 652 645 856</a></p>
                <p>Email: <a class="phone" href="mcmadlom53@gmail.com">contact@lallatakerkoust.com</a></p>
                <p>WhatsApp: <a class="whatssap" href="https://wa.me/212652645856">Message us</a></p>
            </div>
            <div class="social-footer">
                <h3>Follow us</h3>
                <a href="">Facebook</a>
                <a href="">instagram</a>
                <a href="">tiktok</a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; {{ date(format: 'Y') }} <b>Ayoub Aourik</b> - All Rights Reserved.
        </div>
    </footer>
    <script src="quad.js"></script>
</body>

</html>