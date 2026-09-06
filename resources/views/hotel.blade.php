<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gite Aylal Chez Latifa | Hotel & Accommodation in Lalla Takerkoust</title>
    <meta name="description" content="Immerse yourself in authentic Berber hospitality at Gite Aylal Chez Latifa, located near the stunning Lalla Takerkoust lake and Agafay desert.">
    <meta name="keywords" content="lalla takerkoust hotel, gite aylal, marrakech accommodation, agafay hotel, berber hospitality">
    
    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Gite Aylal | Hotel in Lalla Takerkoust">
    <meta property="og:description" content="Authentic Berber hospitality near Lalla Takerkoust and Agafay desert.">
    <meta property="og:image" content="{{ asset('images/hotel/hero-bg.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="shortcut icon" href=" {{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- CSS and Fonts -->
    @vite(['resources/css/styles.css', 'resources/css/hotel.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <!-- Hero Section -->
    <header class="hotel-hero"
        style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/hotel/hero-bg.jpeg') }}');">
        <div
            class="container h-100 d-flex flex-column justify-content-center align-items-center text-center text-white">
            <p class="hero-subtitle mb-2"><b>LET US GUIDE YOUR NEXT</b></p>
            <h1 class="hero-title mb-5">ADVENTURE</h1>

            <!-- Floating Search Bar -->
            <div class="search-bar-container shadow-lg">
                <form action="#" class="row g-0 align-items-center bg-white search-form px-4 py-3">
                    <div class="col-12 col-lg-4 search-item">
                        <div class="d-flex align-items-center px-lg-3 py-2 py-lg-0 text-dark text-start">
                            <i class="fa-solid fa-location-dot me-3 text-primary"></i>
                            <div class="flex-grow-1">
                                <label class="small text-muted d-block">Location</label>
                                <select class="form-select border-0 p-0 fw-bold" style="box-shadow: none;">
                                    <option selected>Gite Aylal</option>
                                    <!-- <option value="1">Marrakech</option>
                                    <option value="2">Agafay</option> -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 search-item">
                        <div class="d-flex align-items-center px-lg-3 py-2 py-lg-0 text-dark text-start">
                            <i class="fa-solid fa-calendar-days me-3 text-primary"></i>
                            <div class="flex-grow-1">
                                <label class="small text-muted d-block">Check-in / Check-out</label>
                                <input type="text" class="form-control border-0 p-0 fw-bold" placeholder="Select Dates"
                                    style="box-shadow: none;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 search-item">
                        <div class="d-flex align-items-center px-lg-3 py-2 py-lg-0 text-dark text-start">
                            <i class="fa-solid fa-user me-3 text-primary"></i>
                            <div class="flex-grow-1">
                                <label class="small text-muted d-block">Guests</label>
                                <select class="form-select border-0 p-0 fw-bold" style="box-shadow: none;">
                                    <option selected>2 Adults, 1 Room</option>
                                    <option value="1">1 Adult, 1 Room</option>
                                    <option value="2">2 Adults, 2 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-1 text-center text-lg-end mt-3 mt-lg-0">
                        <button type="submit"
                            class="btn btn-primary d-inline-flex align-items-center justify-content-center search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Our Rooms Section -->
    <section id="about" class="py-5 bg-light">
        <h2>Gite Aylal Chez Latifa</h2>
        <h4>A peaceful refuge in the heart of the Berber world.</h4>
        <p>
            The Aylal Lodge is located about 48 km from Marrakech, nestled in an authentic Berber village. From
            Marrakech, heading towards Amizmiz, you just need to take the paved road on the left at the entrance of
            Lalla Takerkoust to reach it.

            Immerse yourself in a genuine Berber hospitality experience alongside Latifa, your hostess, who will welcome
            you warmly and introduce you to the beauty and serenity of the Moroccan Atlas.
        </p>
    </section>
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="fw-bold section-title">Our Available Rooms</h2>
                    <p class="text-muted">Discover our unique and comfortable rooms overlooking the lake.</p>
                </div>
                <div class="d-flex gap-3 hotel-filter-tabs">
                    <button class="active">Standard</button>
                    <button>Deluxe</button>
                    <button>Suite</button>
                    <button>All</button>
                </div>
            </div>

            <div class="row g-4">
                <!-- Room Card 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hotel-card border-0 rounded-4 overflow-hidden shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('images/bgs/header_bg.jpg') }}" class="w-100 hotel-img" alt="Room">
                            <span
                                class="badge bg-white text-dark position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 small">Available</span>
                        </div>
                        <div class="p-4 bg-white">
                            <h5 class="fw-bold mb-1">Standard Double Room</h5>
                            <p class="small text-muted mb-0"><i class="fa-solid fa-bed me-1"></i> 1 King Bed</p>
                        </div>
                    </div>
                </div>
                <!-- Room Card 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hotel-card border-0 rounded-4 overflow-hidden shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('images/bgs/about_image.jpg') }}" class="w-100 hotel-img" alt="Room">
                            <span
                                class="badge bg-white text-dark position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 small">Last
                                Booked</span>
                        </div>
                        <div class="p-4 bg-white">
                            <h5 class="fw-bold mb-1">Deluxe Lake View</h5>
                            <p class="small text-muted mb-0"><i class="fa-solid fa-bed me-1"></i> 1 King Bed, Balcony
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ... -->
                <div class="col-lg-3 col-md-6">
                    <div class="hotel-card border-0 rounded-4 overflow-hidden shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('images/bgs/bg-nav.jpg') }}" class="w-100 hotel-img" alt="Room">
                            <span
                                class="badge bg-white text-dark position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 small">Best
                                Seller</span>
                        </div>
                        <div class="p-4 bg-white">
                            <h5 class="fw-bold mb-1">Mountain Suite</h5>
                            <p class="small text-muted mb-0"><i class="fa-solid fa-bed me-1"></i> 2 King Beds, Terrace
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hotel-card border-0 rounded-4 overflow-hidden shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('images/bgs/header_bg.jpg') }}" class="w-100 hotel-img" alt="Room">
                            <span
                                class="badge bg-white text-dark position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 small">Limited</span>
                        </div>
                        <div class="p-4 bg-white">
                            <h5 class="fw-bold mb-1">Family Boutique Room</h5>
                            <p class="small text-muted mb-0"><i class="fa-solid fa-bed me-1"></i> 3 Beds, Garden View
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="py-5 bg-white">
        <div class="container text-center py-4">
            <h3 class="fw-bold mb-5">WHAT ROOM BEST SUITS YOU?</h3>
            <div class="row justify-content-center g-5">
                <div class="col-auto">
                    <div class="category-icon-box">
                        <i class="fa-solid fa-bed"></i>
                        <span>Single</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-icon-box">
                        <i class="fa-solid fa-people-group"></i>
                        <span>Double</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-icon-box">
                        <i class="fa-solid fa-crown"></i>
                        <span>Suite</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-icon-box">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span>Family</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Rooms -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Featured Rooms</h2>
                <p class="text-muted">A blend of luxury and comfort for your stay.</p>
            </div>

            <div class="row g-4">
                <!-- Deal 1 -->
                <div class="col-md-3">
                    <div class="deal-card position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('images/bgs/header_bg.jpg') }}" class="w-100 h-100 object-fit-cover"
                            alt="Deal">
                        <div class="deal-overlay p-4 d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-primary rounded-pill">Top Rated</span>
                                <button class="btn btn-light rounded-circle shadow-sm"
                                    style="width: 35px; height: 35px; padding: 0;"><i
                                        class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="text-white">
                                <h6 class="fw-bold mb-0">Atlas Sky Resort</h6>
                                <p class="small mb-1"><i class="fa-solid fa-location-dot me-1"></i> Imlil</p>
                                <div class="stars small text-warning mb-2">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat Deals -->
                <div class="col-md-3">
                    <div class="deal-card position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('images/bgs/about_image.jpg') }}" class="w-100 h-100 object-fit-cover"
                            alt="Deal">
                        <div class="deal-overlay p-4 d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-danger rounded-pill">-25% OFF</span>
                                <button class="btn btn-light rounded-circle shadow-sm"
                                    style="width: 35px; height: 35px; padding: 0;"><i
                                        class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="text-white">
                                <h6 class="fw-bold mb-0">Kasbah Beldi</h6>
                                <p class="small mb-1"><i class="fa-solid fa-location-dot me-1"></i> Takerkoust</p>
                                <div class="stars small text-warning mb-2">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="deal-card position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('images/bgs/bg-nav.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Deal">
                        <div class="deal-overlay p-4 d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-warning text-dark rounded-pill">Best Seller</span>
                                <button class="btn btn-light rounded-circle shadow-sm"
                                    style="width: 35px; height: 35px; padding: 0;"><i
                                        class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="text-white">
                                <h6 class="fw-bold mb-0">Scarabeo Camp</h6>
                                <p class="small mb-1"><i class="fa-solid fa-location-dot me-1"></i> Agafay</p>
                                <div class="stars small text-warning mb-2">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="deal-card position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('images/bgs/about_image.jpg') }}" class="w-100 h-100 object-fit-cover"
                            alt="Deal">
                        <div class="deal-overlay p-4 d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-success rounded-pill">New</span>
                                <button class="btn btn-light rounded-circle shadow-sm"
                                    style="width: 35px; height: 35px; padding: 0;"><i
                                        class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="text-white">
                                <h6 class="fw-bold mb-0">Villa Al Assala</h6>
                                <p class="small mb-1"><i class="fa-solid fa-location-dot me-1"></i> Palmeraie</p>
                                <div class="stars small text-warning mb-2">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="py-5 bg-white">
        <div class="container text-center py-4">
            <h5 class="text-muted text-uppercase letter-spacing-2 mb-4">Our Partners</h5>
                <div class="row align-items-center justify-content-center g-4 gray-scale-logos">
                <div class="col-auto"><span class="partner-name">HILTON</span></div>
                <div class="col-auto"><span class="partner-name">MARRIOTT</span></div>
                <div class="col-auto"><span class="partner-name">HYATT</span></div>
                <div class="col-auto"><span class="partner-name">RADISSON</span></div>
                <div class="col-auto"><span class="partner-name">FOUR SEASONS</span></div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>