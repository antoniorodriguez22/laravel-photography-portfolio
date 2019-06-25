<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Keyler Photography || @yield('title')</title>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


{{-- styles --}}
  <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/about.css') }}" rel="stylesheet">
  <link href="{{ asset('css/contact.css') }}" rel="stylesheet">



  </head>

  <body style="background-color: black;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <!-- Navbar content -->
  <a class="navbar-brand" href="/">Keyler Photography</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{request()->routeIs('home') ? 'active' : ''}}">
            <a class="nav-link" href="/">Mi Trabajo</a>
          </li>
          <li class="nav-item {{request()->routeIs('about') ? 'active' : ''}}">
            <a class="nav-link" href="/about">Acerca de mi</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trabajos por a&ntilde;o
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">2017</a>
            <a class="dropdown-item" href="#">2018</a>
            <a class="dropdown-item" href="#">2019</a>
        </div>
        </li> --}}
          <li class="nav-item {{request()->routeIs('contact') ? 'active' : ''}}">
            <a class="nav-link " href="/contact">Contacto</a>
          </li>
        </ul>

</div>
    </nav>
<div class='container-fluid p-0'>
    @yield('content')
</div>




  <!-- Footer -->
<footer class="page-footer font-small red darken-3 text-white">

  <!-- Footer Elements -->
  <div class="container text-center">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-1 flex-center">

          <!-- Twitter -->
          <a href="https://twitter.com/HeyKeyler" target='_blank'>
            <img src="{{URL::asset('img/twitter.png')}}" alt="Twitter" height="40px" width="40px">
          </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <!--Instagram-->
          <a href="https://instagram.com/_keylerruiz" target='_blank'>
              <img src="{{URL::asset('img/instagram.png')}}" alt="Instagram" height="40px" width="40px">
          </a>

        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright &nbsp;&nbsp;&nbsp; www.keylerphotography.com
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script>
AOS.init();
</script>
  </body>
</html>
