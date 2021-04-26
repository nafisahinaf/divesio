@extends('layouts.main')

@section('title', 'Divesio')

@section('section')

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
                            <a href="{{url('divecenter')}}" class="text-uppercase header-btn ">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                    <div class="pembatas-garis"></div>
                    <p class="h1 pembatas-font text-white">A BAD DAY DIVING IS BETTER THAN A GOOD DAY AT WORK</p>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Paket -->
    <section class="section-gap">
    <div class="container">
        <div class="d-flex justify-content-center pb-40">
            <div class="title-biru text-center">
                <h1 class="mb-10 ">Paket Untuk Anda</h1>
                <p>Pilih paket yang sesuai untuk liburan kamu.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($paketselam as $pktselam)
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="product-card">
                <div class="product-tumb">
                    <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1" alt="">
                </div>
                <div class="product-details">
                    <p class="h4"><a href="/detailpaket">{{$pktselam->nama_paket}}</a></p>
                    <span class="product-catagory">{{$pktselam->kategori}}</span>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>Harga</small>Rp.{{$pktselam->harga}}</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>   
                </div>
            </div>
            </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{url('/divecenter')}}" class="mt-40 genric-btn biru circle arrow">Paket Lain<span class="lnr lnr-arrow-right"></span></a>      
            </div>
        </div>
    </section>
    <!-- End Paket-->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                    <p class="h1 pembatas-font text-white">APA ITU WISATA BERKELANJUTAN?</p>
                    <a class="genric-btn link circle ml-20" href="#" role="button">KLIK DI SINI</a>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

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
                <div class="pb-60 col-lg-8 ">
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

@endsection