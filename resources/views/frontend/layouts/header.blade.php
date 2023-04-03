<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RealState</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  {{-- <link href={{url ("frontend/img/apple-touch-icon.png")}} rel="apple-touch-icon">  --}}

  <!-- GoogleFonts -->
  <link href=https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootst CSS File -->
  <link href={{url ("frontend/lib/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

  <!-- Library CSS Files -->
  <link href={{url ("frontend/lib/font-awesome/css/font-awesome.min.css")}} rel="stylesheet">
  {{-- <script src="https://kit.fontawesome.com/5a111cc6ee.js" crossorigin="anonymous"></script> --}}
  <link href={{url ("frontend/lib/animate/animate.min.css")}} rel="stylesheet">
  <link href={{url ("frontend/lib/ionicons/css/ionicons.min.css")}} rel="stylesheet">
  <link href={{url ("frontend/lib/owlcarousel/assets/owl.carousel.min.css")}} rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Main Stylesheet File -->
  <link href={{asset("frontend/css/style.css")}} rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @stack('styles')
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
{{--  <div class="box-collapse">--}}
{{--    <div class="title-box-d">--}}
{{--      <h3 class="title-d">Search Property</h3>--}}
{{--    </div>--}}
{{--    <span class="close-box-collapse right-boxed ion-ios-close"></span>--}}
{{--    <div class="box-collapse-wrap form">--}}
{{--      <form class="form-a">--}}
{{--        <div class="row">--}}
{{--          <div class="col-md-12 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="Type">Keyword</label>--}}
{{--              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="Type">Type</label>--}}
{{--              <select class="form-control form-control-lg form-control-a" id="Type">--}}
{{--                <option>All Type</option>--}}
{{--                <option>For Rent</option>--}}
{{--                <option>For Sale</option>--}}
{{--                <option>Open House</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="city">City</label>--}}
{{--              <select class="form-control form-control-lg form-control-a" id="city">--}}
{{--                <option>All City</option>--}}
{{--                <option>Alabama</option>--}}
{{--                <option>Arizona</option>--}}
{{--                <option>California</option>--}}
{{--                <option>Colorado</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="bedrooms">Bedrooms</label>--}}
{{--              <select class="form-control form-control-lg form-control-a" id="bedrooms">--}}
{{--                <option>Any</option>--}}
{{--                <option>01</option>--}}
{{--                <option>02</option>--}}
{{--                <option>03</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="garages">Garages</label>--}}
{{--              <select class="form-control form-control-lg form-control-a" id="garages">--}}
{{--                <option>Any</option>--}}
{{--                <option>01</option>--}}
{{--                <option>02</option>--}}
{{--                <option>03</option>--}}
{{--                <option>04</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="bathrooms">Bathrooms</label>--}}
{{--              <select class="form-control form-control-lg form-control-a" id="bathrooms">--}}
{{--                <option>Any</option>--}}
{{--                <option>01</option>--}}
{{--                <option>02</option>--}}
{{--                <option>03</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mb-2">--}}
{{--            <div class="form-group">--}}
{{--              <label for="price">Min Price</label>--}}
{{--              <select class="form-control form-control-lg form-control-a" id="price">--}}
{{--                <option>Unlimite</option>--}}
{{--                <option>$50,000</option>--}}
{{--                <option>$100,000</option>--}}
{{--                <option>$150,000</option>--}}
{{--                <option>$200,000</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-12">--}}
{{--            <button type="submit" class="btn btn-b">Search property</button>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </form>--}}
{{--    </div>--}}
{{--  </div>--}}
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{url('/')}}">Real<span class="color-b">State</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
            </li>
          <li class="nav-item">
            <a class="nav-link {{Route::current()->getName() == 'buy.index' ? 'active' : ''}}" href="{{route('buy.index')}}" id="buy">Buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::current()->getName() == 'listings.index' ? 'active' : ''}}" href="{{route('listings.index')}}" id="rent">Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::current()->getName() == 'sell.index' ? 'active' : ''}}" href="{{route('sell.index')}}">Sell</a>
          </li>
            @if(auth()->user())
          <li class="nav-item">
            <a class="nav-link {{Route::current()->getName() == 'manage-listings.index' ? 'active' : ''}}" href="{{route('manage-listings.index')}}">Manage Rentals</a>
          </li>
            <li class="nav-item">
                <a class="nav-link {{Route::current()->getName() == 'favorites.index' ? 'active' : ''}}" href="{{route('favorites.index')}}">Favorites</a>
            </li>
            @endif

           <li class="nav-item">
            <a class="nav-link" href="#">Account</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class=" btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class=" btn btn-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a  class="dropdown-item" href="{{route('manage-listings.index')}}">Your Rental Listings</a>
                    <a  class="dropdown-item" href="{{route('sell.index')}}">Your Sale Listings</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>

              </li>
          @endguest
      </ul>
      </div>

    </div>
  </nav>
  <!--/ Nav End /-->

    @yield('content')

{{--    @include('frontend.layouts.footer')--}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  <script>
    const links = document.querySelectorAll("nav a");
const currentPage = window.location.pathname;

links.forEach(link => {
    if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
    }
    });

  </script>
@stack('scripts')
