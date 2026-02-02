
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
            <a class="nav-link text-capitalize" aria-current="page" href="{{ route('HomePage') }}">home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-capitalize" href="#about">about</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-capitalize" href="#why-us">Why Choose Us?</a>
          </li>
          <li class="nav-item mx-3">
          <a class="nav-link text-capitalize" href="#activities" >activities</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-capitalize" href="#contact-form">Contact Us</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-capitalize" href="{{ route('quad') }}">quad</a>
          </li>
           <li class="nav-item mx-3">
            <a class="nav-link text-capitalize" href="{{ route('camel') }}">camel</a>
          </li>
        </ul>

        <div class="">
          <a class="primary_btn  primary_btn rounded" href="#">get started</a>
        </div>
      </div>
    </div>
  </nav>

  