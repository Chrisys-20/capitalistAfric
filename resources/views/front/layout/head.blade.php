    <!--====== OFFCANVAS MENU PART START ======-->

    <div class="binduz-er-news-off_canvars_overlay"></div>
    <div class="binduz-er-news-offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="binduz-er-news-offcanvas_menu_wrapper">
                        <div class="binduz-er-news-canvas_close">
                            <a href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <!-- <div class="binduz-er-news-header-social">
                            <ul class="text-center">
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                            </ul>
                        </div> -->
                        <div id="menu" class="text-left ">
                            <ul class="binduz-er-news-offcanvas_main_menu">
                                <li class="binduz-er-news-menu-item-has-children ">
                                    <a href="/">Accueil</a>
                                    <!-- <ul class="binduz-er-news-sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                        <li><a href="index-8.html">Home 8</a></li>
                                        <li><a href="index-9.html">Home 9</a></li>
                                        <li><a href="index-10.html">Home 10</a></li>
                                        <li><a href="index-11.html">Home 11</a></li>
                                        <li><a href="index-12.html">Home 12</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#"> Catégories</a>
                                    <ul class="binduz-er-news-sub-menu">
                                        <li><a href="article-details.php">Finances</a></li>
                                        <li><a href="#">Politiques</a></li>
                                        <li><a href="#">Analyses</a></li>
                                        <li><a href="#">Industries</a></li>
                                        <li><a href="#">Bourse</a></li>
                                    </ul>
                                </li> -->
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#categorie">Catégories</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="{{route('contact')}}" target="new">Contact</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" target="new">Admin</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="binduz-er-news-offcanvas_footer">
                            <div class="binduz-er-news-logo text-center mb-30 mt-30">
                                <a href="/">
                                    <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" width="150px">
                                </a>
                            </div>
                            <!-- <p>I’m Michal Škvarenina, a multi-disciplinary designer currently working at Wild and as a freelance designer.</p> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}} " alt="" width="180px">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus autocomplete="name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input class="form-control" id="email" type="email" name="email" required autofocus autocomplete="username">
                            </div>
                            @if(session()->has('error'))
                            <div class="col-lg-12 alert-notification mt-2">
                                <div id="message" class="alert alert-danger">{{session()->get('error')}}</div>
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Password</label>
                                <input class="form-control" type="password" name="password" required autocomplete="new-password">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                    </div>

                    <div class="modal-footer">
                        @if (Route::has('password.request'))
                        <a class="" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="text-decoration: underline;">
                            {{ __('Already registered?') }}
                        </a>
                        @endif
                        <button ttype="submit" class="btn btn-danger">REGISTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="{{asset('capitalistAf/assets/images/LogoCA.png')}} " alt="" width="180px">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="email" type="email" name="email" required autofocus autocomplete="username">
                            </div>
                            @if(session()->has('error'))
                            <div class="col-lg-12 alert-notification mt-2">
                                <div id="message" class="alert alert-danger">{{session()->get('error')}}</div>
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Password</label>
                                <input class="form-control" type="password" name="password" required autocomplete="current-password">
                            </div>
                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                    </div>

                    <div class="modal-footer">
                        @if (Route::has('password.request'))
                        <a class="" href="#" style="text-decoration: underline;">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                        <button ttype="submit" class="btn btn-danger">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end modal -->

    <!--====== OFFCANVAS MENU PART ENDS ======-->

    <!--====== SEARCH PART START ======-->


    <!--====== SEARCH PART ENDS ======-->

    <!--====== BINDUZ TOP HEADER PART START ======-->

    <div class="binduz-er-top-header-area">
        <div class="binduz-er-bg-cover"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-headline">
                        <div class="binduz-er-topbar-headline">
                            @foreach($categOff as $categ)
                            <p> <i class="fas fa-bolt"></i>Avec<span style="text-decoration: none;"> CAPITALIST AFRICA</span> <a href="#">, L'actualité est à votre portée!!! </a></p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-social d-flex justify-content-end align-items-center">
                        <!-- <div class="binduz-er-news-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div> -->
                        <!-- <div class="binduz-er-news-subscribe-btn">
                            <a class="binduz-er-main-btn" href="#">Email: contact@capitalistafrica.com</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BINDUZ TOP HEADER PART ENDS ======-->

    <!--====== BINDUZ HEADER PART START ======-->

    <header class="binduz-er-header-area">
        <div class="binduz-er-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-brand logo"><a href="/"><img src="{{asset('capitalistAf/assets/images/LogoCA.png')}}" alt="" width="150px"></a></div> <!-- logo -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/">Accueil</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#">Catégories<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Finances</a></li>
                                                <li><a href="#">Politiques</a></li>
                                                <li><a href="#">Industries</a></li>
                                                <li><a href="#">Analyses</a></li>
                                                <li><a href="#">Bourse</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#categorie">Catégories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('contact')}}" target="new">Contact</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <div class="binduz-er-navbar-btn d-flex">
                                    <!-- <div class="binduz-er-widget d-flex">
                                        <a  href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="far fa-lock"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-user"></i></a>
                                    </div> -->
                                    <span class="binduz-er-toggle-btn binduz-er-news-canvas_open d-block d-lg-none">
                                        <i class="fal fa-bars"></i>
                                    </span>
                                </div>
                                <!-- Button trigger modal -->


                            </nav>
                        </div> <!-- navigation -->
                    </div>

                </div> <!-- row -->
            </div>
        </div>
    </header>