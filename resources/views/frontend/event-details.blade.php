@extends('frontend.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.nice-number.min.css') }}">
    <style>
        input {
            margin-bottom: 10px;
        }

        .anonymous_user {
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
        }

        .anonymous_user input {
            height: 14px;
            width: 14px;
            margin-right: 5px;
        }

        #stripe-section,
        #razorpay-section,
        #payumoney-section {
            margin-top: 10px;
        }

        .gateway-desc {
            background: #f1f1f1;
            font-size: 14px;
            padding: 10px 25px;
            margin-bottom: 20px;
            color: #212529;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
<div class="breadcrumb-area services service-bg" style="background-image: url('{{asset  ('assets/frontend/images/hero-bg.png')}}');background-size:cover;">
  <div class="container">
      <div class="breadcrumb-txt">
          <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10 text-white">
                  <h1>{{__('Ticket Purchase')}}</h1>
                  <ul class="breadcumb">
                      <li>{{__('Ticket Purchase')}}</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="breadcrumb-area-overlay"></div>
</div>
    <!--====== Start Event details Section ======-->
    <section class="event-details-section pt-130 pb-140">
        <div class="container">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $error }}</strong>
                    </div>
                @endforeach
            @endif
            <div class="row">
                <div class="col-lg-6">
                    @if ($event->image != 'null')
                        <?php $images = json_decode($event->image, true);
                        ?>
                        <div class="event-big-slide mb-30">
                            <div class="product-img">
                                <a href="{{ asset('/assets/frontend/images/events/sliders/' . $images[0]) }}"
                                    class="image-popup">
                                    <img src="{{ asset('/assets/frontend/images/events/sliders/' . $images[0]) }}"
                                        class="img-fluid" alt="" width="700" height="500">
                                </a>
                            </div>
                        </div>
                        {{-- <div class="event-thumb-slide">
                            <div class="product-img">
                                <img src="{{ asset('/assets/frontend/images/events/sliders/' . $images[0]) }}"
                                    class="img-fluid" alt="">
                            </div>
                        </div> --}}
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="event-details-wrapper">
                        <div class="event-content">
                            <h3>{{ convertUtf8($event->title) }}</h3>
                            <div class="event-meta mb-2">
                                <span class="date"><i
                                        class="far fa-calendar-alt"></i>{{ date_format(date_create($event->date), 'M d,Y') }}</span>
                                @if (!empty($event->venue_location))
                                    <span class="location"><i
                                            class="fas fa-map-marker-alt"></i>{{ $event->venue_location }}</span>
                                @endif
                            </div>
                            <p class="price base-color">
                                {{ $event->cost }}
                                / {{ __('per ticket') }}</p>
                            <div id="purchase-section" style="display: block">
                                <div class="time-count">
                                    <div id="simple_timer"></div>
                                </div>
                                <p>{!! replaceBaseUrl(convertUtf8($event->content)) !!}</p>
                                <div class="info-box mb-15">
                                    <a class="base-color" href="">{{ $event->eventCategories->name }}</a>
                                    <p>{{ $event->venue_location }}</p>
                                </div>

                                @if ($event->available_tickets > 0)
                                    <ul class="mb-20" style="display: flex">
                                        <li><input type="number" id="tickets" min="1"
                                                max="{{ $event->available_tickets }}">
                                        </li>
                                        <li><input type="hidden" id="cost" value="{{ $event->cost }}"></li>
                                    </ul>
                                    <a href="javascript:void(0)" class="main-btn"
                                        id="addToCart">{{ __('Add To Cart') }}</a>
                                @else
                                    <div>{{ __('No tickets are available') }}</div>
                                @endif
                            </div>
                            @php
                                if (Auth::check()) {
                                    $name = Auth::user()->fname;
                                    $email = Auth::user()->email;
                                    $phone = Auth::user()->number;
                                } else {
                                    $name = '';
                                    $email = '';
                                    $phone = '';
                                }
                            @endphp

                            <div id="invoice-section" style="display: none; justify-content: center; text-align: center">
                                @if (!Auth::check())
                                    <div class="alert alert-warning">
                                        {{ __('You are now purchasing ticket as a guest. If you want to login before purchasing, then please') }}
                                        <a
                                            href="{{ route('user.login', ['redirected' => 'event']) }}">{{ __('Click Here') }}</a>
                                    </div>
                                @endif
                                <form action="{{ route('front.event.payment') }}" method="POST"
                                    enctype="multipart/form-data" id="eventForm">
                                    @csrf
                                    <hr>
                                    <h4>{{ __('Invoice') }}</h4>
                                    <hr>
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    <input type="hidden" name="event_slug" value="{{ $event->slug }}">
                                    <div>{{ __('No. Of Tickets') }}: <span id="quantity">5</span></div>
                                    <input type="hidden" name="ticket_quantity" id="ticket-quantity" value="">
                                    <div>{{ __('Per Ticket Cost') }}:
                                    </div>
                                    <input type="hidden" name="ticket_cost" id="ticket-cost" value="{{ $event->cost }}">
                                    <div>{{ __('Total Cost') }}:
                                        <span><span id="total">100</span></span>
                                    </div>
                                    <input type="hidden" name="total_cost" id="total-cost" value="">
                                    <br>
                                    <div id="donation-info-section">
                                        <input type="text" class="form_control" name="name"
                                            placeholder="{{ __('Enter your name') }}" value="{{ $name }}">
                                        <input type="email" class="form_control" name="email"
                                            placeholder="{{ __('Enter your email address') }}"
                                            value="{{ $email }}">
                                        <input type="text" class="form_control" name="phone"
                                            placeholder="{{ __('Enter your phone') }}" value="{{ $phone }}">
                                    </div>
                                    <div class="form_group" style="display: flex; flex-direction: column; margin-top: 20px">
                                        <select name="payment_method" id="payment-method">
                                            <option value="0">{{ __('Choose an option') }}</option>
                                            @foreach ($payment_gateways as $payment_gateway)
                                                <option value="{{ $payment_gateway->name }}">{{ $payment_gateway->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div id="stripe-section" style="display: none">
                                        <div id="stripe-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors -->
                                        <div id="stripe-errors" class="pb-2 text-danger text-left" role="alert"></div>
                                    </div>
                                    <div id="razorpay-section" style="display: none">
                                        <input type="text" class="form_control" name="razorpay_phone"
                                            placeholder="{{ __('Enter your phone') }}">
                                        <input type="text" class="form_control" name="razorpay_address"
                                            placeholder="{{ __('Enter your address') }}">
                                    </div>
                                    <div id="payumoney-section" style="display: none">
                                        <input type="text" class="form_control" name="payumoney_first_name"
                                            placeholder="{{ __('First Name') }}">
                                        <input type="text" class="form_control" name="payumoney_last_name"
                                            placeholder="{{ __('Last Name') }}">
                                        <input type="text" class="form_control" name="payumoney_phone"
                                            placeholder="{{ __('Phone') }}">
                                    </div>
                                    <div id="instructions">

                                    </div>
                                    <input type="hidden" name="is_receipt" value="0" id="is_receipt">
                                    <div class="form_group"
                                        style="display: flex; flex-direction: row;justify-content: space-between; text-align: center;margin-top: 20px;">
                                        <a href="javascript:void(0)" class="main-btn" id="cancel"
                                            style="height: 45px;justify-content: center;text-align: center;">{{ __('Cancel') }}</a>
                                        <button class="main-btn" type="submit"
                                            style="height: 45px;justify-content: center;text-align: center;padding-top: 0;padding-bottom: 0;">
                                            {{ __('Confirm') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="discription-area mt-80 mb-50">
                        <div class="discription-tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab"
                                        href="#description">{{ __('Details') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="description" class="tab-pane active">
                                <div class="event-content-box">
                                    <div class="info">
                                        <span>{{ __('Start') }}:</span>
                                        <p>{{ date_format(date_create($event->date), 'M d,Y') }}
                                            @ {{ date_format(date_create($event->time), 'h:i:sa') }}</p>
                                    </div>
                                    <div class="info">
                                        <span>{{ __('Cost') }}:</span>
                                        <p>
                                            {{ $event->cost }}
                                        </p>
                                    </div>
                                    <div class="info">
                                        <span>{{ __('Event Categories') }}:</span>
                                        <p>{{ convertUtf8($event->eventCategories->name) }}, {{ __('Event') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Event details Section ======-->
@endsection
@section('scripts')
    <script>
        let stripe_key = "{{ $stripe_key }}";
    </script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('assets/frontend/js/event-checkout-stripe.js') }}"></script>

    <script src="{{ asset('/assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/assets/frontend/js/jquery.nice-number.min.js') }}"></script>
    <script src="{{ asset('/assets/frontend/js/jquery.easypiechart.min.js') }}"></script>
    {{-- <script src="{{asset('/assets/frontend/js/jquery.syotimer.min.js')}}"></script> --}}
    <script src="{{ asset('/assets/frontend/js/event.js') }}"></script>
    <script type="text/javascript">
        const d = new Date('{!! $event->date !!}');
        const ye = parseInt(new Intl.DateTimeFormat('en', {
            year: 'numeric'
        }).format(d));
        const mo = parseInt(new Intl.DateTimeFormat('en', {
            month: 'numeric'
        }).format(d));
        const da = parseInt(new Intl.DateTimeFormat('en', {
            day: '2-digit'
        }).format(d));
        const t = ' {!! $event->time !!}';
        const time = t.split(":");
        const hr = parseInt(time[0]);
        const min = parseInt(time[1]);
        $('#simple_timer').syotimer({
            year: ye,
            month: mo,
            day: da,
            hour: hr,
            minute: min,
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#addToCart").on('click', function() {
                const quantity = $("#tickets").val();
                const cost = $("#cost").val();
                const total = quantity * cost;
                $("#quantity").html(`<span>${quantity}<span/>`);
                $("#ticket-quantity").val(quantity);
                $("#total").html(`<span>${total}<span/>`);
                $("#total-cost").val(total);
                $("#purchase-section").css('display', 'none');
                $("#invoice-section").css('display', 'block');
            })
            $("#cancel").on('click', function() {
                $("#purchase-section").css('display', 'block');
                $("#invoice-section").css('display', 'none');
            });
            $("#payment-method").change(function() {
                var selectedPaymentMethod = $(this).children("option:selected").val();

                let data = [];
                offline.map(({
                    id,
                    name
                }) => {
                    data.push(name);
                });
                if (selectedPaymentMethod == "Stripe") {
                    $('#razorpay-section').fadeOut();
                    $('#payumoney-section').fadeOut();
                    $('#stripe-section').fadeIn(5);
                } else if (selectedPaymentMethod == "Razorpay") {
                    $('#stripe-section').fadeOut();
                    $('#payumoney-section').fadeOut();
                    $('#razorpay-section').fadeIn(5);
                } else if (selectedPaymentMethod == "PayUmoney") {
                    $('#stripe-section').fadeOut();
                    $('#razorpay-section').fadeOut();
                    $('#payumoney-section').fadeIn(5);
                } else if (data.indexOf(selectedPaymentMethod) !== -1) {
                    $('#stripe-section').fadeOut();
                    $('#razorpay-section').fadeOut();
                    $('#payumoney-section').fadeOut();
                    //ajax call for instructions
                    let name = selectedPaymentMethod;
                    let formData = new FormData();
                    formData.append('name', name);
                    $.ajax({
                        url: '{{ route('front.payment.instructions') }}',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        contentType: false,
                        processData: false,
                        cache: false,
                        data: formData,
                        success: function(data) {
                            console.log(data);
                            let instruction = $("#instructions");
                            let instructions =
                                `<div class="gateway-desc">${data.instructions}</div>`;
                            let description =
                                `<div class="gateway-desc"><p>${data.description}</p></div>`;
                            let receipt = `<div class="form-element mb-2">
                                        <label>Receipt  <span>**</span> </label>
                                        <input type="file" name="receipt" value="" class="file-input">
                                        <p class="mb-0 text-warning">** Receipt image must be .jpg / .jpeg / .png</p>
                                    </div>`;
                            if (data.is_receipt === 1) {
                                $("#is_receipt").val(1);
                                let finalInstruction = instructions + description + receipt;
                                instruction.html(finalInstruction);
                            } else {
                                $("#is_receipt").val(0);
                                let finalInstruction = instructions + description;
                                instruction.html(finalInstruction);
                            }
                            $('#instructions').fadeIn();
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                } else {
                    $('#stripe-section').fadeOut();
                    $('#razorpay-section').fadeOut();
                    $('#payumoney-section').fadeOut();
                    $('#instructions').fadeOut();
                }
            });
        });
    </script>
@endsection
