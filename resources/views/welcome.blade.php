<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blaze | Bootstrap 5 SaaS Landing Page</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-beta2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>

  {{-- Preloader --}}
  <div class="preloader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container">
          <div class="spinner-rotator">
            <div class="spinner-left">
              <div class="spinner-circle"></div>
            </div>
            <div class="spinner-right">
              <div class="spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Navbar --}}
  <header class="header">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <div class="ms-auto">
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="page-scroll active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#features">Features</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#team">Team</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#testimonial">Testimonial</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                  </ul>
                </div>
              </div>
              <div class="header-btn">
                <a href="#download" class="main-btn btn-hover">Download</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  {{-- Hero Section --}}
  <section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-10">
          <div class="hero-content">
            <h1>You are using free lite version of <span>Blaze</span></h1>
            <p>Please, purchase full version of the template to get all sections, elements and permission to remove
              footer credits.</p>
            <a href="#buy" class="main-btn btn-hover">Buy Now</a>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 offset-xxl-1">
          <div class="hero-image text-center text-lg-start">
            <img src="{{ asset('assets/images/hero/hero-image.svg') }}" alt="Hero">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Brands Section --}}
  <section class="brands-section pt-120">
    <div class="container">
      <div class="row align-items-center">
        @foreach (['graygrids', 'lineicons', 'uideck', 'pagebulb'] as $brand)
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="single-brands">
        <img src="{{ asset('assets/images/brands/' . $brand . '.svg') }}" alt="{{ $brand }}">
        </div>
      </div>
    @endforeach
      </div>
    </div>
  </section>

  {{-- Placeholder for More Sections --}}
  {{-- You can paste sections like #features, #team, #testimonial, #pricing here --}}

  {{-- Footer --}}
  <footer class="footer">
    <div class="container text-center py-5">
      <p>Modern design <br> with Essential Features</p>
    </div>
  </footer>

  {{-- Scroll to top --}}
  <a href="#" class="scroll-top btn-hover"><i class="lni lni-chevron-up"></i></a>

  {{-- JS Template --}}
  <script src="{{ asset('assets/js/bootstrap-5.0.0-beta2.min.js') }}"></script>
  <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/polyfill.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  {{-- Init WOW Animation --}}
  <script> new WOW().init(); </script>


</body>

</html>