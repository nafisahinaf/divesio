<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Divesio</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                    <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/divecenter')}}">Dive Center</a></li>
                            <!-- Dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        Blog
								      </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/artikel')}}">Artikel</a>
                                    <a class="dropdown-item" href="{{url('/inspirasi')}}">Inspirasi</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        About
								      </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href={{url('/about')}}>DIVESIO</a>
                                    <a class="dropdown-item" href={{url('/sustainabletourism')}}>Sustainable Tourism</a>
                                </div>
                            </li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->
    </section>

    <section class="default-banner ">
        <div class="relative " style="background: url(https://images.unsplash.com/photo-1484839013845-518865fbb906?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80);background-size: cover; ">
            <div class="overlay " style="background: rgba(0,0,0,.3) "></div>
            <div class="container ">
                <div class="row fullscreen justify-content-center align-items-center ">
                    <div class="col-md-10 col-12 ">
                        <div class="banner-content text-center ">
                            <h4 class="text-white mb-20 text-uppercase ">Jelajahi Dunia Bawah Laut</h4>
                            <h1 class="text-uppercase text-white ">Bahari Indonesia</h1>
                            <p class="text-white ">Telusuri lebih jauh wisata bahari Indonesia yang menjadi salah satu destinasi wisata bahari favorit di dunia</p>
                            <a href="# " class="text-uppercase header-btn ">Discover Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Artikel Pilihan -->

    <section class="section-gap-artikel info-area " id="artikel ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="menu-content pb-40 col-lg-8 ">
                    <div class="title-biru text-center ">
                        <h1 class="mb-10 ">Artikel Terbaru</h1>
                        <p>Cari tahu lebih banyak tentang wisata bahari Indonesia!</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="artikel-list">
                        <div class="card-artikel">
                            <img src="https://images.pexels.com/photos/1528975/pexels-photo-1528975.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" />
                            <div class="card-artikel-body">
                                <div class="card-artikel-text">
                                    <h3>Lumba-Lumba Pak Joko</h3>
                                    <p>Lumba-Lumba Pak Joko Lumba-Lumba Pak Joko Lumba-Lumba Pak Joko Lumba-Lumba Pak Joko Lumba-Lumba Pak Joko Lumba-Lumba Pak Joko</p>
                                </div>
                                <a href="#" class="warna-footer-a">Baca Lagi ></a>
                            </div>
                        </div>
                        <div class="card-artikel">
                            <img src="https://images.pexels.com/photos/1528975/pexels-photo-1528975.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" />
                            <div class="card-artikel-body">
                                <div class="card-artikel-text">
                                    <h3>Keindahan Laut Timur</h3>
                                    <p>Keindahan Laut Timur Keindahan Laut Timur Keindahan Laut Timur Keindahan Laut Timur Keindahan Laut Timur Keindahan Laut Timur Keindahan Laut Timur</p>
                                </div>
                                <a href="#" class="warna-footer-a">Baca Lagi ></a>
                            </div>
                        </div>
                        <div class="card-artikel">
                            <img src="https://images.pexels.com/photos/1528975/pexels-photo-1528975.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" />
                            <div class="card-artikel-body">
                                <div class="card-artikel-text">
                                    <h3>Karang Laut NTT</h3>
                                    <p>Karang Laut NTT Karang Laut NTT Karang Laut NTT Karang Laut NTT Karang Laut NTT Karang Laut NTT Karang Laut NTT Karang Laut NTT</p>
                                </div>
                                <a href="#" class="warna-footer-a">Baca Lagi ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="mt-40 genric-btn biru circle arrow">Artikel Lain<span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </section>
    <!-- End about Area -->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container w-100 h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-auto">
                    <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                </div>
                <div class="col-md-auto">
                    <div class="pembatas-garis"></div>
                </div>
                <div class="col pembatas-font">
                    A BAD DAY DIVING IS BETTER THAN A GOOD DAY AT WORK
                </div>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Paket untuk anda -->

    <section class="section-gap-artikel info-area " id="artikel ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="menu-content pb-40 col-lg-8 ">
                    <div class="title-biru text-center ">
                        <h1 class="mb-10 ">Paket Untuk Anda</h1>
                        <p>Pilih paket yang sesuai untuk liburan kamu.</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="inspirasi-list">
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-tumb">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                            </div>
                            <div class="product-details">
                                <h4><a href="#">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory">Open Diving</span>
                                <div class="product-bottom-details">
                                    <div class="product-price"><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links">
                                        <a href=""><i class="fa fa-heart"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="#" class="mt-40 genric-btn biru circle arrow">Paket Lain<span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </section>
    <!-- End Paket-->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container w-100 h-100">
            <div class="row h-100 align-items-center justify-content-md-center">
                <div class="col-md-auto pembatas-font">
                    APA ITU WISATA BERKELANJUTAN?
                </div>
                <div class="col-md-auto">
                    <a href="#" class="genric-btn pembatas">KLIK DISINI</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Inspirasi untuk anda -->

    <section class="section-gap-artikel info-area " id="artikel ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="menu-content pb-40 col-lg-8 ">
                    <div class="title-biru text-center ">
                        <h1 class="mb-10 ">Inspirasi Untuk Anda</h1>
                    </div>
                </div>
                <div class="inspirasi-list">
                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                            <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>

                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>

                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>

                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>
                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>

                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>

                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>

                    <div class="card-inspirasi">
                        <div class="card-inspirasi_image">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" /> </div>
                        <div class="card-inspirasi_title title-white">
                            <p>Bali</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="mt-40 genric-btn biru circle arrow">Inspirasi Lain<span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </section>
    <!-- End Inspirasi-->

    <!-- Start Video Area -->
    <section class="video-area pt-40 pb-40 ">
        <div class="overlay overlay-bg "></div>
        <div class="container ">
            <div class="video-content ">
                <a href="https://www.youtube.com/watch?v=L4qM1IEhtNQ&t=684s" class="play-btn "><img src="{{asset('img/play-btn.png')}}" alt=" "></a>
                <div class="video-desc ">
                    <h3 class="h2 text-white text-uppercase ">Sensasi di Bawah Permukaan</h3>
                    <h4 class="text-white ">Wujudkan impianmu merasakan dunia bawah laut</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Video Area -->


    <!-- Start logo Area -->
    <section class="logo-area ">
        <div class="container ">
            <div class="row ">

            </div>
        </div>
    </section>
    <!-- End logo Area -->


    <!-- start contact Area -->
    <section class="contact-area section-gap " id="contact ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="menu-content pb-60 col-lg-8 ">
                    <div class="title-biru text-center ">
                        <h1 class="mb-10 ">Hubungi kami</h1>
                        <p>Kenal lebih dalam tentang Divesio</p>
                    </div>
                </div>
            </div>
            <form class="form-area " id="myForm " action="mail.php " method="post " class="contact-form text-right ">
                <div class="row ">
                    <div class="col-lg-6 form-group ">
                        <input name="name " placeholder="Nama " onfocus="this.placeholder='' " onblur="this.placeholder='Nama ' " class="common-input mb-20 form-control " required=" " type="text ">

                        <input name="email " placeholder="Alamat email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$ " onfocus="this.placeholder='' " onblur="this.placeholder='Alamat Email' " class="common-input mb-20 form-control
                                " required=" " type="email ">

                        <input name="subject " placeholder="Subjek " onfocus="this.placeholder='' " onblur="this.placeholder='Subjek' " class="common-input mb-20 form-control " required=" " type="text ">
                    </div>
                    <div class="col-lg-6 form-group ">
                        <textarea class="common-textarea mt-10 form-control " name="message " placeholder="Pesan " onfocus="this.placeholder='' " onblur="this.placeholder='Pesan' " required=" "></textarea>
                        <button class="primary-btn mt-20 ">KIRIM<span class="lnr lnr-arrow-right "></span></button>
                        <div class="alert-msg ">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- end contact Area -->

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
                            Baca lebih lanjut tentang Divesio <a href="#">disini.</a>
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
                        <div><a class="warna-footer-a" href="#">Artikel</a></div>
                        <div><a class="warna-footer-a" href="#">Inspirasi</a></div>
                        <div><a class="warna-footer-a" href="#">Sustainable Tourism</a></div>
                        <div><a class="warna-footer-a" href="#">Jadi Partner Kami</a></div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js " integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4 " crossorigin="anonymous"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>