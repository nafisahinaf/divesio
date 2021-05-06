@extends('layouts.main')

@section('title', 'Dive Center Tulamben')

@section('section')

    <!-- Dive Sites Hubungi -->

    <section class="section-gap-detaildivecenter info-area ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="col detail-divecenter">
                    <p>Dive Sites / Dive Center / Dive Center Tulamben</p>
                    <h2 class="title-biru">Dive Center Tulamben</h2>
                    <h5 class="title-biru">Tulamben, Sulawesi Utara</h5>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End about Area -->

    <!-- Foto area -->
    <div class="banner-foto"></div>
    <!-- End Foto Area -->

    <!-- Deskripsi -->
    <section class="section-gap-detaildivecenter info-area ">
        <div class="container ">
            <div class="row">
                <div class="col-3">
                    <h5 class="title-biru">DESKRIPSI</h5>
                </div>
                <div class="col-9">
                    <p class="text-justify"><strong>Abyss Ocean World is located in the fishing village of Pemuteran, 5 minutes' walk from Hibiscus House.</strong>
                        
                        <br><br>

                        The dive center boasts over a decade of diving experience within the Indonesia Archipelago. From Pemuteran, the team will take you to their favourite places and share with you their passion and knowledge of these regions.
                        Besides the reefs of Pemuteran Bay, you can visit the dramatic walls of Menjangan Island. There is a wide range of trips and voyages spanning the Northern Bali coastline.
                        On all of the diving safaris, adventures and daily trips, the team will take care of all the logistics so all you have to do is relax and enjoy.
                        Marine life includes Spanish dancers, nudibranchs, ghost pipefish, white tip sharks, cuttlefish and more!
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <h5 class="title-biru">FASILITAS</h5>
                </div>
                <div class="col-9">
                        <ul>
                            <li>Free Nitrox</li>
                            <li>Dive Shop</li>
                            <li>Max. 4 person/guide</li>
                            <li>4 PADI Instructors</li>
                            <li>PADI 5 Star Center</li>
                            <li>Wi-Fi (FREE)</li>
                        </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <h5 class="title-biru">ALAMAT</h5>
                </div>
                <div class="col-9">
                    <p class="text-justify">Jalan Raya Gilimanuk, Yeh Panas, Seririt, Pemuteran, Buleleng, Bali 81155, Indonesia (~476.0 km)</p>
                    <a href="# " class="genric-btn biru circle">Maps</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Deskripsi -->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                <div class="pembatas-garis"></div>
                <p class="h1 pembatas-font text-white">Paket Selam</p>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Paket -->
    <section class="section-gap">
        <div class="container">
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
                <div class="page">
                    <ul>
                        <li class="no"><a href="#">«</a></li>
                        <li class="pg active"><a href="#">1</a></li>
                        <li class="pg"><a href="#">2</a></li>
                        <li class="pg"><a href="#">3</a></li>
                        <li class="pg"><a href="#">4</a></li>
                        <li class="pg"><a href="#">5</a></li>
                        <li class="no"><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Paket-->

    @endsection