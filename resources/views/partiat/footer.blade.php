<footer>
    <div class="footer-container">
      <div class="logo_footer_container">
        <img class="footer-logo" src="{{ asset('images/ChatGPT Image Feb 15, 2026, 01_00_44 AM.png') }}" alt="">
        <p class="footer-text">
{{__('footer.para_footer') }}
</p>

      </div>

      <div>
        <h4>{{ __('footer.title_link_footer') }}</h4>
        <ul class="Quick-links">
          <li><a class="quick-link" href="#about">{{ __('navbar.nav_about') }}</a></li>
          <li><a class="quick-link" href="#why-us"> {{ __('navbar.nav_whyUs') }}</a></li>
          <li><a class="quick-link" href="#activities">{{ __('navbar.nav_activities') }}</a></li>
          <li><a class="quick-link" href="#contact-form"> {{ __('navbar.nav_contact') }}</a></li>
        </ul>
      </div>

      <div>
        <h4>{{ __('footer.title_contact_footer') }}</h4>
        <p>{{ __('footer.phone') }}: <a class="phone" href="tel:+212652645856">+212 652 645 856</a></p>
        <p>{{ __('footer.email') }}: <a class="phone" href="mcmadlom53@gmail.com">contact@lallatakerkoust.com</a></p>
        <p>{{ __('footer.whatssap') }}: <a class="whatssap" href="https://wa.me/212652645856">{{ __('footer.Message_us') }}</a></p>
      </div>

      <div class="footer-bott">
        <h4>{{ __('footer.title_social-footer') }}</h4>
        <a class="folow1" href="https://facebook.com/ayoub.aourik.2025"><i class="fa-brands fa-facebook-f"></i></a>
        <a class="folow2"href="https://www.instagram.com/lalla_takerkoust_parapent_vip?igsh=bm14dmE0M2xsYXQ="><i class="fa-brands fa-instagram"
          ></i></a>
        <a class="folow3" href="#"><i class="fa-brands fa-tiktok"></i></a>


      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      &copy; {{ date(format: 'Y') }} {{ __('footer.footer_butom') }}
    </div>
  </footer>
