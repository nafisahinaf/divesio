@extends('layouts.main')

@section('title', 'Open Water Diver PADI Courses with Ecodive Bali Diving')

@section('section')

    <!-- Foto area -->
    <div class="banner-fotodetailpaket"></div>
    <!-- End Foto Area -->

    <!-- Dive Sites Hubungi -->

    <section class="section-gap-detaildivecenter info-area " id="artikel ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="col">
                    <p><a href="{{url('/detaildivecenter')}}">Dive Center Tulamben</a></p>
                    <h2 class="title-biru">Raja Ampat Jumping Carnival</h2><br>
                    <hr>
                    <h3 class="title-kuning">IDR 500.000</h3>
                    <hr>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-30 ">
                <div class="col-7">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs justify-content-center" id="detailpaket-list" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active warna-footer-a" href="#informasi" role="tab" aria-controls="informasi" aria-selected="true">Informasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link warna-footer-a" href="#jadwal" role="tab" aria-controls="jadwal" aria-selected="false">Jadwal Perjalanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link warna-footer-a" href="#includex" role="tab" aria-controls="includex" aria-selected="false">Include & Exclude</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link warna-footer-a" href="#syarat" role="tab" aria-controls="syarat" aria-selected="false">Syarat & Ketentuan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane active" id="informasi" role="tabpanel">
                                            <p class="card-text">Ingin berlibur ke Bali mengunjungi tempat-tempat terkenalnya? Bareng Divesio kamu akan diajak tur untuk menikmati matahari terbenam, makan malam romantis di Jimbaran, dan menjelajahi Nusa Penida! Dijamin
                                                terpikat, deh.</p>
                                                <p><strong>Catatan :</strong></p>
                                                <div class="row">
                                                    <div class="col-sm-auto">
                                                    •
                                                    </div>
                                                    <div class="col">
                                                    Biaya dan jadwal tur dapat berubah sewaktu–waktu sesuai kondisi tempat wisata yang dikunjungi
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-auto">
                                                    •
                                                    </div>
                                                    <div class="col">
                                                    Harga tidak berlaku untuk periode high season (Lebaran, Natal & Tahun Baru, Imlek, Hari Nyepi)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="jadwal" role="tabpanel" aria-labelledby="history-tab">
                                            <h5 card-text title-biru>Open Water Dive PADI - Hari 1</h5><br>
                                            <p>
                                                - Peserta dijemput oleh tim kami di Bandara Lombok/Pelabuhan Lembar/hotel
                                                <br>-  Perjalanan menuju Pelabuhan Tanjung Luar
                                                <br>-  Tiba di Pulau Kambing. Menuju Pantai Pink
                                                <br>-  Tur mengunjungi: Pantai Pink
                                                <br>-  Makan siang di restoran setempat
                                                <br>-  Tur mengunjungi: Pulau Tiga dan Pulau Pasir
                                                <br>-  Penyeberangan kembali ke Pelabuhan Tanjung Luar
                                                <br>-  Pengantaran peserta kembali ke tempat penjemputan awal
                                            </p>  
                                        </div>

                                        <div class="tab-pane" id="includex" role="tabpanel" aria-labelledby="deals-tab">
                                            <p class="card-text">
                                            Tiket pesawat menuju Lombok
                                            <br>Akomodasi hotel di Lombok
                                            <br>Keperluan pribadi
                                            <br>Tambahan makanan dan minuman di luar program
                                            <br>Tip untuk sopir.
                                            </p>
                                        </div>

                                        <div class="tab-pane" id="syarat" role="tabpanel" aria-labelledby="syarat-tab">
                                            <ul>
                                                <li>Pendaftaran dan pemesanan dapat dilakukan paling lambat 7 hari sebelum keberangkatan (tergantung pada destinasi perjalanan paket tur) dengan pembayaran penuh (lunas)</li>
                                                <li>Jadwal tur dapat berubah sewaktu-waktu mengikuti kondisi yang memungkinkan tanpa mengurangi isi dalam acara tur tersebut</li>
                                                <li>Divesio berhak menagih selisih harga tur dan lain-lainnya (jika terjadi kenaikan harga tur, pajak bandara, dll) kepada calon peserta.</li>
                                                <li>Memiliki lisensi A</li>
                                                <li>Tidak memiliki riwayat penyakit</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End about Area -->

    <!-- Pembatas -->
    <div class="pembatas">
        <div class="container w-100 h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-auto">
                <img src="{{asset('img/DIVESIO (1) - putih.png')}}" width="95px" alt="logo-divesio">
                </div>
                <div class="col-md-auto">
                    <div class="pembatas-garis"></div>
                </div>
                <div class="col-md-auto pembatas-font">
                    Paket Lain Untuk Anda
                </div>
            </div>
        </div>
    </div>
    <!-- End Pembatas -->

    <!-- Paket untuk anda -->

    <section class="section-gap info-area " id="artikel ">
        <div class="container ">
            <div class="row d-flex justify-content-center ">
                <div class="row ">
                    <div class="inspirasi-list ">
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card ">
                            <div class="product-tumb ">
                                <img src="https://i1.wp.com/rajaampatbiodiversity.com/wp-content/uploads/2017/12/raja-ampat-diving.jpg?fit=1024%2C658&ssl=1 " alt=" ">
                            </div>
                            <div class="product-details ">
                                <h4><a href="# ">Raja Ampat Jumping Carnival</a></h4>
                                <span class="product-catagory ">Open Diving</span>
                                <div class="product-bottom-details ">
                                    <div class="product-price "><small>Mulai dari</small> IDR 650.000</div>
                                    <div class="product-links ">
                                        <a href=" "><i class="fa fa-heart "></i></a>
                                        <a href=" "><i class="fa fa-shopping-cart "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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