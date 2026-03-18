<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title') - {{ env('APP_NAME', 'STIT Al Azami Cianjur') }}</title>
  @include('layouts.meta-seo')
@if(View::hasSection('meta'))
    @stack('meta')
@else
<meta property="og:title" content="STIT Al Azami Cianjur">
<meta property="og:description" content="Sekolah Tinggi Ilmu Tarbiyah (STIT) Al-Azami Cianjur merupakan salah satu lembaga pendidikan yang berada dibawah naungan Yayasan Pendidikan Islam (YPI) Al-Azami Cianjur tersedia kuliah PAI dan PIAUD">
<meta property="og:image" content="https://v2.stitalazamicjr.ac.id/storage/logos/logo_2_69ba70e8a08e8.png">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
@endif
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ $universities->logo ? asset('storage/' . $universities->logo) : asset('img/logo-textprimary.png') }}">
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <!-- Font-awesome CSS-->
  <link rel="stylesheet" href="{{ asset('css/font-custom.css') }}">
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
  <link rel="stylesheet" href="{{ asset('main.min.css') }}?v={{ time() }}">
  <!-- Modernizr Js -->
  <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
  @stack('head')
</head>
<body>
  <div id="wrapper" style="min-height: 100vh; display: flex; flex-direction: column;">
    <header role="banner">
      @include('layouts.topnav')
      @include('layouts.mobilenav')
    </header>

    <main id="main-content" tabindex="-1" role="main" style="flex: 1;">
      @yield('content')
    </main>

    <footer role="contentinfo">
      <!-- Footer content -->
      <div class="footer-area-top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                      <div class="footer-box">
                        <a style="display: flex; align-items: center;" href="/"><img class="img-responsive" src="{{ $universities->logo_2 ? asset('storage/' . $universities->logo_2) : asset('img/logo-footer.png') }}" alt="{{ $universities->name }} Logo"></a>
                          <div class="footer-about">
                              <p>{{ $universities->description }}</p>
                          </div>
                          <ul class="footer-social">
                            @foreach ($socials as $item)
                              <li><a href="{{ $item->link }}" target="_blank"><i class="fa fa-{{ $item->name }}" aria-hidden="true"></i></a></li>
                            @endforeach
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                      <div class="footer-box links-featured">
                          <h3>Link Lainnya</h3>
                          <ul class="featured-links">
                              <li>
                                  <ul>
                                      <li><a href="{{ route('services.scholarships.show') }}">Beasiswa</a></li>
                                      <li><a href="{{ route('info.pmb.show', 'register') }}">Penerimaan</a></li>
                                      <li><a href="{{ url('/') }}">Internasional</a></li>
                                      <li><a href="{{ route('contact') }}">FAQs</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <ul>
                                      <li><a href="{{ route('academic.courses.index') }}">Program Studi</a></li>
                                      <li><a href="{{ route('profile.about', 'history') }}">Tentang Kami</a></li>
                                      <li><a href="{{ url('/') }}">UKM Program</a></li>
                                      <li><a href="{{ url('/') }}">Alumni</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                      <div class="footer-box">
                          <h3>Informasi</h3>
                          <ul class="corporate-address">
                              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone(01)800433633.html"> {{ $universities->phone }} </a></li>
                              <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $universities->email }}</li>
                          </ul>
                          <div class="newsletter-area">
                              <h3>Gabung Newsletter</h3>
                              <div class="input-group stylish-input-group">
                                  <input type="text" placeholder="Masukkan email Anda" class="form-control">
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
                      <p>&copy; 2025 {{ $universities->name }}. All Rights Reserved.</p>
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
  <script src="{{ asset('main.min.js') }}?v={{ time() }}" type="text/javascript"></script>
  @stack('scripts')
</body>
</html>
