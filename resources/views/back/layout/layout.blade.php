<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Capitalist| Africa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="capitalist Africa est un site qui publie des articles d’actualité de manières journalière" name="description" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('capitalistAf/assets/images/LogoCA.png')}}">

        <!-- plugin css -->
        <link href="{{asset('dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('dashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('dashboard/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{route('my.dashboard')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" height="26">
                                </span>
                            </a>

                            <a href="{{route('my.dashboard')}}" class="logo logo-light">
                                <span class="logo-lg">
                                    <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" height="30">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" height="26">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">Hi, Welcome Back!</h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">
          
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('dashboard/assets/images/users/avatar-3.jpg')}}"
                                alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{Auth::user()->name}}</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">{{Auth::user()->name}}</h6>
                                    <p class="mb-0 font-size-11 text-muted">{{Auth::user()->email}}</p>
                                </div>
                                <a class="dropdown-item" href="{{route('profile.edit')}}"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    
                                    <a class="dropdown-item" href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('my.dashboard')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('dashboard/assets/images/logo-dark-sm.png')}}" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" height="28">
                        </span>
                    </a>

                    <a href="{{route('my.dashboard')}}" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{asset('dashboard/assets/images/logo-light.png')}}" alt="" height="30">
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" height="26">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Dashboard</li>

                           <li>
                                <a href="{{route('my.dashboard')}}">
                                    <i class="bx bx-home-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-applications">Pages </li>

                            <li>
                                <a href="javascript:void(0);" class="has-arrow">
                                    <i class="bx bx-receipt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-ecommerce">Articles</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('article.create')}}" data-key="t-products">Créer</a></li>
                                    <li><a href="{{route('article.list')}}" data-key="t-product-detail">Liste</a></li>
                                </ul>
                            </li>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <header class="ishorizontal-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('dashboard/assets/images/logo-dark-sm.png')}}" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('dashboard/assets/images/logo-dark.png')}}" alt="" height="28">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('dashboard/assets/images/logo-light-sm.png')}}" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('dashboard/assets/images/logo-light.png')}}" alt="" height="30">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">créer</h4>
                        </div>
                        <!-- end page title -->

                    </div>
                </div>
            </header>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           
            @yield('main')

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    


        <!-- JAVASCRIPT -->
        <script src="{{asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/libs/metismenujs/metismenujs.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/libs/eva-icons/eva.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('dashboard/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Vector map-->
        <script src="{{asset('dashboard/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
        
        <script src="{{asset('dashboard/assets/js/pages/dashboard.init.js')}}"></script>

        <script src="{{asset('dashboard/assets/js/app.js')}}"></script>

    </body>

</html>