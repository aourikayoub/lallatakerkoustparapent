<nav class="navbar bg-light w-100 z-3  navbar-expand-lg px-0 py-0 position-fixed d-flex flex-column" id="mainNav">


    <div class="top_bar w-100 container-fluid d-flex justify-content-between py-2 px-5">
        <div class="contact_info col-md-7 d-flex gap-2 justify-content-between">
            <span class="d-flex flex-row align-items-center gap-1"><i class="fa-solid fa-envelope"></i> <a
                    href="mailto:info@terkoustparapount.com">info@terkoustparapount.com</a></span>
            <span class="d-flex flex-row align-items-center gap-1"><i class="fa-solid fa-phone"></i> <a
                    href="tel:+212600000000">+212600000000</a></span>
            <span class="d-flex flex-row align-items-center gap-1"><i class="fa-solid fa-location-dot"></i> <a
                    href=""> 40000 terkouste 458 , Morocco</a></span>
        </div>

        <div class="social_links col-md-2 d-flex justify-content-evenly">
            <span><a href=""><i class="fa-brands fa-instagram"></i></a></span>
            <span><a href=""><i class="fa-brands fa-facebook"></i></a></span>
            <span><a href=""><i class="fa-brands fa-tiktok"></i></a></span>
        </div>
    </div>

    <div class="container-fluid py-2 px-5 ">
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
                    <a class="nav-link primary_links text-capitalize" aria-current="page" href="{{ route('HomePage') }}">
                        {{ __('navbar.nav_home') }}
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link primary_links text-capitalize" href="#about">
                        {{ __('navbar.nav_about') }}
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link primary_links text-capitalize" href="#why-us">
                        {{ __('navbar.nav_whyUs') }}
                    </a>
                </li>
                <li class="nav-item dropdown-hover mx-3">
                    <a class="nav-link primary_links text-capitalize" href="#activities">
                        {{ __('navbar.nav_activities') }}
                        <span>
                            <i class='bx bx-chevron-down'></i>
                        </span>
                    </a>

                    <ul class="dropdown-menu-custom">
                        <li><a href="{{ route('services.details', 'adrinaline-paragliding') }}">Paragliding</a></li>
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
            </ul>
            <div class="d-flex flex-row align-items-center ">
                <div class="nav-item dropdown-hover mx-3">
                    <a class="nav-link text-capitalize">
                        @if (app()->getLocale() == 'en')
                            <img draggable="false" width="25" src="{{ asset('images/icons/flags/uk.svg') }}"
                                alt="uk">
                        @elseif (app()->getLocale() == 'ar')
                            <img draggable="false" width="25" src="{{ asset('images/icons/flags/morocco.svg') }}"
                                alt="morocco">
                        @elseif (app()->getLocale() == 'fr')
                            <img draggable="false" width="25" src="{{ asset('images/icons/flags/france.svg') }}"
                                alt="france">
                        @elseif (app()->getLocale() == 'es')
                            <img draggable="false" width="25" src="{{ asset('images/icons/flags/spain.svg') }}"
                                alt="spain">
                        @elseif (app()->getLocale() == 'it')
                            <img draggable="false" width="25" src="{{ asset('images/icons/flags/italy.svg') }}"
                                alt="italy">
                        @endif
                        <span>
                            <i class='bx bx-chevron-down'></i>
                        </span>
                    </a>

                    <ul class="dropdown-menu-custom">
                        <li><a href="{{ route('langSwitcher', 'en') }}">
                                <img draggable="false" width="25" src="{{ asset('images/icons/flags/uk.svg') }}"
                                    alt="uk">
                                <span class="px-2">
                                    English
                                </span>
                            </a></li>
                        <li>
                            <a href="{{ route('langSwitcher', 'ar') }}">
                                <img draggable="false" width="25"
                                    src="{{ asset('images/icons/flags/morocco.svg') }}" alt="morocco">
                                <span class="px-2">
                                    العربية
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('langSwitcher', 'fr') }}">
                                <img draggable="false" width="25"
                                    src="{{ asset('images/icons/flags/france.svg') }}" alt="france">
                                <span class="px-2">
                                    Française
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('langSwitcher', 'es') }}">
                                <img draggable="false" width="25"
                                    src="{{ asset('images/icons/flags/spain.svg') }}" alt="spain">
                                <span class="px-2">
                                    Español
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('langSwitcher', 'it') }}">
                                <img draggable="false" width="25"
                                    src="{{ asset('images/icons/flags/italy.svg') }}" alt="italy">
                                <span class="px-2">
                                    italiana
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="primary_btn  primary_btn rounded" href="#">get started</a>
            </div>
        </div>

    </div>
</nav>
