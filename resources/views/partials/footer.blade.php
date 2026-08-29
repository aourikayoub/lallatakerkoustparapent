<footer class="modern-footer pt-5 pb-3">
    <div class="container">
      <div class="row align-items-center align-items-md-start text-center text-md-start">
        <!-- Logo and About -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="logo_footer_container mb-3">
            <img class="footer-logo" src="{{ asset('images/ChatGPT Image Feb 15, 2026, 01_00_44 AM.png') }}" alt="Lalla Takerkoust Parapente Logo">
          </div>
          <p class="footer-text px-3 px-md-0">{{ __('footer.description') }}</p>
          <div class="footer-socials mt-3">
            <a class="social-icon" href="https://wa.me/212652645856" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a class="social-icon" href="https://facebook.com/ayoub.aourik.2025" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="social-icon" href="https://www.instagram.com/lalla_takerkoust_parapent_vip?igsh=bm14dmE0M2xsYXQ=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-title">{{ __('footer.quick_links') }}</h4>
          <ul class="footer-links list-unstyled m-0 p-0">
            <li><a class="footer-link" href="#about"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('navbar.nav_about') }}</a></li>
            <li><a class="footer-link" href="#why-us"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.why_choose_us') }}</a></li>
            <li><a class="footer-link" href="#activities"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.our_activities') }}</a></li>
            <li><a class="footer-link" href="#contact-form"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.contact') }}</a></li>
          </ul>
        </div>

        <!-- Policies Links -->
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-title">{{ __('footer.policies') }}</h4>
          <ul class="footer-links list-unstyled m-0 p-0">
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.privacy_policy') }}</a></li>
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.terms_of_service') }}</a></li>
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.refund_policy') }}</a></li>
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.cookies_policy') }}</a></li>
          </ul>
        </div>

        <!-- Important Links -->
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-title">{{ __('footer.important') }}</h4>
          <ul class="footer-links list-unstyled m-0 p-0">
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.our_story') }}</a></li>
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.faq') }}</a></li>
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.careers') }}</a></li>
            <li><a class="footer-link" href="#"><i class="fa-solid fa-chevron-right me-2" style="font-size:0.8rem"></i>{{ __('footer.support') }}</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-3 col-md-6 mb-4">
          <h4 class="footer-title">{{ __('footer.contact_info') }}</h4>
          <ul class="footer-links list-unstyled m-0 p-0">
            <li><a class="footer-link" href="tel:+212652645856"><i class="fa-solid fa-phone me-2"></i>+212 652 645 856</a></li>
            <li><a class="footer-link" href="mailto:info@lallaterkoustparapent.com"><i class="fa-regular fa-envelope me-2"></i>info@lallaterkoustparapent.com</a></li>
            <li><a class="footer-link" href="https://maps.google.com/?q=Lalla+Takerkoust,+Marrakech,+Morocco" target="_blank"><i class="fa-solid fa-location-dot me-2"></i>{{ __('footer.location') }}</a></li>
            <li><span class="footer-link" style="cursor: default;"><i class="fa-solid fa-clock me-2"></i>{{ __('footer.opening_hours') }}</span></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom-bar mt-4 pt-4 border-top border-secondary">
      <div class="container text-center">
         &copy; {{ date('Y') }} <b>Ayoub AouRik</b> - {{ __('footer.all_rights_reserved') }}
      </div>
    </div>
</footer>
