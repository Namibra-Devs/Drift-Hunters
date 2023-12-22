<div class="header-navbar">
    <div class="row">
       <div class="col-lg-2 col-6">
          <div class="logo-wrapper">
             <a href="{{route('front.index')}}"><img class="lazy" src="{{asset('assets/frontend/images/logo.png')}}" alt=""></a>
          </div>
       </div>
       <div class="col-lg-10 col-6 text-right position-static">
          <ul class="main-menu" id="mainMenu">
            <li><a href="{{ route('user.login') }}" class="text-white">Login</a></li>
            <li><a href="#featuring-section" class="text-white">Schedule</a></li>
            <li><a href="{{route('front.product') }}" class="text-white">Merchs</a></li>
            <li><a href="" class="get-ticket-btn text-black">Get Your Tickets</a></li>
          </ul>
          <div id="mobileMenu"></div>
       </div>
    </div>
 </div>