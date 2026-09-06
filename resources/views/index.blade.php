<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lalla Takerkoust Parapente | Paragliding & Adventures in Marrakech</title>
  <meta name="description" content="Experience the thrill of a lifetime with Lalla Takerkoust Parapente. We offer premium paragliding, quad biking, and camel rides in Marrakech, Agafay, and the Atlas Mountains.">
  <meta name="keywords" content="paragliding marrakech, lalla takerkoust, agafay desert, morocco adventure, quad biking marrakech, camel ride agafay">
  
  <!-- Open Graph / Social -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Lalla Takerkoust Parapente | Adventures in Marrakech">
  <meta property="og:description" content="Experience premium paragliding, quad biking, and camel rides in Marrakech and Agafay.">
  <meta property="og:image" content="{{ asset('images/bgs/about_image.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <!-- css link -->
  @vite(['resources/css/styles.css'])

  <!-- poppins font  (english ....)-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="shortcut icon" href=" {{ asset('images/favicon.ico') }}" type="image/x-icon">

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

</head>

<body>
 @include('partials.navbar')
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
          <div class="hero-reviews-glass shadow-lg" style="background: rgba(19, 31, 45, 0.78); max-width: 390px;">
            <div class="reviews-header pb-3 mb-3 border-bottom border-white border-opacity-25 d-flex justify-content-between align-items-center">
              <div>
                <h3 class="h5 mb-0 text-white fw-bold">{{ __('messages.client_reviews') }}</h3>
                <div class="stars text-warning mt-1">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
              <button class="btn btn-sm btn-outline-light rounded-pill px-3" id="toggleReviewForm">
                <i class="fa-solid fa-plus me-1"></i> {{ __('messages.rate_us') }}
              </button>
            </div>

            <div class="reviews-content-wrapper position-relative">
              <!-- Reviews List -->
              <div class="reviews-scroll" id="reviewsList" style="color: rgba(255, 255, 255, 0.92);">
                @forelse($reviews as $review)
                <div class="review-item mb-4">
                  <div class="d-flex align-items-start mb-2">
                    <div class="avatar-sm rounded-circle me-3 d-flex align-items-center justify-content-center bg-white bg-opacity-25 text-white fw-bold">
                      {{ strtoupper(substr($review->name, 0, 1)) }}
                    </div>
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 text-white fw-bold small">{{ $review->name }}</h6>
                        <div class="text-warning small" style="font-size: 0.7rem;">
                          @for($i = 0; $i < $review->rating; $i++)
                            <i class="fa-solid fa-star"></i>
                          @endfor
                        </div>
                      </div>
                      <p class="text-white opacity-75 mb-0 small mt-1" style="font-size: 0.85rem; line-height: 1.4;">
                        "{{ $review->comment }}"
                      </p>
                    </div>
                  </div>
                </div>
                @empty
                <div class="text-center py-4 text-white opacity-50">
                  <p class="small mb-0">{{ __('messages.no_reviews') }}</p>
                </div>
                @endforelse
              </div>

              <!-- Review Form (Hidden by default) -->
              <div class="review-form-overlay" id="reviewFormContainer" style="display: none;">
                <form id="ajaxReviewForm" class="p-2">
                  @csrf
                  <h6 class="text-white fw-bold mb-3">{{ __('messages.share_experience') }}</h6>
                  
                  <div class="mb-3">
                    <input type="text" name="name" class="form-control form-control-sm bg-white bg-opacity-10 border-white border-opacity-25 text-white" placeholder="{{ __('messages.your_name') }}" required>
                  </div>

                  <div class="mb-3">
                    <div class="star-rating-input d-flex gap-2 justify-content-center mb-2">
                      <input type="hidden" name="rating" id="reviewRatingValue" value="5">
                      <i class="fa-solid fa-star rating-star cursor-pointer text-warning" data-rating="1"></i>
                      <i class="fa-solid fa-star rating-star cursor-pointer text-warning" data-rating="2"></i>
                      <i class="fa-solid fa-star rating-star cursor-pointer text-warning" data-rating="3"></i>
                      <i class="fa-solid fa-star rating-star cursor-pointer text-warning" data-rating="4"></i>
                      <i class="fa-solid fa-star rating-star cursor-pointer text-warning" data-rating="5"></i>
                    </div>
                  </div>

                  <div class="mb-3">
                    <textarea name="comment" class="form-control form-control-sm bg-white bg-opacity-10 border-white border-opacity-25 text-white" placeholder="{{ __('messages.your_review') }}" rows="3" required></textarea>
                  </div>

                  <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-primary flex-grow-1 rounded-pill">{{ __('messages.submit_review') }}</button>
                    <button type="button" class="btn btn-sm btn-secondary rounded-pill" id="cancelReview">{{ __('messages.cancel') }}</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="reviews-cta mt-auto pt-3 border-top border-white border-opacity-10">
              <a href="#contact-form" class="impressive-btn w-100 justify-content-center py-2" style="font-size: 0.85rem;">
                {{ __('messages.get_started_now') }} <i class="fa-solid fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

         <!-- Left Column: Title & Search -->
        <div class="hero-left-col">
          <div class="hero_section">
            <h1 class="py-4 text-center">
              {{ __('messages.hero_title_1') }} <br> {{ __('messages.hero_title_2') }} <span class="title_placeholder">
                {{ __('messages.hero_title_3') }}
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
          {{ __('messages.rate_us') }} <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="col-md-6 wwa_stats">
        <div class="stats-grid">
          <div class="stat-card">
            <i class="color_star fa-solid fa-users stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="5" data-suffix="k+">0</span></h3>
            <p class="stat-text">{{ __('messages.happy_clients') }}</p>
          </div>
          <div class="stat-card">
            <i class="color_star fa-solid fa-parachute-box stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="10" data-suffix="+">0</span></h3>
            <p class="stat-text">{{ __('messages.years_experience') }}</p>
          </div>
          <div class="stat-card">
            <i class="color_star fa-solid fa-plane-up stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="15" data-suffix="k+">0</span></h3>
            <p class="stat-text">{{ __('messages.successful_flights') }}</p>
          </div>
          <div class="stat-card">
            <i class="color_star fa-solid fa-star stat-icon"></i>
            <h3 class="stat-number"><span class="counter" data-target="4.9" data-suffix="" data-decimals="1">0</span></h3>
            <p class="stat-text">{{ __('messages.user_rating') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="why-us" class="container-fluid px-md-5 py-5">
    <div>
      <h2 class="section-title"> {{ __('cards.title_cards') }}</h2>
      <div class="why-cards">
        @foreach($services as $service)
        <div class="card">
          <img src="{{ asset($service->service_cover) }}" alt="{{ $service->{'Service_name_' . app()->getLocale()} }}">
          <h4>{{ $service->{'Service_name_' . app()->getLocale()} }}</h4>
          <p>{{ $service->{'Service_overview_' . app()->getLocale()} }}</p>
          <a class="btn_card" href="{{ route('services.details', $service->Service_name_en) }}">{{ __('cards.btn_cards') }}</a>
        </div>
        @endforeach
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
    <h2 class="section-title text-center mb-5"> {{ __('messages.your_moments') }}</h2>
    <div class="gallery-custom-grid">
      <div class="gallery-main-content">
        <img src="{{asset('images/items_1/photo_2025-08-31_06-53-49.jpg')}}" alt="Gallery Main Event">
        <div class="play-icon-overlay">
          <i class="fa-solid fa-play"></i>
        </div>
      </div>
      <div class="gallery-sidebar">
        <img src="{{ asset('images/items_1/G0013437.JPG') }}" alt="Gallery Sidebar Event">
        <div class="play-icon-overlay">
          <i class="fa-solid fa-play"></i>
        </div>
      </div>
      <div class="gallery-twin-1">
        <img src="{{ asset('images/items_2/img-1.jpg') }}" alt="Gallery Twin Left">
        <div class="play-icon-overlay">
          <i class="fa-solid fa-play"></i>
        </div>
      </div>
      <div class="gallery-twin-2">
        <img src="{{ asset('images/items_2/img-2.jpg') }}" alt="Gallery Twin Right">
        <div class="play-icon-overlay">
          <i class="fa-solid fa-play"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="contact-form" class="container-fluid px-md-5 py-5 bg-light">
    <div class="row align-items-stretch">
      <!-- Contact Form Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="form-container h-100 shadow-sm border-0" style="max-width: none; margin: 0; padding: 50px;">
          <h2 class="section-title mb-4" style="font-size: 1.8rem;">{{ __('messages.send_message_title') }}</h2>
          <form action="#" method="post" class="enhanced-form">
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-user position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
              <input class="form-control bg-light border-0 ps-5 py-3" type="text" id="name" placeholder="{{ __('messages.your_full_name') }}" name="name" required style="border-radius: 10px;">
            </div>
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-phone position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
              <input class="form-control bg-light border-0 ps-5 py-3" type="phone" id="Number" placeholder="{{ __('messages.phone_placeholder') }}" name="phone" required style="border-radius: 10px;">
            </div>
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-calendar-days position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
              <input class="form-control bg-light border-0 ps-5 py-3" type="date" id="date" name="date" required style="border-radius: 10px;">
            </div>
            <div class="mb-4 position-relative">
              <i class="fa-solid fa-comment-dots position-absolute top-0 mt-3 ms-3 text-muted"></i>
              <textarea class="form-control bg-light border-0 ps-5 py-3" id="message" name="message" placeholder="{{ __('messages.message_placeholder') }}" rows="5" required style="border-radius: 10px;"></textarea>
            </div>
            <div class="submit-btn w-100 mt-2">
              <button class="impressive-btn w-100 justify-content-center border-0 py-3" type="submit">
                <span>{{ __('messages.send_message_btn') }}</span> <i class="fa-solid fa-paper-plane ms-2"></i>
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

  @include('partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
    crossorigin="anonymous"></script>
  @vite(['resources/js/script.js'])
</body>

</html>