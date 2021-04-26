@extends('layouts.main')

@section('title', 'Open Water Diver PADI Courses with Ecodive Bali Diving')

@push('customstyle')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
@endpush

@section('section')

    <!-- Foto area -->
    <div class="banner-fotodetailpaket"></div>
    <!-- End Foto Area -->

    <!-- Detail Paket -->
    <section class="section-gap-detaildivecenter">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <p><a href="{{url('/detaildivecenter')}}">Dive Center Tulamben</a></p>
                    <p class="h2 title-biru">Raja Ampat Jumping Carnival</p><br>
                    <hr>
                    <p class="h3 title-kuning">IDR 500.000</p>
                    <hr>
                    <br>
                </div>
            </div>

            <div class="row">
                <!-- Tab deskripsi -->
                <div class="col-lg-7 col-sm-6">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header pt-2 border-bottom-0">
                            <ul class="nav nav-tabs d-flex justify-content-center" id="custom-tabs-five-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link warna-footer-a active" id="custom-tabs-five-informasi-tab" data-toggle="pill" href="#custom-tabs-five-informasi" role="tab" aria-controls="custom-tabs-five-informasi" aria-selected="true">Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link warna-footer-a" id="custom-tabs-five-agenda-tab" data-toggle="pill" href="#custom-tabs-five-agenda" role="tab" aria-controls="custom-tabs-five-agenda" aria-selected="false">Agenda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link warna-footer-a" id="custom-tabs-five-include-tab" data-toggle="pill" href="#custom-tabs-five-include" role="tab" aria-controls="custom-tabs-five-include" aria-selected="false">Include</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link warna-footer-a" id="custom-tabs-five-exclude-tab" data-toggle="pill" href="#custom-tabs-five-exclude" role="tab" aria-controls="custom-tabs-five-exclude" aria-selected="false">Exclude</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link warna-footer-a" id="custom-tabs-five-syarat-tab" data-toggle="pill" href="#custom-tabs-five-syarat" role="tab" aria-controls="custom-tabs-five-syarat" aria-selected="false">Syarat & Ketentuan</a>
                            </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-five-tabContent">
                            <div class="tab-pane fade active show text-justify" id="custom-tabs-five-informasi" role="tabpanel" aria-labelledby="custom-tabs-five-informasi-tab">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                            </div>
                            <div class="tab-pane fade text-justify" id="custom-tabs-five-agenda" role="tabpanel" aria-labelledby="custom-tabs-five-agenda-tab">
                                Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                            </div>
                            <div class="tab-pane fade text-justify" id="custom-tabs-five-include" role="tabpanel" aria-labelledby="custom-tabs-five-include-tab">
                                Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                            </div>
                            <div class="tab-pane fade text-justify" id="custom-tabs-five-exclude" role="tabpanel" aria-labelledby="custom-tabs-five-exclude-tab">
                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                            </div>
                            <div class="tab-pane fade text-justify" id="custom-tabs-five-syarat" role="tabpanel" aria-labelledby="custom-tabs-five-syarat-tab">
                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                            </div>
                            </div>
                        </div>
                    <!-- /.card -->
                    </div>
                </div>
                <!-- end tab -->

                <!-- Pilih paket -->
                <div class="col-lg-5 col-sm-6">
                    <div class="col-lg-10 ml-auto"> 
                        <div class="mb-4">  
                            <p class="h6 title-biru">Pilih Tanggal</p>
                            <div class="border mt-3 p-3">

                            </div>
                        </div>
                        <div class="mb-4">  
                            <p class="h6 title-biru">Pilih Jumlah Paket</p>
                            <div class="border mt-3 p-3">
                                <div class="input-group m-1">
                                    <span class="input-group-prepend">
                                        <button type="button" class="btn btn-number btn-secondary" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <span class="fas fa-minus"></span>
                                        </button>
                                    </span>     
                                    <input type="text" name="quant[1]" class="form-control text-center input-number" value="0" min="0" max="10">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-number title-white biru" data-type="plus" data-field="quant[1]">
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    </span>
                                </div>
                                <hr>
                                <p class="text-center price" data-price="500000">@ Rp500.000/Paket</p>
                            </div>

                        </div>
                        <div class="mb-4">  
                            <p class="h6 title-biru">Rincian Pemesanan</p>
                            <table class="table table-borderless border mt-3 pd-3">  
                                <tbody class="title-biru">
                                    <tr>
                                        <td>Tanggal Pesanan</th>
                                        <th class="text-right">20 Juli 2021</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Paket</th>
                                        <th class="text-right">2</td>
                                    </tr>
                                    <tr>
                                        <td>Total Biaya</th>
                                        <th class="text-right">Rp2.000.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan=2>
                                            <a href="{{url('/formpesan')}}" type="submit" class="btn biru title-white btn-md btn-block text-uppercase">Pesan Sekarang</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        </div> 
                    </div>
                </div>
                <!-- end pilih paket -->
            </div>

        </div>
    </section>
    <!-- End about Area -->

@endsection

@push('customscript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
@endpush
