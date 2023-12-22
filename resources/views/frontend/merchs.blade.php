@extends('frontend.layout')

@section('content')
    {{-- products section --}}
<section class="products-section">
    <div class="container">
        <div class="row justify-content-center align-items-center section-title text-center">
            <div class="text-white">
                <h1>BIKE IN <span class="magenta">STYLE!</span></h1>
                <h1 class="margin-left">ROKE IN <span class="yellow">STYLE</span></h1>
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
@endsection