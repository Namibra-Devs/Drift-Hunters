<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Bike</title>

    {{-- bootstrap links --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <!-- header starts -->
    <header class="container-fluid">
        <div class="row align-items-center nav-container">
            <div class="col-md-4">
                <a href="">
                    <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Logo" class="img-fluid">
                </a>
            </div>
            <nav class="col-md-8">
                <ul class="nav justify-content-end align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Merchs</a>
                    </li>
                    <li>
                        <a class="get-ticket-btn bg-white" href="">Get Your Tickets</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- haeader ends --}}

    {{-- hero section starts --}}
    <section class="hero-section"">
        <div class="container">
            <div class="row hero-content">
                <div class="col-md-6 hero_left-content">
                    <h1>Unity of Two <br> Wheels!</h1>
                    <a href="#" class="get-ticket-btn">Get Your Tickets</a>
                </div>
                <div class="col-md-6 hero_right-content">
                    <span class="time">9:00AM - 11:00AM</span> <br>
                    <span class="date">24TH NOVEMBER, 2023</span>
                    <p>Get ready for an adrenaline-fueled journey! This annual extravaganza isn't just a gathering; it's
                        a celebration of freedom, unity, and the roaring symphony of bikes echoing against the vibrant
                        landscapes of Ghana.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- hero section ends --}}

    <section class="ticket-strock-section">
        <div class="row ticket-strocks">
            <div class="purple-text">
                <h1>TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS</h1>
            </div>
            <div class="yellow-text">
                <h1>TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS</h1>
            </div>
        </div>
    </section>

    {{-- feacturing section --}}
    <section class="featuring-section">
        <div class="container">
            <div class="section-title text-center mb-4">
                <div class="row">
                    <div class="col-md-8 left">
                        <img src="{{ asset('assets/frontend/images/white-play.png') }}" alt="" class="py-3">
                        <h2 class="text-white">FEATURING</h2>
                    </div>
                    <div class="col-md-4 right">
                        <img src="{{ asset('assets/frontend/images/rider.png') }}" alt="" width="250px">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="row featuring-card">
                        <div class="col-auto">
                            <div class="feature-image">
                                <img src="{{ asset('assets/frontend/images/feature-img1.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col">
                            <div class="featuring_card-content content1">
                                <h3 class="text-center">VENDOR EXPO</h3>
                                <p>As you wander through the Expo, take in the vibrant colors, the hum of conversations,
                                    and the scent
                                    of leather and engine oil in the air. It's not just a shopping excursion; it's a
                                    sensory journey
                                    that adds an extra layer of excitement to the overall experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="row featuring-card">
                        <div class="col-auto">
                            <div class="feature-image">
                                <img src="{{ asset('assets/frontend/images/feature-img2.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col">
                            <div class="featuring_card-content content2">
                                <h3 class="text-center">CUSTOM BIKE SHOWS</h3>
                                <p>As you wander through the Expo, take in the vibrant colors, the hum of conversations,
                                    and the scent
                                    of leather and engine oil in the air. It's not just a shopping excursion; it's a
                                    sensory journey
                                    that adds an extra layer of excitement to the overall experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="row featuring-card">
                        <div class="col-auto">
                            <div class="feature-image">
                                <img src="{{ asset('assets/frontend/images/feature-img3.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col">
                            <div class="featuring_card-content content3">
                                <h3 class="text-center">VENDOR EXPO</h3>
                                <p>As you wander through the Expo, take in the vibrant colors, the hum of conversations,
                                    and the scent
                                    of leather and engine oil in the air. It's not just a shopping excursion; it's a
                                    sensory journey
                                    that adds an extra layer of excitement to the overall experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- featuring section ends --}}

    {{-- tickets section --}}
    <div class="tickets-section-title row align-items-center text-center">
        <h1>
            <span class="coupe">COUPE</span>
            <span class="your">YOUR</span>
            <span class="tickets">TICKETS!</span>
        </h1>
    </div>
    <section class="tickets-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gold-ticket">
                        <div class="ticket-header">
                            <h3>GOLD</h3>
                            <h2>$100</h2>
                        </div>
                        <div class="description">
                            <span> <i></i>Entry to all areas</span><br>
                            <span> <i></i>Participated in non tickets</span><br>
                            <span> <i></i>Access to live entertainment</span><br>
                            <span> <i></i>Activities and access to live entertainment</span>
                        </div>
                        <div class="text-center">
                            <a href="#" class="get-ticket-btn">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="platinum-ticket">
                        <div class="ticket-header">
                            <h3>PLATINUM</h3>
                            <h2>$200</h2>
                        </div>
                        <div class="description">
                            <span> <i></i>Entry to all areas</span><br>
                            <span> <i></i>Participated in non tickets</span><br>
                            <span> <i></i>Access to live entertainment</span><br>
                            <span> <i></i>Activities and access to live entertainment</span>
                        </div>
                        <div class="text-center">
                            <a href="#" class="get-ticket-btn">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="diamond-ticket">
                        <div class="ticket-header">
                            <h3>DIAMOND</h3>
                            <h2>$500</h2>
                        </div>
                        <div class="description">
                            <span> <i></i>Entry to all areas</span><br>
                            <span> <i></i>Participated in non tickets</span><br>
                            <span> <i></i>Access to live entertainment</span>bra
                            <span> <i></i>Activities and access to live entertainment</span>
                        </div>
                        <div class="text-center">
                            <a href="#" class="get-ticket-btn">BUY NOW</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Tickets section end --}}

    <section class="celebrity-section">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 celebrity-text">
                <h1>LIVE GUEST CELEBRITY <br> LINE UP</h1>
                <p>Get ready for an adrenaline-fueled journey! This annual extravaganza isn't just a gathering; it's
                    a celebration of freedom, unity, and the roaring symphony of bikes echoing against the vibrant
                    landscapes of Ghana.</p>
                <a href="#" class="get-ticket-btn">GET YOUR TICKET</a>
            </div>

            <div class="col-md-6 celebrity-images d-flex flex-wrap justify-content-end">
                <div><img src="{{ asset('assets/frontend/images/celeb-img7.png') }}" alt=""></div>
                <div><img src="{{ asset('assets/frontend/images/celeb-img6.png') }}" alt=""></div>
                <div><img src="{{ asset('assets/frontend/images/celeb-img3.png') }}" alt=""></div>
                <div><img src="{{ asset('assets/frontend/images/celeb-img4.png') }}" alt=""></div>
                <div><img src="{{ asset('assets/frontend/images/celeb-img5.png') }}" alt=""></div>
                <div><img src="{{ asset('assets/frontend/images/celeb-img6.png') }}" alt=""></div>
            </div>
        </div>
    </section>

    <section class="get-involved-section">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ asset('assets/frontend/images/wine-play.png') }}" alt="">
                <h2>GET INVOLVED</h2>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="row flex-column get-involved-card">
                        <div class="col">
                            <div>
                                <img src="{{ asset('assets/frontend/images/bike1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col">
                            <div class="get-involved_card-content content1">
                                <div>
                                    <h3 class="text-center">BECOME A SPONSOR</h3>
                                    <p> Become a sponsor and align your brand with the spirit of adventure, unity, and
                                        freedom that defines this extraordinary event.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="get-ticket-btn bg-black text-white">REGISTER YOUR INTERESTS</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="row flex-column get-involved-card">
                        <div class="col-auto">
                            <div>
                                <img src="{{ asset('assets/frontend/images/bike2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col">
                            <div class="get-involved_card-content content2">
                                <div>
                                    <h3 class="text-center">EXHIBIT LIVE</h3>
                                    <p>Join the vibrant Vendor Expo at Ghana Black Bike Week and put your products or
                                        services in front of a diverse and engaged audience.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="get-ticket-btn bg-black text-white">BUY NOW</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- products section --}}
    <section class="products-section">
        <div class="container">
            <div class="section-title text-center">
                <div>
                    <h1>BIKE IN <span>STYLE!</span></h1>
                    <h1>ROKE IN <span>STYLE</span></h1>
                </div>
    
                <div>
                    <img src="{{ asset('assets/frontend/images/rider.png') }}" alt="" class="img-fluid">
                </div>
            </div>
    
            <div class="row">
                {{-- products --}}
                <div class="col-md-4 mb-4">
                    {{-- product --}}
                    <div class="product-item">
                        <div class="product_image-wrap">
                           <img src="{{ asset('assets/frontend/images/product1.png') }}" alt="" class="img-fluid">
                        </div>
                        
                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-left">Bike Life Dream Chasers Short Sleeves</h5>
                                <h3 class="product-price">$50</h3>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="get-ticket-btn bg-white">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-4 mb-4">
                    {{-- product --}}
                    <div class="product-item">
                        <div class="product_image-wrap">
                           <img src="{{ asset('assets/frontend/images/product1.png') }}" alt="" class="img-fluid">
                        </div>
                        
                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-left">Bike Life Dream Chasers Short Sleeves</h5>
                                <h3 class="product-price">$50</h3>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="get-ticket-btn bg-white">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-4 mb-4">
                    {{-- product --}}
                    <div class="product-item">
                        <div class="product_image-wrap">
                           <img src="{{ asset('assets/frontend/images/product1.png') }}" alt="" class="img-fluid">
                        </div>
                        
                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-left">Bike Life Dream Chasers Short Sleeves</h5>
                                <h3 class="product-price">$50</h3>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="get-ticket-btn bg-white">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-4 mb-4">
                    {{-- product --}}
                    <div class="product-item">
                        <div class="product_image-wrap">
                           <img src="{{ asset('assets/frontend/images/product1.png') }}" alt="" class="img-fluid">
                        </div>
                        
                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-left">Bike Life Dream Chasers Short Sleeves</h5>
                                <h5 class="product-price">$50</h5>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="get-ticket-btn bg-white">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-4 mb-4">
                    {{-- product --}}
                    <div class="product-item">
                        <div class="product_image-wrap">
                           <img src="{{ asset('assets/frontend/images/product1.png') }}" alt="" class="img-fluid">
                        </div>
                        
                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-left">Bike Life Dream Chasers Short Sleeves</h5>
                                <h5 class="product-price">$50</h5>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="get-ticket-btn bg-white">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-4 mb-4">
                    {{-- product --}}
                    <div class="product-item">
                        <div class="product_image-wrap">
                           <img src="{{ asset('assets/frontend/images/product1.png') }}" alt="" class="img-fluid">
                        </div>
                        
                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-left">Bike Life Dream Chasers Short Sleeves</h5>
                                <h5 class="product-price">$50</h5>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="get-ticket-btn bg-white">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    

    {{-- sponsors section --}}
    <section class="sponsors-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>OUR SPONSORS</h2>
            </div>
    
            {{-- sponsors --}}
            <div class="row sponsors">
                <div class="col-md-3">
                    <h2>RACELORDS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RITROFITS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RACELORDS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RITROFITS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RACELORDS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RITROFITS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RACELORDS</h2>
                </div>
                <div class="col-md-3">
                    <h2>RITROFITS</h2>
                </div>
            </div>
        </div>
    </section>
    

    {{-- footer starts --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex flex-column justify-content-between">
                    <div>
                        <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                    </div>
                    <div class="footer-location">
                        <span>
                            Asamoah Gyan Centre, <br>
                            Kumasi, Ghana.
                        </span>
                    </div>
                    <div>
                        <p><span class="event-time">9:00AM - 10:00AM</span> <br>
                            <span class="event-date">11th November, 2023</span>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>STAY CONNECTED</h3>
                    <div>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>REGISTER FOR THE EVENT</h3>
                    <a href="#" class="get-ticket-btn bg-white">GET YOUR TICKETS</a>
                </div>
            </div>
            <hr>
            <div class="col-md-12 text-center" style="padding: 2rem 0">
                <p>&copy; Black Bike 2023</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
