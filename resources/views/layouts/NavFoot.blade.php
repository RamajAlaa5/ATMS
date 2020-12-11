<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>        
<!--Navbar-->
       <nav class="navbar sticky-top mb-4">
        
        <!--NavbarSidebarTogglerButton-->
        
        <button class="navbar-toggler toggler-button" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="true" aria-label="Toggle navigation">
            <div class="animated-icon"><span></span><span></span><span></span></div>
        </button>
        
        <!--NavbarSidebar-->
        
        <div class="sidebar-sticky fixed-top collapse navbar-collapse" id="navbarContent">
            <ul class="nav text-center">
                
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/ATMS/public/Profile">
                        <img src="images/fPerson1.jpg" class="w-50 rounded-circle mx-auto mt-3">
                        <span class="mb-3">Chloe</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/ATMS/public/Employees">Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/ATMS/public/Departments">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/ATMS/public/Leaves">Leaves</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/ATMS/public/Questions">Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/ATMS/public">Logout</a>
                </li>
            </ul>
        </div>
        
        <!--NavbarLogo-->
        
        <div><a href="http://localhost/ATMS/public/"><img class="nav-logo" src="images/ATMS.svg"></a></div>
        
        <!--NotificationBell-->
        
        <div class="nav-item dropdown"> </div>
        
            <!--BellIcon-->
        
            <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fal fa-bell fa-lg" id="bell"></i>
                <span class="badge">3</span>
            </a>
        
            <!--NotificationMenu-->
        
            <ul class="dropdown-menu dropdown-menu1 pt-1 ">
              <li class="head">
              <li class="notification-box">
                <a class="row ddi" href="#">
                  <div class="col-lg-3 col-sm-3 col-3 text-center">
                    <img src="images/fPerson1.jpg" class="w-75 rounded-circle mt-3">
                  </div>    
                  <div class="col-lg-8 col-sm-8 col-8">
                    <strong class="text-info">Chloe</strong>
                    <div>
                      Lorem ipsum dolor sit amet, consectetur
                    </div>
                    <small class="text-warning">27.11.2015, 15:00</small>
                  </div>    
                </a>
              </li>
              <li class="notification-box bg-gray">
                <a class="row ddi" href="#">
                  <div class="col-lg-3 col-sm-3 col-3 text-center">
                    <img src="images/mPerson1.jpg" class="w-75 rounded-circle mt-3">
                  </div>    
                  <div class="col-lg-8 col-sm-8 col-8">
                    <strong class="text-info">David</strong>
                    <div>
                      Lorem ipsum dolor sit amet, consectetur
                    </div>
                    <small class="text-warning">27.11.2015, 15:00</small>
                  </div>    
                </a>
              </li>
              <li class="notification-box">
                <a class="row ddi" href="#">
                  <div class="col-lg-3 col-sm-3 col-3 text-center">
                    <img src="images/fPerson2.jpg" class="w-75 rounded-circle mt-3">
                  </div>    
                  <div class="col-lg-8 col-sm-8 col-8">
                    <strong class="text-info">Melissa</strong>
                    <div>
                      Lorem ipsum dolor sit amet, consectetur
                    </div>
                    <small class="text-warning">27.11.2015, 15:00</small>
                  </div>   
                </a>
              </li>
              <li class="text-center p-1">
                <a href="" class="text-info">View All</a>
              </li>
            </ul>
    </nav>
    
<!--/Navbar-->

        <main class="py-4">
            @yield('content')
        </main>
    
<!--Footer-->
    
     <div class="footer">
        <div class="container-fluid text-white">
        <div class="row">
        <div class="col-lg-2 col-sm-4">
        <span>Contact Us</span><br>
         <img src="images/barcode.svg">
        </div>
        <div class="col-lg-2 offset-lg-2 col-sm-4">
        <span>+201007152472</span><br>
        <span>ATMS@Mail.com</span>
        </div>
        <div class=" col-lg-2 offset-lg-4 col-sm-4">
        <span class="d-block">&copy; ATMS 2020 &nbsp;&nbsp;<i class="fab fa-instagram fa-lg"></i>&nbsp;&nbsp;<i class="fab fa-twitter fa-lg"></i>&nbsp;&nbsp;<i class="fab fa-facebook fa-lg"></i></span>
        <img class="logo" src="images/ATMS.svg" >
        <span class="d-block">Terms of Service | Privacy Policy</span>
        </div>
        </div>
        </div>
    </div>
    
<!--/Footer-->
    
<!--ScriptIncludes-->
    
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
    </body>
</html>
