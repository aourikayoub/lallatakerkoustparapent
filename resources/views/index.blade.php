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

  <!-- Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  @include('partiat/navBar')
  <header class="">

    <video class="header-vid" autoplay muted loop playsinline class="w-100">
      <source src="{{ asset('images/bgs/hero_bg.mp4') }}" type="video/mp4" />
    </video>
    <div class="hero_content">
      <div class="hero_section">
        <h1 class="py-4">Adventure Awaits in <br> Every <span class="title_Splited">Direction</span> </h1>
      </div>

      <div class="search-container">
        <input type="text" class="search-input" placeholder="paragliding , quad , camel's journey">

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
        <h4 class="tagline"> Who We Are</h4>
        <h2>
          Discover the Ultimate Adventure Near Marrakech
        </h2>
        <p class="wwa_description">
          At Lalla Takerkoust Parapente, we welcome you to a unique world of adventure just outside Marrakech. Here, you
          can soar above Mount Agargour with breathtaking views of the Toubkal mountains and the Lalla Takerkoust dam,
         
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
      <h2> Why Choose Us?</h2>
      <div class="why-cards">
        <div class="card">
          <img src="{{ asset('images/items_2/adrinaline.jpg') }}" alt="Adventure">
          <h4>Adrenaline Experience</h4>
          <p>Adrenaline is the driving force that makes the adventure more exciting and thrilling. From paragliding to
            quad rides, every moment is filled with excitement, making your heart race,
            creating an unforgettable experience and filling you with energy and excitement.</p>
        </div>

        <div class="card">
          <img src="{{ asset('images/items_1/img para 2.jpg') }}" alt="Parapente">
          <h4>Unforgettable Paragliding</h4>
          <p>Embark on an exciting aerial adventure with a paragliding exprience in Lalla Takerkoust, flying over Mount
            Agargour and enjoying breathtaking and Lalla Takerkoust Dam,
            for unforgettable moments filled with adrenaline and fun .</p>
        </div>

        <div class="card">
          <img src="{{ asset('images/items_1/IMG_20221126_205957-scaled.jpg') }}" alt="Buggy & Quad">
          <h4>Buggy & Quad Tours</h4>
          <p>Quad tours in lalla takerkoust offer a unique adventure experience amidst nature. Visitors can explore the
            forests of lalla takerkoust, enjoy the breathtaking views of lalla takerkoust Dam, or discover the Agafay
            desert landscapes on quad bikes.
            These tours combine excitement with natural beauty, making it an unforgettable experience.</p>
        </div>

        <div class="card">
          <img src="{{ asset('images/items_1/OIP.webp') }}" alt="Camel Ride">
          <h4>Agafay Camel Rides</h4>
          <p>Enjoy an unforgettable experience with camels in the Agafay Desert , where you can immerse yourself in the
            tranquility of stunning landscapes
            and embark on a unique journey across the desert, guided by the majestic camel.</p>
        </div>
        <div class="card">
          <img src="{{ asset('images/items_1/IMG-20241231-WA0006.jpg') }}" alt="Tea Break Before Takeoff">
          <h4>Tea Break Before Takeoff</h4>
          <p>Before the adventure begins, we welcome you with a warm Moroccan tea break-time to relax, breathe, and
            enjoy the calm atmosphere. After that,
            we head off in a pleasant setting toward the mountain, with every step adding to the experience..</p>
        </div>
        <div class="card">
          <img src="{{ asset('images/items_1/photo_2025-08-31_06-53-49.jpg') }}" alt="Optional Lanch">
          <h4>Optional Lanch</h4>
          <p>For guests who want to add a Moroccan flavor to their day, we offer chicken tagine with fries or
            vegetables, meat tagine, oe traditional couscous. Salad Maroccan and dessert are included.
            The meal is not part of the package, but the taste is abosolutely worth it.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="activities">
    <h2> Discover Our Activities</h2>
    <ul>
      <li><b> <em>Preathtaking views</em> </b> : the scenery here will blow your mind - pure nature, stunning
        landscapes, and peaceful vibes that make you're flying over paradise.</li>
      <li><b> <em>Professional photography</em></b>:It's not just about the flight. we capture your experience with
        high-quality photos and videos so the memories stay with you forever.</li>
      <li><b><em>Warm Welcome</em></b>: From the the moment you arrive, you'll feel the good vibes-friendly faces, and a
        team that treats you like family.</li>
      <li><b><em>Most lmportantly, Safety</em></b>: Your Safety comes first. We use modern gear and our experienced
        pilots make sure you fly with total peace of mind.</li>
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
      <h2>Contact Us</h2>
      <form action="#" method="post">

        <div class="mb-4">
          <label class="form-label" for="name">Full Name:</label>
          <input class="form-control" type="text" id="name" placeholder="Your Full Name" name="name" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="phone">Phone Number:</label>
          <input class="form-control" type="phone" id="Number" placeholder="Your Phone Number" name="phone" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="date">Date of Visit:</label>
          <input class="form-control" type="date" id="date" name="date" required>
        </div>
        <div class="mb-4">
          <label class="form-label" for="message">Your Message:</label>
          <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="4"
            required></textarea>
        </div>

        <div class="submit-btn w-100">
          <button class="w-100 primary_button" type="submit">Send Message</button>
        </div>
      </form>

      <div class="whatsapp">
        <p>Or contact us directly on WhatsApp:</p>
        <a href="https://wa.me/212652645856" target="_blank">Message us on WhatsApp</a>
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