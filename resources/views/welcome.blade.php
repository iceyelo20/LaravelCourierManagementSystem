<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href={{ asset('admin/img/logo.svg') }}>

  <title>Courier and Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts -->
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles -->
  <link href="{{ asset('admin/css/landing-page.min.css') }}" rel="stylesheet">
  <livewire:styles/>
  <livewire:scripts/>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('admin/img/logo.svg') }}" width="30" height="30" class="d-inline-block align-top pr-2" alt="">
        COURIER SYSTEM
      </a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container mb-5">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Welcome to the TRACK AND TRACE. Check your shipment status below.</h1>
        </div>
        
        <livewire:welcome/>

      </div>
    </div>
  </header>

  <!-- Tracking Status Section-->

  <!-- About Page -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <h1 id="about">About Us</h1>
      <p>The expert team of messengers, couriers and delivery drivers at Reliable Couriers can deliver any package of any size throughout the Philippines. People placing an order with our team in can rest assured that their deliveries are not only made on time but arrive safely.</p>
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Secured Transactions</h3>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consectetur ea perspiciatis dolorem optio cupiditate officiis.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Fast Delivery</h3>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consectetur ea perspiciatis dolorem optio cupiditate officiis.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Customer Friendly</h3>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consectetur ea perspiciatis dolorem optio cupiditate officiis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#about">About</a>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Courier Tracking and Management System 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <livewire:scripts/>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
