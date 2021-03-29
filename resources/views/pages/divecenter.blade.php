@extends('layouts.main')

@section('title', 'Dive Center')

@section('section')

    <!-- Start Banner -->
    <section class="default-banner ">
        <div class="relative " style="background: url(https://images.unsplash.com/photo-1607073521066-99ea925762c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1424&q=80); background-size: cover; ">
            <div class="overlay " style="background: rgba(0,0,0,.3) "></div>
            <div class="container ">
                <div class="row justify-content-center align-items-center" style="height: 450px;">
                    <div class="col-md-10 col-12 ">
                        <div class="banner-content text-center ">
                            <h1 class="text-uppercase text-white ">Dive Center</h1>
                            <p class="text-white ">Pusat Selam Terverifikasi Sustainable Tourism</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                    <div class="pembatas-garis"></div>
                    <h1 class="pembatas-font text-white">Dive Center</h1>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Dive Center -->
    <section class="section-gap">
        <div class="container ">
            <div class="d-flex justify-content-center pb-40">
                <div class="title-biru text-center">
                    <p class="h2 teks-biru mb-10 ">Mitra Divesio</p>
                    <p>Pilih dive center yang bekerja sama dengan Divesio</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">  
                    <a href="/detaildivecenter" class="card-divecenter">
                        <img class="card-divecenter-img" src="https://images.unsplash.com/photo-1596952687581-9bd164398339?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1256&q=80" alt="Card image cap">
                        <div class="card-divecenter-body justify-content-center align-items-center">
                            <div class="card-divecenter-text text-center">Ecobali Diving Lice</div>
                        </div>
                    </a>
                </div>        
                <div class="col-md-3 col-sm-12">  
                    <a href="/detaildivecenter" class="card-divecenter">
                        <img class="card-divecenter-img" src="https://images.unsplash.com/photo-1596952687581-9bd164398339?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1256&q=80" alt="Card image cap">
                        <div class="card-divecenter-body justify-content-center align-items-center">
                            <div class="card-divecenter-text text-center">Ecobali Diving Lice</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-12">  
                    <a href="/detaildivecenter" class="card-divecenter">
                        <img class="card-divecenter-img" src="https://images.unsplash.com/photo-1596952687581-9bd164398339?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1256&q=80" alt="Card image cap">
                        <div class="card-divecenter-body justify-content-center align-items-center">
                            <div class="card-divecenter-text text-center">Ecobali Diving Lice</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-12">  
                    <a href="/detaildivecenter" class="card-divecenter">
                        <img class="card-divecenter-img" src="https://images.unsplash.com/photo-1596952687581-9bd164398339?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1256&q=80" alt="Card image cap">
                        <div class="card-divecenter-body justify-content-center align-items-center">
                            <div class="card-divecenter-text text-center">Ecobali Diving Lice</div>
                        </div>
                    </a>
                </div>
            </div>
    </section>
    <!-- End Paket-->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                    <div class="pembatas-garis"></div>
                    <p class="h1 pembatas-font text-white">Paket Selam</h1>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Paket -->
    <section class="section-gap">
        <div class="container">
        <div class="d-flex justify-content-center pb-40">
                <div class="title-biru text-center">
                    <p class="h2 teks-biru mb-10 ">Paket untuk Anda</p>
                    <p>Pilih paket wisata selam yang sesuai dengan kebutuhan Anda!</p>
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
                <a href="#" class="mt-40 genric-btn biru circle arrow">Paket Lain<span class="lnr lnr-arrow-right"></span></a>      
            </div>
        </div>
    </section>
    <!-- End Paket-->

    @endsection