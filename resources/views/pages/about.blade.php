@extends('layouts/main')

@section('title', 'About')

@section('section')

    <section class="default-banner ">
        <div class="relative " style="background: url(https://images.unsplash.com/flagged/photo-1560502484-1180cacca327?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1950&q=80); background-size: cover; ">
            <div class="overlay " style="background: rgba(0,0,0,.3) "></div>
            <div class="container ">
                <div class="row justify-content-center align-items-center" style="height: 450px;">
                    <div class="col-md-10 col-12 ">
                        <div class="banner-content text-center ">
                            <h1 class="text-uppercase text-white ">DIVESIO</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dive Sites Hubungi -->
    <section class="section-gap">
            <div class="container ">
                <div class="row my-5">
                    <div class="col-6">
                        <img width="100%" src="https://images.unsplash.com/flagged/photo-1560502484-1180cacca327?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1950&q=80" alt="" class="src">
                    </div>
                    <div class="col-6">
                        <img width="100%" src="https://images.unsplash.com/flagged/photo-1560502484-1180cacca327?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1950&q=80" alt="" class="src">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-flex justify-content-center align-items-center h-100 mb-50">
                        <img src="{{asset('img/DIVESIO - about.png')}}" width="70%" alt="logo-divesio">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center h-100">
                        <p class="h1 text-center">A BAD DAY DIVING IS BETTER THAN A GOOD DAY AT WORK</p>
                    </div>
                </div>
                <p class="mt-30 text-justify mt-30 mb-30 title-biru">
                    Divesio adalah sebuah platform yang terdiri dari pusat selam yang sudah terverifikasi wisata berkelanjutan. Divesio memudahkan Anda untuk mendapatkan informasi pusat selam dan paket selam yang tersedia.
                    Divesio juga mempermudah Anda dalam melakukan pemesanan paket selam yang Anda inginkan.<br><br>

                    Divesio bekerja sama dengan berbagai dive center di Indonesia yang sudah menerapkan konsep wisata berkelanjutan. Melalui Divesio Anda dapat melihat detail dan melakukan pemesanan untuk paket yang disediakan oleh masing-masing dive center.

                    Periksa lebih lanjut dive center favorit kamu and enjoy your holiday!
                    Senang bisa membantu kamu dan segera nikmati kemudahan dalam melakukan pemesanan untuk liburan Anda!
                    <br><br>

                    Untuk informasi lebih lanjut dan kerja sama, hubungi kami di:
                    <br><br><br>

                    <strong>Divesio,<br>
                    Karanggayam, DI Yogyakarta,<br>
                    Indonesia, 80852<br>
                    email: admin@divesio.com<br>
                    Tel/Fax. (62) 363 – 23482</strong>
                    </p>
            </div>
            </div>
        </section>
        <!-- End about Area -->

    <!-- Start logo Area -->
    <section class="logo-area ">
        <div class="container ">
            <div class="row ">

            </div>
        </div>
    </section>
    <!-- End logo Area -->
@endsection