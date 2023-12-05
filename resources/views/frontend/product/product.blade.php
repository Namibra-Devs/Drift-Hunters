@extends("frontend.layout")


@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css')}}">
@endsection

@section('breadcrumb-link', __('Our Product'))

@section('content')

<!--    product section start    -->
<div class="product-area">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="shop-search mt-30">
                    <input type="text" placeholder="Search Keywords" class="input-search" name="search" value="{{request()->input('search') ? request()->input('search') : ''}}">
                    <i  class="fas fa-search input-search-btn cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-5 col-sm-7 order-2 order-lg-1">
                <div class="shop-sidebar">
                    <div class="shop-box shop-category">
                        <div class="sidebar-title">
                            <h4 class="title">{{__('Category')}}</h4>
                        </div>
                        <div class="category-item">
                            <ul>
                            <li class="{{ request()->input('category_id') == '' ? 'active-search' : '' }}" ><a data-href="0" class="category-id cursor-pointer">{{__('All')}}</a></li>
                                @foreach ($categories as $category)
                                <li class="{{ request()->input('category_id') == $category->id ? 'active-search' : '' }}"><a data-href="{{$category->id}}" class="category-id cursor-pointer">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="shop-box shop-tag mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">{{__('Populer Tags')}}</h4>
                        </div>
                        <div class="tag-item">
                            <ul>
                                <li class="{{ request()->input('tag') == '' ? 'active-search' : '' }}"><a data-href="" class="tag-id cursor-pointer">{{__('All')}}</a></li>
                            </ul>
                            <li class="{{ request()->input('tag') == 'red' ? 'active-search' : '' }}"><a data-href="red" class="tag-id cursor-pointer">Red</a></li>
                            <li class="{{ request()->input('tag') == 'black' ? 'active-search' : '' }}"><a data-href="black" class="tag-id cursor-pointer">Black</a></li>
                            <li class="{{ request()->input('tag') == 'white' ? 'active-search' : '' }}"><a data-href="white" class="tag-id cursor-pointer">white</a></li>
                            <li class="{{ request()->input('tag') == 'long-sleeve' ? 'active-search' : '' }}"><a data-href="long-sleeve" class="tag-id cursor-pointer">Long Sleeve</a></li>
                            <li class="{{ request()->input('tag') == 'short-sleeve' ? 'active-search' : '' }}"><a data-href="short-sleeve" class="tag-id cursor-pointer">Short Sleeve</a></li>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    @if($products->count() > 0)

                  @foreach ($products as $product)
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/product/featured/'.$product->feature_image)}}" alt="">
                            <ul>
                                <li><a href="{{route('front.product.details',$product->slug)}}" data-toggle="tooltip" data-placement="top" title="{{__('View Details')}}"><i class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content text-center">
                            <a class="mt-3" href="{{route('front.product.details',$product->slug)}}">
                                {{strlen($product->title) > 40 ? mb_substr($product->title,0,40,'utf-8') . '...' : $product->title}}
                            </a> <br>

                                <span>
                                    {{$product->current_price}}
                                    @if (!empty($product->previous_price))
                                        <del>  <span class="prepice"> {{$product->previous_price}}</span></del>
                                    @endif
                                </span>
                        </div>
                    </div>
                </div>
                  @endforeach
                  @else
                    <div class="col-12 text-center py-5 bg-light" style="margin-top: 30px;">
                        <h4 class="text-center">{{__('Product Not Found')}}</h4>
                    </div>
                  @endif
              </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="pagination-nav {{$products->count() > 6 ? 'mb-4' : ''}}">
                            {{ $products->appends(['minprice' => request()->input('minprice'), 'maxprice' => request()->input('maxprice'), 'category_id' => request()->input('category_id'), 'type' => request()->input('type'), 'tag' => request()->input('tag'), 'review' => request()->input('review')])->links() }}
                        </nav>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
<!--    product section ends    -->
@php
    $maxprice = App\Product::max('current_price');
    $minprice = 0;
@endphp

<form id="searchForm" class="d-none"  action="{{ route('front.product') }}" method="get">
    <input type="hidden" id="search" name="search" value="{{ !empty(request()->input('search')) ? request()->input('search') : '' }}">

    <input type="hidden" name="category_id" id="category_id" value="{{ !empty(request()->input('category_id')) ? request()->input('category_id') : null }}">
    <input type="hidden" name="type" id="type" value="{{ !empty(request()->input('type')) ? request()->input('type') : 'new' }}">
    <input type="hidden" name="tag" id="tag" value="{{ !empty(request()->input('tag')) ? request()->input('tag') : '' }}">

    <button id="search-button" type="submit"></button>
</form>




@endsection


@section('scripts')
<script src="{{asset('assets/frontend/js/jquery.ui.js')}}"></script>



<script>

    let maxprice = 0;
    let minprice = 0;
    let typeSort = '';
    let category = '';
    let tag = '';
    let review = '';
    let search = '';


    $(document).on('click','.filter-button',function(){
        let filterval = $('#amount').val();
        filterval = filterval.split('-');
        maxprice = filterval[1].replace('$','');
        minprice = filterval[0].replace('$','');
        maxprice = parseInt(maxprice);
        minprice = parseInt(minprice);
        $('#maxprice').val(maxprice);
        $('#minprice').val(minprice);
        $('#search-button').click();
    });

$(document).on('change','#type_sort',function(){
    typeSort = $(this).val();
    $('#type').val(typeSort);
    $('#search-button').click();
})
$(document).ready(function(){
    typeSort = $('#type_sort').val();
    $('#type').val(typeSort);
})

$(document).on('click','.category-id',function(e){
    e.preventDefault();
    category = '';
    if($(this).attr('data-href') != 0){
        category = $(this).attr('data-href');
    }
    $('#category_id').val(category);
    $('#search-button').click();
})
$(document).on('click','.tag-id',function(){
    tag = '';
    if($(this).attr('data-href') != 0){
        tag = $(this).attr('data-href');
    }
   $('#tag').val(tag);
   $('#search-button').click();
})

$(document).on('click','.review_val',function(){
    review = $(".review_val:checked").val();
    $('#review').val(review);
    $('#search-button').click();
})

$(document).on('keypress','.input-search',function(e){
    var key = e.which;
    if(key == 13)  // the enter key code
    {
        search = $('.input-search').val();
        $('#search').val(search);
        $('#search-button').click();
        return false;  
    }

})

</script>
@endsection
