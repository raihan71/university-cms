<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title') - {{ env('APP_NAME', 'STIT Al Azami Cianjur') }}</title>
  <meta name="description" content="@yield('meta_description', 'Default site description')">
  <meta name="keywords" content="@yield('meta_keywords', 'keyword1, keyword2')">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <!-- Font-awesome CSS-->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <!-- Owl Caousel CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.theme.default.min.css') }}">
  <!-- Main Menu CSS -->
  <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
  <!-- nivo slider CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/slider/css/nivo-slider.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/slider/css/preview.css') }}" type="text/css" media="screen" />
  <!-- Datetime Picker Style CSS -->
  <link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.css') }}">
  <!-- Magic popup CSS -->
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <!-- Switch Style CSS -->
  <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
  <!-- ReImageGrid CSS -->
  <link rel="stylesheet" href="{{ asset('css/reImageGrid.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/main.min.css') }}?v={{ time() }}">
  <!-- Modernizr Js -->
  <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
  @stack('head')
</head>
<body>
  <div id="wrapper">
    <header role="banner">
      @include('layouts.topnav')
      @include('layouts.mobilenav')
    </header>

    <main id="main-content" tabindex="-1" role="main">
      @yield('content')
    </main>

    <footer role="contentinfo">
      <!-- Footer content -->
      <div class="footer-area-top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                      <div class="footer-box">
                        <a style="display: flex; align-items: center;" href="/"><img class="img-responsive" width="80" src="{{ $universities->logo ? asset('storage/' . $universities->logo) : asset('img/logo-footer.png') }}" alt="logo"><h3>{{ $universities->name }}</h3></a>
                          <div class="footer-about">
                              <p>{{ $universities->description }}</p>
                          </div>
                          <ul class="footer-social">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                      <div class="footer-box links-featured">
                          <h3>Featured Links</h3>
                          <ul class="featured-links">
                              <li>
                                  <ul>
                                      <li><a href="#">Graduation</a></li>
                                      <li><a href="#">Admissions</a></li>
                                      <li><a href="#">International</a></li>
                                      <li><a href="#">FAQs</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <ul>
                                      <li><a href="#">Courses</a></li>
                                      <li><a href="#">About Us</a></li>
                                      <li><a href="#">Book store</a></li>
                                      <li><a href="#">Alumni</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                      <div class="footer-box">
                          <h3>Information</h3>
                          <ul class="corporate-address">
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone(01)800433633.html"> {{ $universities->phone }} </a></li>
                              <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $universities->email }}</li>
                          </ul>
                          <div class="newsletter-area">
                              <h3>Newsletter</h3>
                              <div class="input-group stylish-input-group">
                                  <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                  <span class="input-group-addon">
                                          <button type="submit">
                                              <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                          </button>  
                                      </span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-area-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                      <p>&copy; 2025 {{ $universities->name }}. All Rights Reserved. &nbsp; Designed by<a target="_blank" href="http://raihan.my.id/"> Raihan71</a></p>
                  </div>
              </div>
          </div>
      </div>
    </footer>
  </div>

   <!-- jquery-->
  <script src="{{ asset('js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
  <!-- Plugins js -->
  <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- WOW JS -->
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <!-- Nivo slider js -->
  <script src="{{ asset('vendor/slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('vendor/slider/home.js') }}" type="text/javascript"></script>
  <!-- Owl Cauosel JS -->
  <script src="{{ asset('vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
  <!-- Meanmenu Js -->
  <script src="{{ asset('js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
  <!-- Srollup js -->
  <script src="{{ asset('js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
  <!-- jquery.counterup js -->
  <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <!-- Countdown js -->
  <script src="{{ asset('js/jquery.countdown.min.js') }}" type="text/javascript"></script>
  <!-- Isotope js -->
  <script src="{{ asset('js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
  <!-- Magic Popup js -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
  <!-- Gridrotator js -->
  <script src="{{ asset('js/jquery.gridrotator.js') }}" type="text/javascript"></script>
  <!-- Custom Js -->
  <script src="{{ asset('js/main.min.js') }}?v={{ time() }}" type="text/javascript"></script>
  @stack('scripts')
</body>
</html>
