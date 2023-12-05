@extends("frontend.layout")

@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
@endsection

@section('content')

<div class="breadcrumb-area services service-bg" style="background-image: url('{{asset  ('assets/frontend/images/hero-bg.png')}}');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10 text-white">
                    <h1>{{__('Merch')}}</h1>
                    <ul class="breadcumb">
                        <li>{{__('Merch')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"></div>
</div>


<!--====== PRODUCT DETAILS PART START ======-->

<div class="product-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-item-slide ">
                    @foreach ($product->product_images as $image)
                    <div class="item pt-30">
                        <a class="image-popup" href="{{asset('assets/frontend/images/product/sliders/'.$image->image)}}"><img src="{{asset('assets/frontend/images/product/sliders/'.$image->image)}}" alt=""></a>
                    </div>
                    @endforeach
                </div>
                <div class="product-details-slide-item mt-30">
                    <ul class="d-flex">
                        @foreach ($product->product_images as $image)
                        <li><img src="{{asset('assets/frontend/images/product/sliders/'.$image->image)}}" alt=""></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-content ml-60 mt-30">
                    <div class="product-details-content-item">
                        <h4 class="title pb-0">{{convertUtf8($product->title)}}</h4>
                        <div class="d-flex justify-content-between">
                                @if ($product->stock > 0)
                                    <h4 class="badge badge-success">
                                        <i class="far fa-check-circle"></i> {{__('In Stock')}}
                                    </h4>
                                @else
                                    <h4 class="badge badge-danger">
                                        <i class="far fa-times-circle"></i> {{__('Out of Stock')}}
                                    </h4>
                                @endif
                        </div>

                            <span>{{$product->current_price}}
                            @if (!empty($product->previous_price))
                                <del>  <span class="prepice"> {{$product->previous_price}}</span></del>
                            @endif
                            </span>

                        @if (!empty($product->summary))
                        <p>{{convertUtf8($product->summary)}}</p>
                        @endif
                    </div>

                    <div class="product-btns d-block d-sm-flex align-items-center mt-40">
                        <div class="product-quantity  d-flex" id="quantity">
                            <button type="button" id="sub" class="sub subclick">-</button>
                            <input type="text" class="cart-amount" id="1" value="1" />
                            <button type="button" id="add" class="add addclick">+</button>
                        </div>
                    </div>

                        <div class="actions">
                            <a class="main-btn cart-btn cart-link d-inline-block" data-href="{{route('add.cart',$product->id)}}">{{__('Add To Cart')}}</a>
                            <form class="d-inline-block ml-2" method="GET" action="{{route('front.product.checkout',$product->slug)}}">
                                <input type="hidden" value="" name="qty" id="order_click_with_qty">
                                <button type="submit" class="main-btn checkout-btn" >{{__('Order Now')}}</button>
                            </form>
                        </div>
                    <div class="product-details-tags">
                        <ul>
                            @if(!empty($product->sku))
                            <li><span>{{__('SKU')}}:</span> {{$product->sku}} </li>
                            @endif
                            @if(!empty($product->category))
                            <li><span>{{__('Category')}}:</span> <a href="{{route('front.product').'?category_id='.$product->category_id}}">{{$product->category ? convertUtf8($product->category->name) : ''}}</a> </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRODUCT DETAILS PART ENDS ======-->

<!--====== SHOP TAB PART START ======-->

<div class="shop-tab-area" style="padding-bottom:120px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div class="shop-tab-area">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{__('Description')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                {!! replaceBaseUrl(convertUtf8($product->description)) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== SHOP TAB PART ENDS ======-->
@endsection

@section('scripts')

<script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/product.js')}}"></script>
<script src="{{asset('assets/frontend/js/cart.js')}}"></script>
<script>
    $('.image-popup').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });

</script>

<script>
    $(document).on('click','.review-value li a',function(){
        $('.review-value li a i').removeClass('text-primary');
        let reviewValue = $(this).attr('data-href');
         parentClass = `review-${reviewValue}`;
        $('.'+parentClass+ ' li a i').addClass('text-primary');
        $('#reviewValue').val(reviewValue);
    })
</script>

@endsection
