<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style_home.css') }}">
    <title>BarFlaTo</title>
  </head>

<body>
<div class="container">
<div class="header">
  <a href="{{ route('home') }}" class="logo"><img class="logo" src="{{ asset('images/logo.png') }}"></a>

  <div class="header-right">
    <a href="{{ route('searchglobal') }}" class='search'><img src="{{ asset('images/loupe.png') }}">SEARCH</a>
  @auth
    <a href="{{ route('posts.create') }}">CREATE AN AD</a>
  @endauth
  @guest
    <a href="{{ route('login') }}">LOGIN</a>
  @endguest
  @auth
    <img class="avatarnav" src="{{ asset('images/avatars/' . __(auth()->user()->avatar)) }}">   
    <a href="{{ route('dashboard') }}">DASHBOARD</a>
  @endauth
  </div>
</div>

<section class="dropcollapse">
<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
    @auth
      <a href="{{ route('posts.create') }}">CREATE AN AD</a>
    @endauth
      <a href="{{ route('searchglobal') }}" class='search'><img src="{{ asset('images/loupe.png') }}">SEARCH</a>
    @guest
      <a href="{{ route('login') }}">LOGIN</a>
    @endguest
    @auth
      <a href="{{ route('dashboard') }}">DASHBOARD</a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        LOGOUT
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
    @endauth
  </div>
</div>
</section>
  

<div class="container">
    @yield('content')
</div>

</div>
</body>

<!-- Footer -->
<div class="foot">
<footer class="text-center text-white" style = "background-color: #f48301;">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="{{ asset('images/facebook.png') }}"></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="{{ asset('images/instagram.png') }}"></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="{{ asset('images/google-plus.png') }}"></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="{{ asset('images/twitter.png') }}"></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="{{ asset('images/linkedin.png') }}"></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="{{ asset('images/github.png') }}"></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">



          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">About Barflato</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Who are we ?</a>
            </li>
            <li>
              <a href="#!" class="text-white">Join us</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">OUR PRO SOLUTIONS</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Advertising</a>
            </li>
            <li>
              <a href="#!" class="text-white">Real estate professionals</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Legal information</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Terms of Service
                  </a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms of Sales</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Any questions ?</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Secure payment service</a>
            </li>
            <li>
              <a href="#!" class="text-white">Contact us</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Barflato.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
</div>
</html>


        