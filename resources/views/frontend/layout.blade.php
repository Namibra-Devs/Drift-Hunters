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
    @includeIf('frontend.partials.navbar')
    {{-- haeader ends --}}

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