<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>

<body id="body">
  @include('partiat/navBar')
  <header class="">

    <video class="header-vid" autoplay muted loop playsinline class="w-100">
      <source src="{{ asset('images/bgs/hero_bg.mp4') }}" type="video/mp4" />
    </video>
    <div class="hero_content">
      <div class="hero_section">
        <h1 class="py-4">{{ __('messages.hero_welcome') }}</h1>
      </div>

      <div class="search-container">
        <input type="text" class="search-input" placeholder="paragliding , quad , camel's Ride, Hotel">

        <svg class="search-icon" viewBox="0 0 24 24">
          <path
            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
        </svg>
      </div>
    </div>
  </header>

  <section id="about" class="container-fluid wwa_section">
    <div class="row">
      <div class="col-md-6 wwa_content">
        <h4 class="tagline"> {{ __('about.title_about') }}</h4>
        <h2>
          {{ __('about.dis_about')}}
        </h2>
        <p class="wwa_description">
         {{ __('about.para_about') }}
        </p>
      </div>
      <div class="col-md-6 wwa_preview">
        <img src="{{ asset('images/bgs/about_image.jpg') }}" alt="who_we_are preview">

        <div class="wwa_preview_content">
          <a href="" class="btn wwa_preview_btn">
            check now!
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="why-us">
    <div>
      <h2 class=" "> {{ __('cards.title_cards') }}</h2>
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
      </div>
    </div>
  </section>

  <section id="activities">
    <h2> {{ __('activities.title') }}</h2>
    <ul>
      <li><b> <em>{{ __('activities.views_title') }}</em> </b> :{{ __('activities.views_text') }}</li>
      <li><b> <em>{{ __('activities.photo_title') }}</em></b>:{{ __('activities.photo_text') }}</li>
      <li><b><em>{{ __('activities.welcome_title') }}</em></b>: {{ __('activities.welcome_text') }}</li>
      <li><b><em>{{ __('activities.safety_title') }}</em></b>:{{ __('activities.safety_text') }}</li>
    </ul>
  </section>

  <section id="gallery">
    <h2> Your Moments With Us</h2>
    <div class="gallery">
      <img src="{{asset('images/items_1/photo_2025-08-31_06-53-49.jpg')}}" alt="Photo 1">
      <img src="{{ asset('images/items_1/G0013437.JPG') }}" alt="image of lalla takerkoust parapent ">
      <img src="{{ asset('images/items_2/img-1.jpg') }}" alt="image paragliding">
      <img src="{{ asset('images/items_2/img-2.jpg') }}" alt="photo parapent">
      <img src="{{ asset('images/items_2/img-3.jpg') }}" alt="images paragliding">
      <img src="{{ asset('images/items_2/img-4.jpg') }}" alt="image paragliding in agargour mountan">
      <img src="{{ asset('') }}" alt="Agafay quad">
      <img src="{{ asset('') }}" alt="Agafay Camel">

    </div>

    </div>
  </section>

  <section id="contact-form">
    <div class="form-container">
      <h2>{{ __('footer.title_contact_footer') }}</h2>
      <form action="#" method="post">

        <div class="mb-4">
          <label class="form-label" for="name">{{ __('contact.name') }}:</label>
          <input class="form-control" type="text" id="name" placeholder="{{ __('contact.y_name') }}" name="name" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="phone">{{ __('contact.namber') }}:</label>
          <input class="form-control" type="phone" id="Number" placeholder="{{ __('contact.y_namber') }}" name="phone" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="date">{{ __('contact.d_o_v') }}:</label>
          <input class="form-control" type="date" id="date" name="date" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="message">{{ __('contact.Y_Message') }}:</label>
          <textarea class="form-control" id="message" name="message" placeholder="{{ __('contact.Y_Message') }}" rows="4"
            required></textarea>
        </div>

        <div class="submit-btn w-100">
          <button class="w-100 primary_button" type="submit">{{ __('contact.s_message') }}</button>
        </div>
      </form>

      <div class="whatsapp">
        <p>{{ __('contact.or_contact_whatssap') }}:</p>
        <a href="https://wa.me/212652645856" target="_blank">{{ __('contact.m_us_on_whatsap') }}</a>
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