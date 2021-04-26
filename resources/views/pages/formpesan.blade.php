@extends('layouts.main')

@section('title', 'Form Pemesanan')

@section('section')
<div class="container">
    <section class="py-5">
        <p class="h3 title-biru">Checkout Pemesanan</h2>
        <p class="">Raja Ampat Jumping Carnival</p>
        <!-- progressbar -->
        <ul class="mt-50 mb-50" id="progressbar">
            <li class="active" id="peserta">Data Peserta</li>
            <li id="konfirmasi">Konfirmasi Pemesanan</li>
            <li id="payment">Pembayaran</li>
            <li id="tiket">E-Voucher</li>
        </ul>
    </section>
    <section>
        <div class="row justify-content-between" id="checkout-content">
            <div class="col-12 col-lg-8 p-4 border">
                <div class="card">
                    <form id="msform" action="">
                        <fieldset>
                            <div class="row">
                                <div class="col-12">
                                    <p class="h4 title-biru mb-4">Data Peserta</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="form-card py-3">
                                <p class="font-weight-bold">PESERTA #1</p>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="titlePeserta">Title <span style="color:red">*</span></label>
                                        <br><select class="custom-select"  style="width:100%" id="titlePeserta" name="titlePeserta" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>Tuan</option>
                                            <option>Nyonya</option>
                                        </select>
                                        {{-- <p class="text-justify mt-2" style="color:#9f9f9f;"><small><span
                                                    class="lnr lnr-chevron-up mr-2"></span>Title/Panggilan</small></p> --}}
                                    </div>
                                    <div class="col-md-7">
                                        <label for="namaPeserta">Nama Lengkap <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="namaPeserta" required />
                                        <p class="text-justify mt-2 mb-0" style="color:#9f9f9f;"><small><span
                                                    class="lnr lnr-chevron-up mr-2"></span>Nama Lengkap Sesuai
                                                KTP/Paspor</small></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="lahirPeserta">Tanggal Lahir <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="lahirPeserta" required />
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-2 col-md-2 col-sm-12">
                                        <label for="titlePeserta">Tipe ID <span style="color:red">*</span></label>
                                        <br><select class="custom-select" style="width:100%" id="titlePeserta" required />
                                        <option selected disabled value="">Choose...</option>
                                        <option>KTP</option>
                                        <option>Passport</option>
                                        <option>Tanggal Lahir</option>
                                        </select>
                                    </div>
                                    <div class="col-10 col-md-10 col-sm-12 mt-4 mt-sm-0">
                                        <label for="noID">No. Identitas <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="noID" required />
                                        <div class="row mt-2">
                                            <div class="col-md-auto pr-0"><small><span
                                                        class="lnr lnr-chevron-up mr-2"></span></small></div>
                                            <div class="col text-justify m-0 pl-0" style="color:#9f9f9f;">
                                                <small>Peserta yang tidak memiliki kartu identitas, dapat mengisi dengan
                                                    tanggal lahir dengan format: HHBBTTTT (Contoh: 10042010).</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input ml-0" type="checkbox" value="" id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Peserta Sudah Memenuhi Persyaratan    
                                            </label>
                                        </div>
                                        <div id="accordion">
                                            <div class="card mt-3">
                                              <div class="card-header" id="headingOne">
                                                <p class="mb-0">
                                                  <button class="btn btn-link" style="font-size: 14px" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <span class="lnr lnr-chevron-down mr-2"></span>Persyaratan Raja Ampat Jumping Carnival
                                                  </button>
                                                </p>
                                              </div>
                                          
                                              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-justify">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-card py-3">
                                <p class="font-weight-bold">PESERTA #1</p>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="titlePeserta">Title <span style="color:red">*</span></label>
                                        <br><select class="custom-select"  style="width:100%" id="titlePeserta" name="titlePeserta" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>Tuan</option>
                                            <option>Nyonya</option>
                                        </select>
                                        {{-- <p class="text-justify mt-2" style="color:#9f9f9f;"><small><span
                                                    class="lnr lnr-chevron-up mr-2"></span>Title/Panggilan</small></p> --}}
                                    </div>
                                    <div class="col-md-7">
                                        <label for="namaPeserta">Nama Lengkap <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="namaPeserta" required />
                                        <p class="text-justify mt-2 mb-0" style="color:#9f9f9f;"><small><span
                                                    class="lnr lnr-chevron-up mr-2"></span>Nama Lengkap Sesuai
                                                KTP/Paspor</small></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="lahirPeserta">Tanggal Lahir <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="lahirPeserta" required />
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-2 col-md-2 col-sm-12">
                                        <label for="titlePeserta">Tipe ID <span style="color:red">*</span></label>
                                        <br><select class="custom-select" style="width:100%" id="titlePeserta" required />
                                        <option selected disabled value="">Choose...</option>
                                        <option>KTP</option>
                                        <option>Passport</option>
                                        <option>Tanggal Lahir</option>
                                        </select>
                                    </div>
                                    <div class="col-10 col-md-10 col-sm-12 mt-4 mt-sm-0">
                                        <label for="noID">No. Identitas <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="noID" required />
                                        <div class="row mt-2">
                                            <div class="col-md-auto pr-0"><small><span
                                                        class="lnr lnr-chevron-up mr-2"></span></small></div>
                                            <div class="col text-justify m-0 pl-0" style="color:#9f9f9f;">
                                                <small>Peserta yang tidak memiliki kartu identitas, dapat mengisi dengan
                                                    tanggal lahir dengan format: HHBBTTTT (Contoh: 10042010).</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input ml-0" type="checkbox" value="" id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Peserta Sudah Memenuhi Persyaratan    
                                            </label>
                                        </div>
                                        <div id="accordion">
                                            <div class="card mt-3">
                                              <div class="card-header" id="headingOne">
                                                <p class="mb-0">
                                                  <button class="btn btn-link" style="font-size: 14px" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <span class="lnr lnr-chevron-down mr-2"></span>Persyaratan Raja Ampat Jumping Carnival
                                                  </button>
                                                </p>
                                              </div>
                                          
                                              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-justify">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="btn-cursor next btn biru title-white btn-block btn-md mt-3" value="SELANJUTNYA >" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="h4 title-biru mb-4">Konfirmasi Pemesanan</p>
                                        <hr>
                                    </div>
                                </div>
                                {{-- <div class="font-weight-bold">
                                </div> --}}
                                <p class="font-weight-bold">DATA PEMESAN</p>
                                  <div class="card text-nowrap" style="overflow-x:auto;">
                                    <div class="card-body border title-black" style="background: #F4F5FA">
                                        <p class="h6 card-title" style="font-weight: 500;">Nafisah Karimah</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text m-0" style="color:#A1A1A1;">EMAIL</p>
                                                <p class="m-0">nafisahkarimah@gmail.com</p>
                                            </div>
                                            <div class="col">
                                                <p class="card-text m-0" style="color:#A1A1A1;">NO. HP</p>
                                                <p class="m-0">089746735261</p>
                                            </div>
                                        </div>
                                    </div>
                                  </div>    
                                <p class="mt-3 font-weight-bold">DATA PESERTA</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Tipe ID</th>
                                            <th scope="col">Nomor ID</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Abdurrahman Jaisy Muhammad</td>
                                                <td>12 April 2020</td>
                                                <td>Otto</td>
                                                <td>12345678901232</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Abdurrahman Jaisy Muhammad</td>
                                                <td>12 April 2020</td>
                                                <td>Otto</td>
                                                <td>12345678901232</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Abdurrahman Jaisy Muhammad</td>
                                                <td>12 April 2020</td>
                                                <td>Otto</td>
                                                <td>12345678901232</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="row">

                                <input type="button" name="previous" class="previous btn btn-outline-secondary btn-block btn-md col-4" value="< SEBELUMNYA" />
                                <input type="button" name="next" class="next btn btn-block btn-md biru title-white col-8" value="SELANJUTNYA >" />
                            </div> --}}

                                <input type="button" name="previous" class="btn-cursor previous btn btn-outline-secondary btn-md col-3 float-left" value="< SEBELUMNYA" />
                                <input type="button" name="next" class="btn-cursor next btn btn-md biru title-white col-8 float-right" value="SELANJUTNYA >" />
                            
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic"
                                    accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input
                                    type="file" name="pic" accept="image/*">
                            </div> <input type="button" name="next" class="next action-button" value="Submit" />
                            <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="checkout-summary border" id="checkout-summary">
                    <div id="summary">
                        <div class="order-summary card">
                            <div class="checkout-header">
                                <h5 class="order-product">
                                    Uji Adrenalin di Pantai Timang dan Wedi Ombo 
                                </h5>
                                <p class="order-date">
                                    Rabu, 28 April 2021
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="order-row">
                                    <div class="order-column">
                                        <div class="strong">
                                            Grup Min 2- 4 Orang
                                        </div>
                                        <div class="small">
                                            2 pax @
                                            IDR 550,000
                                        </div>
                                    </div>
                                    <div class="order-column">
                                        IDR 1,100,000
                                    </div>
                                </div>
                                <span>
                                    <div class="order-row order-footer order-subtotal">
                                        <div class="order-column">
                                            Subtotal
                                        </div>
                                        <div class="order-column">
                                            IDR 1,100,000
                                        </div>
                                    </div>
                                    <div class="order-row order-footer order-total">
                                        <div class="order-column">
                                            Total
                                        </div>
                                        <div class="order-column">
                                            IDR
                                            <span>
                                                1,100,000
                                            </span>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    {{-- <div class="row">
    </div>
    <script>
    </script> --}}
@endsection
