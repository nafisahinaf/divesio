<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/fav.png')}}">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title', 'Divesio')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <!--CSS============================================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    @stack('customstyle')
</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/divecenter')}}">Dive Center</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        Divesio
								      </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href={{url('/about')}}>About</a>
                                    <a class="dropdown-item" href={{url('/sustainabletourism')}}>Sustainable Tourism</a>
                                    <a class="dropdown-item" href={{url('/joinus')}}>Join Us</a>
                                </div>
                            </li>
                            @if (Route::has('login'))
                                    @auth
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                <span class="fas fa-user"></span>
                                                  </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href={{url('/about')}}>Profil</a>
                                                <a class="dropdown-item" href={{ route('logout') }}
                                                   onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @else
                                        <li><a href="{{url('/login')}}">Login</a></li>
                                    @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->
    </section>

@yield('section')

    <!-- start footer Area -->
    <footer class="footer-area section-gap ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-5 col-md-6 col-sm-6 ">
                    <div class="single-footer-widget warna-footer">
                        <h6>About Divesio</h6>
                        <p>
                            Platform untuk mencari tahu lebih banyak tentang dunia bahari dan layanan pemesanan paket liburan.
                        </p>
                        <p class="footer-text ">
                            Baca lebih lanjut tentang Divesio <a href="{{url('/about')}}">disini.</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- <p class="footer-text ">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o " aria-hidden="true "></i> by <a href="https://colorlib.com " target="_blank ">Colorlib</a></p> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 ">
                    <div class="single-footer-widget warna-footer">
                        <h6>Divesio Menus</h6>
                        <p>Jelajahi lebih dalam di Divesio</p>
                        <div><a class="warna-footer-a" href="{{url('/divecenter')}}">Dive Center</a></div>
                        <div><a class="warna-footer-a" href="{{url('/sustainabletourism')}}">Sustainable Tourism</a></div>
                        <div><a class="warna-footer-a" href="{{url('/joinus')}}">Jadi Partner Kami</a></div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget ">
                    <div class="single-footer-widget warna-footer">
                        <h6>Follow Us</h6>
                        <p>Media Sosial Divesio</p>
                        <div class="footer-social d-flex align-items-center ">
                            <a href="# "><i class="fa fa-instagram "></i></a>
                            <a href="# "><i class="fa fa-twitter "></i></a>
                            <a href="# "><i class="fa fa-facebook "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js " integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4 " crossorigin="anonymous"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/c01d595813.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @stack('customscript')
</body>

</html>