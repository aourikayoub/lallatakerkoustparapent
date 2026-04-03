<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lalla Takerkoust Parapente - Service Details</title>
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

</head>

<body>
  @include('partiat/navBar')

  <main class="service-details-page">
    
    <!-- Hero Section -->
    <section class="sd-hero" style="background-image: url('{{ asset('images/bgs/young-woman-taking-photo-with-smartphone.jpg') }}');">
      <div class="sd-hero-overlay"></div>
      <div class="container-fluid px-md-5 sd-hero-content">
        <div class="row w-100">
          <div class="col-md-8">
            <h1 class="sd-title">{{ __($service_data['title_key']) }}</h1>
            <p class="sd-subtitle">{{ __($service_data['desc_key']) }}</p>
            <a href="#book-call" class="impressive-btn mt-2 border-0">SCHEDULE A FREE CONSULTATION <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      
      <a href="#details-stats" class="scroll-down-mouse position-absolute bottom-0 start-50 translate-middle-x mb-5" aria-label="Scroll down to next section">
        <div class="mouse">
          <div class="wheel"></div>
        </div>
      </a>

      <!-- Floating Reviews Card -->
      <div class="sd-reviews-card">
        <div class="avatars">
          <!-- Real placeholder avatars for the mockup UI -->
          <img src="https://i.pravatar.cc/100?img=1" alt="Avatar" class="avatar">
          <img src="https://i.pravatar.cc/100?img=2" alt="Avatar" class="avatar">
          <img src="https://i.pravatar.cc/100?img=3" alt="Avatar" class="avatar">
          <img src="https://i.pravatar.cc/100?img=4" alt="Avatar" class="avatar">
        </div>
        <div class="rating-info">
          <div class="rating-flex">
            <span class="rating-score">4.9</span>
            <div class="stars">
               <i class="fa-solid fa-star text-warning"></i>
               <i class="fa-solid fa-star text-warning"></i>
               <i class="fa-solid fa-star text-warning"></i>
               <i class="fa-solid fa-star text-warning"></i>
               <i class="fa-solid fa-star text-warning"></i>
            </div>
          </div>
          <span class="reviews-count">From 120+ Reviews</span>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section id="details-stats" class="sd-stats container-fluid px-md-5 py-5">
      <div class="row text-center">
        <div class="col-md-3 stat-item">
          <h2 class="stat-number"><span class="counter" data-target="5" data-suffix="+">0</span></h2>
          <p class="stat-desc">Years of active experience</p>
        </div>
        <div class="col-md-3 stat-item">
          <h2 class="stat-number"><span class="counter" data-target="120" data-suffix="+">0</span></h2>
          <p class="stat-desc">Experiences reconciled and maintained</p>
        </div>
        <div class="col-md-3 stat-item">
          <h2 class="stat-number"><span class="counter" data-target="99" data-suffix="%">0</span></h2>
          <p class="stat-desc">Client retention rate consistently high</p>
        </div>
        <div class="col-md-3 stat-item border-0">
          <h2 class="stat-number"><span class="counter" data-target="100" data-suffix="%">0</span></h2>
          <p class="stat-desc">Safe, secure unforgettable service</p>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="sd-features container-fluid px-md-5 py-5">
      <h2 class="section-title">What to Expect</h2>
      <div class="features-grid mt-5">
        <div>
          <div class="feature-card text-center p-4 shadow-sm h-100 rounded">
            <div class="icon-wrapper mb-3 mx-auto shadow-sm">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: var(--primary_color, #2c3e50);">Top-Tier Safety</h4>
            <p class="text-muted">We use the latest verified equipment and our guides are highly certified professionals.</p>
          </div>
        </div>
        <div>
          <div class="feature-card text-center p-4 shadow-sm h-100 rounded">
            <div class="icon-wrapper mb-3 mx-auto shadow-sm">
              <i class="fa-solid fa-camera-viewfinder"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: var(--primary_color, #2c3e50);">Memorable Media</h4>
            <p class="text-muted">Capture every thrilling moment with professional photo and video packages available.</p>
          </div>
        </div>
        <div>
          <div class="feature-card text-center p-4 shadow-sm h-100 rounded">
            <div class="icon-wrapper mb-3 mx-auto shadow-sm">
              <i class="fa-solid fa-bus"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: var(--primary_color, #2c3e50);">Seamless Transport</h4>
            <p class="text-muted">Enjoy hassle-free round-trip transportation from your accommodation to the site.</p>
          </div>
        </div>
        <div>
          <div class="feature-card text-center p-4 shadow-sm h-100 rounded">
            <div class="icon-wrapper mb-3 mx-auto shadow-sm">
              <i class="fa-solid fa-user-check"></i>
            </div>
            <h4 class="fw-bold mb-3" style="color: var(--primary_color, #2c3e50);">Expert Guides</h4>
            <p class="text-muted">Our extensive local knowledge and expertise guarantees an exceptional adventure.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bottom Contact Section -->
    <section id="book-call" class="sd-bottom-section container-fluid px-md-5 pb-5">
      <div class="row align-items-stretch">
        <div class="col-md-7 mb-4 mb-md-0 d-flex">
          <div class="sd-image-wrapper w-100 position-relative shadow-sm" style="flex: 1; border-radius: 12px; overflow: hidden; min-height: 400px;">
            <!-- Using another dynamic image or a static nice placeholder image closely related to paragliding/services -->
            <img src="{{ asset('images/bgs/young-blonde-woman-jumping-top-hill.jpg') }}" alt="Service Experience" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-md-5">
          <div class="sd-form-card shadow-sm h-100 d-flex flex-column justify-content-center">
            <h3 class="text-center mb-4 sd-form-title">Book Your Experience</h3>
            <form action="#" method="post">
              <div class="mb-3">
                <input type="text" class="form-control bg-transparent" name="full_name" placeholder="Full Name" required>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control bg-transparent" name="email" placeholder="Email Address" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="tel" class="form-control bg-transparent" name="phone" placeholder="Phone / WhatsApp" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="date" class="form-control bg-transparent text-muted" name="booking_date" required>
                </div>
                <div class="col-md-6 mb-3">
                  <select class="form-select bg-transparent text-muted" name="details_option" required>
                    <option value="" disabled selected>Select Package Details</option>
                    <option value="standard">Standard Package</option>
                    <option value="with_transport">Include Transport</option>
                    <option value="with_media">Include Photo & Video</option>
                    <option value="vip_full">Full VIP Experience</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <textarea class="form-control bg-transparent" name="message" rows="3" placeholder="Special requirements or optional message"></textarea>
              </div>
              <button type="submit" class="impressive-btn w-100 mt-2 justify-content-center border-0">Request Booking <i class="fa-solid fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="sd-faq-section container-fluid px-md-5 pb-5 pt-3">
      <div class="row align-items-center">
        <!-- Left Image -->
        <div class="col-md-5 mb-4 mb-md-0 d-flex">
          <div class="sd-image-wrapper border w-100 position-relative shadow-sm" style="flex: 1; border-radius: 12px; overflow: hidden; min-height: 500px;">
             <!-- Placeholder image mimicking the requested layout -->
             <img src="{{ asset('images/items_1/photo_2025-08-31_06-53-49.jpg') }}" alt="FAQ Image" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;">
          </div>
        </div>
        <!-- Right Accordion -->
        <div class="col-md-7 ps-md-5">
          <div class="faq-header mb-4">
            <span class="text-uppercase fw-bold" style="color: var(--secondary_color, #00d4ff); letter-spacing: 1px; font-size: 0.85rem;">QUESTIONS & ANSWERS</span>
            <h2 class="display-6 fw-bold mt-2" style="color: var(--primary_color, #2c3e50);">Frequently Asked Questions</h2>
          </div>
          <div class="accordion accordion-flush custom-accordion" id="faqAccordion">
            <!-- Accordion Item 1 -->
            <div class="accordion-item border-0 border-bottom">
              <h2 class="accordion-header" id="faqHeadingOne">
                <button class="accordion-button collapsed fw-bold shadow-none bg-transparent px-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="false" aria-controls="faqCollapseOne">
                  What services do you offer?
                </button>
              </h2>
              <div id="faqCollapseOne" class="accordion-collapse collapse text-start" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body px-0 text-muted">
                  We provide exceptional services tailored to your personal adventure. Experience the beautiful sceneries of Lalla Takerkoust with our certified professionals by your side. Services can be tailored to your precise needs.
                </div>
              </div>
            </div>
            <!-- Accordion Item 2 -->
            <div class="accordion-item border-0 border-bottom">
              <h2 class="accordion-header" id="faqHeadingTwo">
                <button class="accordion-button collapsed fw-bold shadow-none bg-transparent px-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                  Who do you work with?
                </button>
              </h2>
              <div id="faqCollapseTwo" class="accordion-collapse collapse text-start" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body px-0 text-muted">
                  We welcome thrill-seekers of all ages and levels of experience. Whether you're a first-timer or an experienced adventurer, we have packages tailored for you.
                </div>
              </div>
            </div>
            <!-- Accordion Item 3 -->
            <div class="accordion-item border-0 border-bottom">
              <h2 class="accordion-header" id="faqHeadingThree">
                <button class="accordion-button collapsed fw-bold shadow-none bg-transparent px-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                  Are your activities safe?
                </button>
              </h2>
              <div id="faqCollapseThree" class="accordion-collapse collapse text-start" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body px-0 text-muted">
                  Absolutely. Safety is our top priority. We use meticulously maintained, state-of-the-art equipment, and all our pilots/guides are certified professionals.
                </div>
              </div>
            </div>
            <!-- Accordion Item 4 -->
            <div class="accordion-item border-0 border-bottom">
              <h2 class="accordion-header" id="faqHeadingFour">
                <button class="accordion-button collapsed fw-bold shadow-none bg-transparent px-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                  How often do you run the activities?
                </button>
              </h2>
              <div id="faqCollapseFour" class="accordion-collapse collapse text-start" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body px-0 text-muted">
                  We operate daily, year-round, subject to favorable weather conditions. We strongly recommend booking in advance to secure your spot.
                </div>
              </div>
            </div>
            <!-- Accordion Item 5 -->
            <div class="accordion-item border-0 border-bottom">
              <h2 class="accordion-header" id="faqHeadingFive">
                <button class="accordion-button collapsed fw-bold shadow-none bg-transparent px-0 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                  How do I get started?
                </button>
              </h2>
              <div id="faqCollapseFive" class="accordion-collapse collapse text-start" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body px-0 text-muted">
                  Getting started is easy! Just use the booking form above to send us your preferred date and contact details, and our team will reach out to confirm your adventure.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

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
