<div class="header-navbar">
    <div class="row">
       <div class="col-lg-2 col-6">
          <div class="logo-wrapper">
             <a href="{{route('front.index')}}"><img class="lazy" data-src="{{asset('assets/frontend/images/logo.svg')}}" alt=""></a>
          </div>
       </div>
       <div class="col-lg-10 col-6 text-right position-static">
          <ul class="main-menu" id="mainMenu">
                         <li><a href="{{ route('front.index') }}" class="text-uppercase">Home</a></li>
                         <li><a href="" class="text-uppercase">Schedule</a></li>
                         <li><a href="{{route('front.product')}}" class="text-uppercase">Merch</a></li>
          </ul>
          <div id="mobileMenu"></div>
       </div>
    </div>
 </div>