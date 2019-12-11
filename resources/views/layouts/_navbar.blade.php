<header class="site-header">
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="index.html" rel="home"><img class="d-block" src="{{asset('medart/images/logo.png')}}" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                            <li class="current-menu-item"><a href="/">Home</a></li>
                            <li>
                                <a class="nav-link" href="{{url('artikel')}}">
                                    {{ ('artikel') }}
                                </a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="/register">{{ __('Register Ibu Hamil') }}</a>

                            </li>
                            @endif
                            @else
                            <li>
                                @if(Auth::user()->role == "bumil")
                                <a class="nav-link" href="{{url('kehamilan')}}">
                                    {{ ('Kehamilan') }}
                                </a>
                                @endif
                                @if(Auth::user()->role == "admin")
                                <a class="nav-link" href="{{url('manage')}}">
                                    {{ ('manage') }}
                                </a>
                                @endif
                                @if(Auth::user()->role == "bidan")
                                <a class="nav-link" href="{{url('menu/bidan')}}">
                                    {{ ('manage') }}
                                </a>
                                @endif
                                @if(Auth::user()->role == "rs")
                                <a class="nav-link" href="{{url('menu/rs')}}">
                                    {{ ('manage') }}
                                </a>
                                @endif
                            </li>

                            @if(Auth::user()->role == "bumil")
                            <li>
                                <a class="nav-link" href="{{url('persalinan')}}">
                                    {{ ('Persalinan') }}
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->role == "bumil")
                            <li>
                                <a class="nav-link" href="{{url('setting')}}">
                                    {{ ('Menu') }}
                                </a>
                            </li>
                            @endif


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                            <!-- <li><a href="contact.html">login</a></li> -->
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap" style="background-image: url({{asset('medart/images/hero.jpg')}})">
                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>SMART MAMAKU</h1>
                                </header><!-- .entry-header -->

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="emergency-box border-0 mt-0">
                                            <ul class="p-0 m-0">
                                                <p>Aplikasi ini digunakan untuk memudahkan pelayanan ibu hamil Yang mencakup monitoring kehamilan, Perawatan Rumah Sakit, Pelayanan Bersalin, Ambulance Sampai dengan Pembuatan Akte Buah.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    <a href="#" class="button gradient-bg">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>The Best <br>Medical Services</h1>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    <a href="#" class="button gradient-bg">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>The Best <br>Medical Services</h1>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    <a href="#" class="button gradient-bg">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
        </div><!-- .pagination-wrap -->
    </div><!-- .hero-slider -->
</header><!-- .site-header -->