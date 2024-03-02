@extends('frontend.layout')


@section('content')
{{-- hero section starts --}}
<section class="hero-section">
    <div class="hero-container">
    <div class="container">
        <div class="hero-content">
            <div class="text-right-datetime">
            <span class="time">09:00AM - 11:00PM</span> <br>
            <span class="date">24th DECEMBER, 2023</span>
            </div>
            <div class="hero_left-content">
                <h1>Where the Rubber Meets the Road</h1>
                <div class="row justify-between align-content-center">

                    <div class="header-get-tickets-btn col-lg-7 col-12">
                        <a href="#" class="get-ticket-btn">Get Your Tickets</a>
                    </div>
                    <div class="hero-text-content col-lg-5 col-12 text-white mt-lg-0 mt-5">
                    <p>Get ready to be swept away by the thunderous roar of engines, the smell of burning rubber, and the exhilarating spectacle of precision driving.</p>   
                        </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
{{-- hero section ends --}}


<section class="ticket-strock-section w-100">
    <div class="ticket-strocks">
    <img src="{{ asset('assets/frontend/images/strocks.svg') }}" alt="">        <!-- <div class="purple-text"> -->
            <!-- <marquee class="purple-text">TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS</marquee> -->
        <!-- </div> -->
        <!-- <div class="yellow-text"> -->
            <!-- <marquee class="yellow-text">TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS NOW AVAILABLE TICKETS</marquee> -->
        <!-- </div> -->
    </div>
</section>

{{-- feacturing section --}}
<section id="featuring-section" class="featuring-section">
    <div class="container">
        <div class="section-title text-center mb-5">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/frontend/images/flag.png') }}" alt="" class="py-3 featured-img">
                    <h2 class="text-white feature">WHAT TO EXPECT</h2>
                    <img src="{{ asset('assets/frontend/images/flag.png') }}" alt="" class="py-3  featured-img">
                </div>
            </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="row featuring-card">
                    <div class="col-auto">
                        <div class="feature-image">
                            <img src="{{ asset('assets/frontend/images/content1.png') }}" alt=""
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

            <div class="col-lg-4 mb-4 w-100">
                <div class="row featuring-card">
                    <div class="col-auto">
                        <div class="feature-image">
                            <img src="{{ asset('assets/frontend/images/content2.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col">
                        <div class="featuring_card-content content2">
                            <h3 class="text-center text-uppercase">Car Show Extravaganza</h3>
                            <p>As you wander through the Expo, take in the vibrant colors, the hum of conversations,
                                and the scent
                                of leather and engine oil in the air. It's not just a shopping excursion; it's a
                                sensory journey
                                that adds an extra layer of excitement to the overall experience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="row featuring-card">
                    <div class="col-auto">
                        <div class="feature-image">
                            <img src="{{ asset('assets/frontend/images/content3.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col">
                        <div class="featuring_card-content content3">
                            <h3 class="text-center">EPIC RIDES</h3>
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


<section class="drift-experience-section">
    <!-- <div class="container"> -->
        <div class="d-flex flex-column flex-lg-row experience-container">
           
            <div class="col-lg-8 col-12 experience-img p-0 m-0 h-100 w-100">
                <img src="{{ asset('assets/frontend/images/get-involved.png') }}" alt="" class="image-fluid w-100 experience-img">
            </div>
            <div class="col-lg-3 col-12 experience-text1 m-0 h-100">
                <h1 class="join-header">Join the Drift Revolution</h1>
                <p class="text-white">A movement that celebrates the spirit of freedom, innovation, and the pursuit of automotive excellence. Rev up your engines, feel the G-force, and be part of a journey where every turn is a story and every drift is a work of art.</p>
            </div>
        </div>
    <!-- </div> -->
</section>


{{-- tickets section --}}
<div class="tickets-section-title text-center">
    <h1>
        <span class="coupe">GRAB</span>
        <span class="your">YOUR</span>
        <span class="tickets">TICKETS!</span>
    </h1>
    <div class="grab-arrow">
        <img src="{{ asset('assets/frontend/images/grab-arrow-down.png') }}" alt="">
    </div>
</div>
<section class="tickets-section">
    <div class="container">
        <img src="{{ asset('assets/frontend/images/tire.png') }}" alt="" class="image-fluid tire-img">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="gold-ticket">
                    <div class="ticket-header">
                        <h3>GOLD</h3>
                        <h2>$100</h2>
                    </div>
                    <div class="description">
                      <ul>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Entry to all general areas.</li>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Participation in non-ticketed activities, and access to live entertainment.</li>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Access to live entertainment.</li>
                      </ul>
                    </div>
                    <div class="text-center">
                        <a href="{{route('front.event_details', 'gold')}}" class="get-ticket-btn w-100 btn">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="platinum-ticket">
                    <div class="ticket-header">
                        <h3>PLATINUM</h3>
                        <h2>$200</h2>
                    </div>
                    <div class="description">
                      <ul>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">VIP lounge access and priority seating.</li>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Complimentary refreshments and exclusive merchandise</li>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Special invitations to VIP events.</li>
                      </ul>
                    </div>
                    <div class="text-center">
                        <a href="{{route('front.event_details', 'platinum')}}" class="get-ticket-btn w-100 btn">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
            <img src="{{ asset('assets/frontend/images/tire.png') }}" alt="" class="image-fluid tire-img2">
                <div class="diamond-ticket">
                    <div class="ticket-header">
                        <h3>DIAMOND</h3>
                        <h2>$500</h2>
                    </div>
                    <div class="description">
                      <ul>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">VIP lounge access and priority seating.</li>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Complimentary refreshments and exclusive merchandise</li>
                        <li class="d-flex align-items-start"><img src="{{ asset('assets/frontend/images/check.svg') }}" alt="" class="mt-1 check">Special invitations to VIP events.</li>
                      </ul>
                    </div>
                    <div class="text-center">
                        <a href="{{route('front.event_details', 'diamond')}}" class="get-ticket-btn w-100 btn">BUY NOW</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Tickets section end --}}

<section class="celebrity-section w-100">
    <div class="celebrities">
        <img src="{{ asset('assets/frontend/images/celebrities.png') }}" alt="">
    </div>
        <div class="mb-4 celebrity-text">
            <h1>LIVE GUEST CELEBRITY <br> LINE UP</h1>
            <p>Get ready for an adrenaline-fueled journey! This annual extravaganza isn't just a gathering; it's
                a celebration of freedom, unity, and the roaring symphony of bikes echoing against the vibrant
                landscapes of Ghana.</p>
            <a href="#" class="get-ticket-btn">GET YOUR TICKET</a>
        </div>

        <div class="celebrity-images">
            <div><img src="{{ asset('assets/frontend/images/artiest1.png') }}" alt=""></div>
            <div><img src="{{ asset('assets/frontend/images/artiest2.png') }}" alt=""></div>
        </div>
</section>

<section class="drift-experience-section">
    <div class="container">
        <div class="d-flex flex-column-reverse flex-lg-row experience-container">
            <div class="col-lg-4 col-12 experience-text m-0 h-100">
                <h1>IMMERSE YOURSELF IN THE DRIFT EXPERIENCE</h1>
            </div>
            <div class="col-lg-8 col-12 experience-img p-0 m-0 h-100">
                <img src="{{ asset('assets/frontend/images/get-involved.png') }}" alt="" class="image-fluid w-100 experience-img">
            </div>
        </div>
    </div>
</section>

{{-- get involved section --}}

<section class="get-involved-section">
    <div class="container">
        <div class="section-title text-center">
            <img src="{{ asset('assets/frontend/images/playflag.png') }}" alt="">
            <h2>GET INVOLVED</h2>
            <img src="{{ asset('assets/frontend/images/playflag.png') }}" alt="">
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="row flex-column get-involved-card">
                    <div class="col">
                        <div>
                            <img src="{{ asset('assets/frontend/images/get-involved-img1.png') }}" alt=""
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
                            <div class="text-center buy-btn">
                                <a href="#" class="get-ticket-btn buy-now register-i-btn">REGISTER YOUR INTERESTS</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="row flex-column get-involved-card">
                    <div class="col-auto">
                        <div>
                            <img src="{{ asset('assets/frontend/images/get-involved-img2.png') }}" alt=""
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
                            <div class="text-center buy-btn">
                                <a href="#" class="get-ticket-btn buy-now">BUY NOW</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- products section --}}
<section class="products-section product-area">
    <div class="container">
        <div class="row justify-content-center align-items-center section-title text-center">
            <div class="text-white production-titles">
                <img src="{{ asset('assets/frontend/images/pngwing.png') }}" alt="" class="img-fluid">
                <div class="production-title">
                    <h1>DRIFT IN <span class="magenta">STYLE!</span></h1>
                    <h1 class="margin-left">SLIDE IN <span class="yellow">STYLE!</span></h1>
                </div>
            </div>

            <div>
                <img src="{{ asset('assets/frontend/images/rider.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row">
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <img class="lazy"
                                data-src="{{ asset('assets/frontend/images/product/featured/' . $product->feature_image) }}"
                                alt="">
                            <ul>
                                <li><a href="{{ route('front.product.details', $product->slug) }}"
                                        data-toggle="tooltip" data-placement="top"
                                        title="{{ __('View Details') }}"><i class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-3 product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('front.product.details', $product->slug) }}"><h3 class="text-left product-item-title">{{ strlen($product->title) > 40 ? mb_substr($product->title, 0, 40, 'utf-8') . '...' : $product->title }}</h3></a>
                                <h5 class="product-price">${{ $product->current_price }}
                                    @if (!empty($product->previous_price))
                                        <del> <span class="prepice"> {{ $product->previous_price }}</span></del>
                                    @endif</h5>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('front.product.details', $product->slug) }}" class="get-ticket-btn view-product">VIEW PRODUCT</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- sponsors section --}}
<section class="sponsors-section d-flex vw-100">
    <img src="{{ asset('assets/frontend/images/pngwing2.png') }}" alt="" class="img-fluid road-tire one">
    <div class="container">

        {{-- sponsors --}}
        <div class="row sponsors">
            <div class="col-3">
                <h2 class="racelords">RACELORDS</h2>
            </div>
            <div class="col-3">
                <h2 class="riftrofits">RITROFITS</h2>
            </div>
            <div class="col-3">
                <h2 class="racelords">RACELORDS</h2>
            </div>
            <div class="col-3">
                <h2 class="riftrofits">RITROFITS</h2>
            </div>
            <div class="col-3">
                <h2 class="racelords">RACELORDS</h2>
            </div>
            <div class="col-3">
                <h2 class="riftrofits">RITROFITS</h2>
            </div>
            <div class="col-3">
                <h2 class="racelords">RACELORDS</h2>
            </div>
            <div class="col-3">
                <h2 class="riftrofits">RITROFITS</h2>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/frontend/images/pngwing2.png') }}" alt="" class="road-tire two">
</section>
    
@endsection