<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Black Bike</title>

    {{-- bootstrap links --}}
        <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/flaticon.css') }}">

    <!-- slicknav css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/slicknav.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/common-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    <script src="{{ asset('assets/user/js/jquery-3.3.1.min.js') }}"></script>
          <!-- plugin css -->
          <link rel="stylesheet" href="{{asset('assets/frontend/css/plugin.min.css')}}">

    {{-- icons styles --}}
<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
        {{-- Main custom styles --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


        {{-- Styles for Product details sizes --}}
        <style>

        .product-sizes {
            padding-top: 30px
        }
        .checkbox-alphanumeric::after,
        .checkbox-alphanumeric::before {
            content: '';
            display: table;
        }

        .checkbox-alphanumeric::after {
            clear: both;
        }

        .checkbox-alphanumeric input {
            left: -9999px;
            position: absolute;
        }

        .checkbox-alphanumeric label {
            width: 2.25rem;
            height: 2.25rem;
            float: left;
            padding: 0.375rem 0;
            margin-right: 0.375rem;
            display: block;
            color: #818a91;
            font-size: 0.875rem;
            font-weight: 400;
            text-align: center;
            background: transparent;
            text-transform: uppercase;
            border: 1px solid #e6e6e6;
            border-radius: 2px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            transform: scale(0.95);
        }

        .checkbox-alphanumeric-circle label {
            border-radius: 100%;
        }

        .checkbox-alphanumeric label > img {
            max-width: 100%;
        }

        .checkbox-alphanumeric label:hover {
            cursor: pointer;
            border-color: #ff8000;
        }

        .checkbox-alphanumeric input:checked ~ label {
            transform: scale(1.1);
            border-color: red !important;
        }

        .checkbox-alphanumeric--style-1 label {
            width: auto;
            padding-left: 1rem;
            padding-right: 1rem;
            border-radius: 2px;
        }

        .d-table.checkbox-alphanumeric--style-1 {
            width: 100%;
        }

        .d-table.checkbox-alphanumeric--style-1 label {
            width: 100%;
        }
        </style>

</head>

<body>
    <!--   header area start   -->
    <div class="header-area header-absolute @yield('no-breadcrumb')">
        <div class="container">
            @includeIf('frontend.partials.navbar')
        </div>
    </div>

    @yield('content')


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
                            University of Ghana Sports Enclave <br>
                            Accra, Ghana.
                        </span>
                    </div>
                    <div>
                        <p><span class="event-time">4:00PM - Midnight</span> <br>
                            <span class="event-date">26th - 28th December, 2023</span>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>STAY CONNECTED</h3>
                    <div class="footer-socials">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
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

    <div id="cartIconWrapper">
        <a class="d-block" id="cartIcon" href="{{route('front.cart')}}">
            <div class="cart-length">
                <i class="fas fa-cart-plus"></i>
                <span class="length">{{cartLength()}} {{__('ITEMS')}}</span>
            </div>
            <div class="cart-total">
                {{cartTotal()}}
            </div>
        </a>
    </div>


    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('assets/user/js/owl.carousel.min.js') }}"></script>
    <!-- slicknav js -->
    <script src="{{ asset('assets/user/js/jquery.slicknav.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/user/js/slick.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/user/js/isotope.pkgd.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/user/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/user/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/lazyload.min.js') }}"></script>
    <!-- Summernote JS -->
    <script src="{{ asset('assets/admin/js/plugin/summernote/summernote-bs4.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        var imgupload = "{{ route('user.summernote.upload') }}";
    </script>

    <!-- custom js -->
    <script src="{{ asset('assets/user/js/custom.js') }}"></script>

    @yield('scripts')

    @if (session()->has('success'))
        <script>
            toastr["success"]("{{ __(session()->get('success')) }}");
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            toastr["error"]("{{ __(session('error')) }}");
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>
