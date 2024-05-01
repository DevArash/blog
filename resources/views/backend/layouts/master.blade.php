<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>Brand</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset("backend/css/nucleo-icons.css")}}" rel="stylesheet" />
  <link href="{{asset("backend/css/nucleo-svg.css")}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset("backend/css/material-dashboard.css?v=3.1.0")}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{asset("backend/img/logo-ct.png")}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Dashboard')bg-gradient-primary @endif" href="{{route('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Post</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Posts')bg-gradient-primary @endif" href="{{route('dashboard.post')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">post</i>
            </div>
            <span class="nav-link-text ms-1">Posts List</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Create Post')bg-gradient-primary @endif" href="{{route('dashboard.post.create')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">post_add</i>
            </div>
            <span class="nav-link-text ms-1">Create Post</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Trashed Posts')bg-gradient-primary @endif" href="{{route('dashboard.post.trashed')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">Recycling</i>
            </div>
            <span class="nav-link-text ms-1">Trashed Posts</span>
          </a>
        </li> 
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Profile</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Edit User')bg-gradient-primary @endif" href="{{route('dashboard.users.edit',[ Auth::user()->id])}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">person_edit</i>
            </div>
            <span class="nav-link-text ms-1">Edit User</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Users List')bg-gradient-primary @endif" href="{{route('dashboard.users.index')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Users List</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Create User')bg-gradient-primary @endif" href="{{route('dashboard.users.create')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">person_add</i>
            </div>
            <span class="nav-link-text ms-1">Create User</span>
          </a>
        </li> 
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">General</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'About')bg-gradient-primary @endif" href="{{route('dashboard.about')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">info</i>
            </div>
            <span class="nav-link-text ms-1">About</span>
          </a>
        </li>               
        <li class="nav-item">
          <a class="nav-link text-white @if ($pageName == 'Settings')bg-gradient-primary @endif" href="{{route('dashboard.settings')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-symbols-outlined opacity-10">settings</i>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>         

      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;" style="cursor: default;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard @if($pageName != 'Dashboard') / @yield('pageName')@endif</li>
          </ol>
        </nav>


        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">

            </div>
          </div>
          <ul class="navbar-nav  justify-content-sm-around">    
              <li class="nav-item d-flex align-items-center mx-3">
                <a class="nav-link text-body font-weight-bold px-0" style="cursor: default;">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">{{Auth::user()->name}}</span>
                </a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a href="{{route('logout')}}" class="nav-link text-body font-weight-bold px-0">
                  <span class="d-sm-inline d-none">Log Out</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
   


              @yield("content")

         

      <footer class="footer fixed-bottom text-center">
              <div class="copyright text-center text-sm text-muted mb-lg-3">
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Arash Kazemieh</a>
              </div>
      </footer>
    </div>
  </main>
  </div>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset("backend/js/material-dashboard.min.js?v=3.1.0")}}"></script>

  <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
  <script>CKEDITOR.replace('my-editor', options); </script>

</body>
</html>