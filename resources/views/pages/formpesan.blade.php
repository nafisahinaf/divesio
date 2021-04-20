@extends('layouts.main')

@section('title', 'Form Pemesanan')

@section('section')
    <div class="row">
        <div class="container mt-10">
            <p class="h3 title-biru mt-40">Checkout Pemesanan</h2>
            <p class="mt-2">Raja Ampat Jumping Carnival</p>
            <!-- progressbar -->
            <ul class="mt-50 mb-50" id="progressbar">
                <li class="active" id="peserta">Data Peserta</li>
                <li id="konfirmasi">Konfirmasi Pemesanan</li>
                <li id="payment">Pembayaran</li>
                <li id="tiket">E-Voucher</li>
            </ul>
            <div class="col-8 p-4 border mt-5 col-7 mb-5">
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
                            <input type="button" name="next" class="next btn biru title-white btn-block btn-md mt-3" value="Selanjutnya" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="h4 title-biru mb-4">Konfirmasi Pemesanan</p>
                                        <hr>
                                    </div>
                                </div>
                                  <div class="card">
                                    <div class="font-weight-bold">
                                        DATA PEMESAN
                                    </div>
                                    <div class="card-body border title-black mt-2" style="background: #F4F5FA">
                                        <p class="card-title text-uppercase" style="font-weight: 500;">Nafisah Karimah</p>
                                        <p class="card-text">Email: nafisahkarimah@gmail.com</p>
                                        <p class="card-text">No. HP: 089746735261</p>
                                    </div>
                                  </div>    
                                <P style="font-weight: 500;">DATA PESERTA</P>
                                <label class="fieldlabels">First Name: *</label>
                                <input type="text" name="fname" placeholder="First Name" />
                                <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname"
                                    placeholder="Last Name" />
                                <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno"
                                    placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label>
                                <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input
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
        </div>
    </div>
    <script>
    </script>
@endsection
