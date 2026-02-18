<nav class="navbar navbar-expand-lg px-5 position-fixed" id="mainNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('HomePage') }}">
      <img class="logo-image" src="{{ asset('images/new logo2.png') }}" alt="logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto m-auto">
        <li class="nav-item mx-3">
          <a class="nav-link text-capitalize" aria-current="page" href="{{ route('HomePage') }}">
            {{ __('navbar.nav_home') }}
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-capitalize" href="#about">
            {{ __('navbar.nav_about') }}
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-capitalize" href="#why-us">
            {{ __('navbar.nav_whyUs') }}
          </a>
        </li>
        <li class="nav-item dropdown-hover mx-3">
          <a class="nav-link text-capitalize" href="#activities">
            {{ __('navbar.nav_activities') }}
            <span>
              <i class='bx bx-chevron-down'></i>
            </span>
          </a>

          <ul class="dropdown-menu-custom">
            <li><a href="#">Paragliding</a></li>
            <li><a href="{{ route('quad') }}">Quad</a></li>
            <li><a href="{{ route('camel') }}">Camel Ride</a></li>
            <li><a href="#">Hotel</a></li>
          </ul>
        </li>

        <li class="nav-item mx-3">
          <a class="nav-link text-capitalize" href="#contact-form">
            {{ __('navbar.nav_contact') }}
          </a>
        </li>
        <div>
          <li class="nav-item dropdown-hover mx-3">
            <a class="nav-link text-capitalize">
              @if (app()->getLocale() == 'en')
                <img draggable="false" width="25" src="{{ asset('images/icons/flags/uk.svg') }}" alt="uk">
              @elseif (app()->getLocale() == 'ar')
                <img draggable="false" width="25" src="{{ asset('images/icons/flags/morocco.svg') }}" alt="morocco">
              @elseif (app()->getLocale() == 'fr')
                <img draggable="false" width="25" src="{{ asset('images/icons/flags/france.svg') }}" alt="france">
              @elseif (app()->getLocale() == 'es')
                <img draggable="false" width="25" src="{{ asset('images/icons/flags/spain.svg') }}" alt="spain">
              @elseif (app()->getLocale() == 'it')
                <img draggable="false" width="25" src="{{ asset('images/icons/flags/italy.svg') }}" alt="italy">
              @endif
              <span>
                <i class='bx bx-chevron-down'></i>
              </span>
            </a>

            <ul class="dropdown-menu-custom">
              <li><a href="{{ route('langSwitcher', 'en')}}">
                  <img draggable="false" width="25" src="{{ asset('images/icons/flags/uk.svg') }}" alt="uk">
                  <span class="px-2">
                    English
                  </span>
                </a></li>
              <li>
                <a href="{{ route('langSwitcher', 'ar')}}">
                  <img draggable="false" width="25" src="{{ asset('images/icons/flags/morocco.svg') }}" alt="morocco">
                  <span class="px-2">
                    العربية
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('langSwitcher', 'fr')}}">
                  <img draggable="false" width="25" src="{{ asset('images/icons/flags/france.svg') }}" alt="france">
                  <span class="px-2">
                    Française
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('langSwitcher', 'es')}}">
                  <img draggable="false" width="25" src="{{ asset('images/icons/flags/spain.svg') }}" alt="spain">
                  <span class="px-2">
                    Español
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('langSwitcher', 'it')}}">
                  <img draggable="false" width="25" src="{{ asset('images/icons/flags/italy.svg') }}" alt="italy">
                  <span class="px-2">
                    italiana
                  </span>
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </div>
    <div class="">
      <a class="primary_btn  primary_btn rounded" href="#">{{ __('contact.get_started') }}</a>
    </div>
  </div>
  </div>
</nav>