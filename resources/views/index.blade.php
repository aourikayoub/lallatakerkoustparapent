<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lalla Takerkoust Parapente</title>
  <!-- css link -->
  <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">

  <!-- poppins font  (english ....)-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Readex Pro (arabic) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
 @include('partiat/navBar')
  <header class="hero-slider-section"> 
    <!-- Video Slider Container -->
    <div class="video-slider">
      <div class="video-slide active">
        <video class="header-vid" autoplay muted loop playsinline>
          <source src="{{ asset('images/bgs/hero_bg.mp4') }}" type="video/mp4" />
        </video>
      </div>
      <div class="video-slide">
         <video class="header-vid" autoplay muted loop playsinline>
          <source src="{{ asset('images/bgs/quads_background.mp4') }}" type="video/mp4" />
        </video>
      </div>
      <div class="video-slide">
         <video class="header-vid" autoplay muted loop playsinline>
          <source src="{{ asset('images/bgs/camels_background.mp4') }}" type="video/mp4" />
        </video>
      </div>
      <div class="hero-overlay"></div>
    </div>

    <!-- Vertical Side Indicators -->
    <div class="hero-indicators">
      <div class="indicator-dot active" data-index="0"></div>
      <div class="indicator-dot" data-index="1"></div>
      <div class="indicator-dot" data-index="2"></div>
    </div>
    
    <!-- Fixed Stationary Content -->
    <div class="hero_container w-100">
      <div class="hero-flex-layout container-fluid px-md-5 g-5">
        <!-- Right Column: Glass Reviews Card -->
        <div class="hero-right-col d-flex justify-content-center align-items-center">
          <div class="hero-reviews-glass shadow-lg">
            <div class="reviews-header pb-3 mb-3 border-bottom border-white border-opacity-25">
              <h3 class="h5 mb-0 text-white fw-bold">Client Reviews</h3>
              <div class="stars text-warning mt-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span class="text-white opacity-75 ms-2 small">5.0 Rating</span>
              </div>
            </div>

            <div class="reviews-scroll">
              <div class="review-item mb-4">
                <div class="d-flex align-items-center mb-2">
                  <img src="https://i.pravatar.cc/150?u=1" class="avatar-sm rounded-circle me-3" alt="Client 1">
                  <div>
                    <h6 class="mb-0 text-white fw-bold">Sarah Johnson</h6>
                    <small class="text-white opacity-50 italic text-lowercase">"Best experience ever!"</small>
                  </div>
                </div>
              </div>

              <div class="review-item mb-4">
                <div class="d-flex align-items-center mb-2">
                  <img src="https://i.pravatar.cc/150?u=2" class="avatar-sm rounded-circle me-3" alt="Client 2">
                  <div>
                    <h6 class="mb-0 text-white fw-bold">Michael Brown</h6>
                    <small class="text-white opacity-50 italic text-lowercase">"The views were breathtaking!"</small>
                  </div>
                </div>
              </div>

              <div class="review-item mb-4">
                <div class="d-flex align-items-center mb-2">
                  <img src="https://i.pravatar.cc/150?u=3" class="avatar-sm rounded-circle me-3" alt="Client 3">
                  <div>
                    <h6 class="mb-0 text-white fw-bold">Elena Rodriguez</h6>
                    <small class="text-white opacity-50 italic text-lowercase">"Highly recommend for families."</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="reviews-cta mt-auto pt-3">
              <a href="#contact-form" class="impressive-btn w-100 justify-content-center">
                Get Started Now <i class="fa-solid fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

         <!-- Left Column: Title & Search -->
        <div class="hero-left-col">
          <div class="hero_section">
            <h1 class="py-4 text-center">
              Adventure Awaits <br> in Every <span class="title_placeholder">
                Direction
              </span>
            </h1>
          </div>

          <div class="search-container">
            <input type="text" class="search-input" placeholder="{{ __('messages.search_placeholder') }}">
            <button type="button" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
      </div>

      <a href="#about" class="scroll-down-mouse" aria-label="Scroll down to next section">
        <div class="mouse">
          <div class="wheel"></div>
        </div>
      </a>
    </div>
  </header>

  <section id="about" class="container-fluid px-md-5 py-5 wwa_section">
    <div class="row align-items-center">
      <div class="col-md-6 wwa_content">
        <h4 class="tagline"> {{ __('about.title_about') }}</h4>
        <h2 class="mb-4">
          {{ __('about.dis_about')}}
        </h2>
        
        <p class="wwa_description mb-5">
         {{ __('about.para_about') }}
        </p>

        <a href="#activities" class="impressive-btn">
          Rate us <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="col-md-6 wwa_stats">
        <div class="stats-grid">
          <div class="stat-card">
            <i class="fa-solid fa-users stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="5" data-suffix="k+">0</span></h3>
            <p class="stat-text">Happy Clients</p>
          </div>
          <div class="stat-card">
            <i class="fa-solid fa-parachute-box stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="10" data-suffix="+">0</span></h3>
            <p class="stat-text">Years Experience</p>
          </div>
          <div class="stat-card">
            <i class="fa-solid fa-plane-up stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="15" data-suffix="k+">0</span></h3>
            <p class="stat-text">Successful Flights</p>
          </div>
          <div class="stat-card">
            <i class="fa-solid fa-star stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="4.9" data-suffix="" data-decimals="1">0</span></h3>
            <p class="stat-text">User Rating</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="why-us" class="container-fluid px-md-5 py-5">
    <div>
      <h2 class="section-title"> {{ __('cards.title_cards') }}</h2>
      <div class="why-cards">
        <div class="card">
          <img src="{{ asset('images/items_2/adrinaline.jpg') }}" alt="Adventure">
          <h4>{{__('cards.title_adr_para')}}</h4>
          <p>{{ __('cards.text_adr_para') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>

        <div class="card">
          <img src="{{ asset('images/items_1/img para 2.jpg') }}" alt="Parapente">
          <h4>{{ __('cards.title_adv_para') }}</h4>
          <p>{{ __('cards.text_adv_para') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>

        <div class="card">
          <img src="{{ asset('images/items_1/IMG_20221126_205957-scaled.jpg') }}" alt="Buggy & Quad">
          <h4>{{ __('cards.title_quad') }}</h4>
          <p>{{ __('cards.text_quad') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>

        <div class="card">
          <img src="{{ asset('images/items_1/OIP.webp') }}" alt="Camel Ride">
          <h4>{{ __('cards.title_camel') }}</h4>
          <p>{{ __('cards.text_camel') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>
        <div class="card">
          <img src="{{ asset('images/items_1/IMG-20241231-WA0006.jpg') }}" alt="Tea Break Before Takeoff">
          <h4>{{__('cards.title_tea') }}</h4>
          <p>{{ __('cards.text_tea') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>
        <div class="card">
          <img src="{{ asset('images/items_1/photo_2025-08-31_06-53-49.jpg') }}" alt="Optional Lanch">
          <h4>{{ __('cards.title_lanch') }}</h4>
          <p>{{ __('cards.text_lanch') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>
        <div class="card">
          <img src="{{ asset('images/items_2/img 5.jpg') }}" alt="Transport">
          <h4>{{ __('cards.title_transport') }}</h4>
          <p>{{ __('cards.text_transport') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>
        <div class="card">
          <img src="{{ asset('images/items_2/img-3.jpg') }}" alt="Photography & Video">
          <h4>{{ __('cards.title_media') }}</h4>
          <p>{{ __('cards.text_media') }}</p>
          <a class="btn_card" href="">{{ __('cards.btn_cards') }}</a>
        </div>
      </div>
    </div>
  </section>

  <section id="activities" class="container-fluid px-md-5 py-5">
    <h2 class="section-title"> {{ __('activities.title') }}</h2>
    <ul>
      <li><b> <em>{{ __('activities.views_title') }}</em> </b> :{{ __('activities.views_text') }}</li>
      <li><b> <em>{{ __('activities.photo_title') }}</em></b>:{{ __('activities.photo_text') }}</li>
      <li><b><em>{{ __('activities.welcome_title') }}</em></b>: {{ __('activities.welcome_text') }}</li>
      <li><b><em>{{ __('activities.safety_title') }}</em></b>:{{ __('activities.safety_text') }}</li>
    </ul>
  </section>

  <section id="gallery" class="container-fluid px-md-5 py-5">
    <h2 class="section-title text-center mb-5"> Your Moments With Us</h2>
    <div class="gallery-custom-grid">
      <div class="gallery-main-content">
        <img src="{{asset('images/items_1/photo_2025-08-31_06-53-49.jpg')}}" alt="Gallery Main Event">
        <i class="fa-solid fa-play play-icon-overlay"></i>
      </div>
      <div class="gallery-sidebar">
        <img src="{{ asset('images/items_1/G0013437.JPG') }}" alt="Gallery Sidebar Event">
        <i class="fa-solid fa-play play-icon-overlay"></i>
      </div>
      <div class="gallery-twin-1">
        <img src="{{ asset('images/items_2/img-1.jpg') }}" alt="Gallery Twin Left">
        <i class="fa-solid fa-play play-icon-overlay"></i>
      </div>
      <div class="gallery-twin-2">
        <img src="{{ asset('images/items_2/img-2.jpg') }}" alt="Gallery Twin Right">
        <i class="fa-solid fa-play play-icon-overlay"></i>
      </div>
    </div>
  </section>

  <section id="contact-form" class="container-fluid px-md-5 py-5 bg-light">
    <div class="row align-items-stretch">
      <!-- Contact Form Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="form-container h-100 shadow-sm border-0" style="max-width: none; margin: 0; padding: 50px;">
          <h2 class="section-title mb-4" style="font-size: 1.8rem;">Send Us a Message</h2>
          <form action="#" method="post" class="enhanced-form">
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-user position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
              <input class="form-control bg-light border-0 ps-5 py-3" type="text" id="name" placeholder="Your Full Name" name="name" required style="border-radius: 10px;">
            </div>
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-phone position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
              <input class="form-control bg-light border-0 ps-5 py-3" type="phone" id="Number" placeholder="WhatsApp / Phone Number" name="phone" required style="border-radius: 10px;">
            </div>
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-calendar-days position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
              <input class="form-control bg-light border-0 ps-5 py-3" type="date" id="date" name="date" required style="border-radius: 10px;">
            </div>
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-comment-dots position-absolute top-0 mt-3 ms-3 text-muted"></i>
              <textarea class="form-control bg-light border-0 ps-5 py-3" id="message" name="message" placeholder="How can we help you today?" rows="5" required style="border-radius: 10px;"></textarea>
            </div>
            <div class="submit-btn w-100 mt-2">
              <button class="impressive-btn w-100 justify-content-center border-0 py-3" type="submit">
                <span>Send Message Now</span> <i class="fa-solid fa-paper-plane ms-2"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- Map Column -->
      <div class="col-lg-6">
        <div class="map-container h-100 shadow-sm overflow-hidden" style="border-radius: 12px; min-height: 450px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13621.144458348883!2d-8.13284045!3d31.3648053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaf9664db318f77%3A0xe54d896677f59d4!2sLalla%20Takerkoust%2C%20Morocco!5e0!3m2!1sen!2s!4v1712175000000!5m2!1sen!2s" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  @include('partiat.footer')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>