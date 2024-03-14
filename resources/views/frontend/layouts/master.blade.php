<!DOCTYPE html>
<html lang="en-us"><head>
  <meta charset="utf-8">
  <title>{{$settings->brandName}}</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- plugins -->
  <link rel="stylesheet" href="{{asset("frontend/plugins/bootstrap/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("frontend/plugins/themify-icons/themify-icons.css")}}">
  <link rel="stylesheet" href="{{asset("frontend/plugins/slick/slick.css")}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset("frontend/css/style.css")}}" media="screen">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset("frontend/images/favicon.png")}}" type="image/x-icon">
  <link rel="icon" href="{{asset("frontend/images/favicon.png")}}" type="image/x-icon">

  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>
<body>
  <!-- navigation -->
<header class="navigation fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
      <a class="navbar-brand order-1" href="index.html">
        <img class="img-fluid" width="100px" src="{{$settings->logo}}"
          alt="Reader | Hugo Personal Blog Template">
      </a>
      <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('home')}}" >homepage</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>

      <div class="order-2 order-lg-3 d-flex align-items-center">
        <select class="m-2 border-0 bg-transparent" id="select-language">
          <option id="en" value="" selected>En</option>
          <option id="fr" value="">Fa</option>
        </select>

        <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
          <i class="ti-menu"></i>
        </button>
      </div>

    </nav>
  </div>
</header>
<!-- /navigation -->


        @yield("content")



<footer class="footer">
    <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
        stroke-width="2" />
    </svg>
  
    <div class="container">
        <div class="col-md-auto text-md-center text-center mb-auto">
            <ul class="list-inline footer-list mb-0">
              <li class="list-inline-item"><a href="{{$settings->facebook}}"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a href="{{$settings->twitter}}"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a href="{{$settings->linkedin}}"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="{{$settings->youtube}}"><i class="ti-youtube"></i></a></li>
            </ul>
        </div>
    </div>
  </footer>




  <!-- JS Plugins -->
  <script src="{{asset("frontend/plugins/jQuery/jquery.min.js")}}"></script>

  <script src="{{asset("frontend/plugins/bootstrap/bootstrap.min.js")}}"></script>

  <script src="{{asset("frontend/plugins/slick/slick.min.js")}}"></script>

  <script src="{{asset("frontend/plugins/instafeed/instafeed.min.js")}}"></script>


  <!-- Main Script -->
  <script src="{{asset("frontend/js/script.js")}}"></script></body>
</html>