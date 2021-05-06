@extends('layouts/main')

@section('title', 'Pengajuan Dive Center')

@section('section')

    <section class="default-banner ">
        <div class="relative"
            style="background: url(https://images.unsplash.com/photo-1560537693-d17c10fc668f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80); background-size: cover; background-position: bottom;">
            <div class="container ">
                <div class="row justify-content-center align-items-center" style="height: 450px;">
                    <div class="col-md-10 col-12 ">
                        <div class="banner-content text-center text-white">
                            <p class="h1 text-uppercase"><strong>Join Us</strong></p>
                            <p class="h4">Bergabung bersama Divesio!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="border my-5 rad-30 white-bg">
                <div class="row m-0 py-4 radlr-30 p-4 border-bottom" style="background-color: #FAFAFA">
                    <div class="py-3 px-4 biru-gradient rounded text-white text-center ml-2 mt-2">
                        <span style="font-size: 1.3rem" class="fas fa-file">
                    </div>
                    <div class="col d-flex align-items-center mt-2">
                        <p class="h5 m-0">Pengajuan Dive Center</p>
                    </div>
                </div>
                <form class="p-4 mx-2">
                    <div class="form-group row">
                        <label for="namaDivecenter" class="col-sm-2 col-form-label">Nama Dive Center</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaDivecenter">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsiDiveCenter" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamatDiveCenter" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamatDiveCenter">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitasDiveCenter" class="col-sm-2 col-form-label">Fasilitas</label>
                        <div class="col-sm-10">
                            
                            <input type="text" class="form-control" id="fasilitasDiveCenter">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fotoDiveCenter" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fotoDiveCenter">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sertifikatDiveCenter" class="col-sm-2 col-form-label">Berkas Pendukung</label>
                        <div class="col-sm-10">
                            <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
                        </div>
                    </div>
                    <button type="submit"
                        class="ml-auto mr-0 btn btn-success d-flex justify-content-end mt-4">Ajukan</button>
                </form>
            </div>
        </div>
        </div>
    </section>

@endsection
