@extends('layouts.main')

@section('title', 'Profil')

@section('section')

<div class="container py-5">
    <section>
        <div class="row px-0 justify-content-between">

            <div class="col-3 p-0 py-4 border rad-30 white-bg">
                <div class="text-center py-4 my-2">
                    <img src="{{asset('img/DIVESIO - about.png')}}" alt="logodivesio" class="img-fluid" style="max-width: 50%;" >
                </div>
                <div class="list-group px-4" id="list-tab" role="tablist">
                    <p><a class="list-group-item list-group-item-action active" id="list-akunsaya-list" data-toggle="list" href="#list-akunsaya" role="tab" aria-controls="akunsaya"><span class="fas fa-user mr-2"></span> Akun Saya</a></p>
                    <p><a class="list-group-item list-group-item-action" id="list-password-list" data-toggle="list" href="#list-password" role="tab" aria-controls="password"><span class="fas fa-lock mr-2"></span>Ubah Kata Sandi</a></p>
                    <p><a class="list-group-item list-group-item-action" id="list-historipemesanan-list" data-toggle="list" href="#list-historipemesanan" role="tab" aria-controls="historipemesanan"><span class="fas fa-list mr-2"></span>Histori Pemesanan</a></p>
                </div>
            </div>

            <div class="col-9">
              <div class="border rad-30 white-bg ml-3 tab-content" id="nav-tabContent" style="height:100%;">
                <div class="tab-pane fade show active" id="list-akunsaya" role="tabpanel" aria-labelledby="list-akunsaya-list">
                    <div class="row m-0 radlr-30 p-4 border-bottom" style="background-color: #FAFAFA">
                        <div class="col-1 p-3 biru-gradient rounded text-white text-center ml-2 mt-2">
                            <span class="fas fa-user">
                        </div>
                        <div class="col d-flex align-items-center mt-2">
                            <p class="h5 m-0">Akun Saya</p>
                        </div>
                    </div>
                    <form class="p-4 mx-2">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="t"ext class="form-control" id="namaLengkap" aria-describedby="namaLengkap" placeholder="Nama Lengkap">
                          </div>
                        <div class="form-group">
                          <label for="alamatEmail">Email address</label>
                          <input type="email" class="form-control" id="alamatEmail" aria-describedby="emailHelp" placeholder="Alamat Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">No. Handphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="081227383927">
                        </div>
                        <button type="submit" class="ml-auto mr-0 btn btn-success d-flex justify-content-end mt-4">Perbarui</button>
                      </form>
                </div>
                <div class="tab-pane fade" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
                    <div class="row m-0 radlr-30 p-4 border-bottom" style="background-color: #FAFAFA">
                        <div class="col-1 p-3 biru-gradient rounded text-white text-center ml-2 mt-2">
                            <span class="fas fa-lock">
                        </div>
                        <div class="col d-flex align-items-center mt-2">
                            <p class="h5 m-0">Ubah Kata Sandi</p>
                        </div>
                    </div>
                    <form class="p-4 mx-2">
                        <div class="form-group">
                            <label for="inputPassword" class="visually-hidden">Kata Sandi Saat Ini</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="currentpassword" required autocomplete="current-password">
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Kata Sandi Baru') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror    
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Konfirmasi Kata Sandi Baru') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="ml-auto mr-0 btn btn-success d-flex justify-content-end mt-4">Perbarui</button>

                      </form>
                </div>
                <div class="tab-pane fade" id="list-historipemesanan" role="tabpanel" aria-labelledby="list-historipemesanan-list">
                    <div class="row m-0 radlr-30 p-4 border-bottom" style="background-color: #FAFAFA">
                        <div class="col-1 p-3 biru-gradient rounded text-white text-center ml-2 mt-2">
                            <span class="fas fa-list">
                        </div>
                        <div class="col d-flex align-items-center mt-2">
                            <p class="h5 m-0">Histori Pemesanan</p>
                        </div>
                    </div>
                    <div class="p-4 m-2">
                        <table id="table" class="table table-bordered dt-responsive p-0" style="width:100%">
                            <thead style="background-color: #fafafa;">
                                <tr class="text-center" style="font-weight: 600;">
                                    <td style="width: 10px">No</td>
                                    <td>Nama Paket</td>
                                    <td>Tanggal Pesan</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td><span class="d-inline-block text-truncate" style="min-width: 100%; width: 13vw;">
                                        {{-- {{ $row->name }} --}}
                                        Paket Selam 3D 1N
                                    </span></td>
                                    <td class="fit-content text-center"><span class="d-inline-block text-truncate">
                                        {{-- {{ $row->email }} --}}
                                        13/10/2020
                                    </span></td>
                                    <td class="text-center">
                                        LUNAS
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td><span class="d-inline-block text-truncate" style="min-width: 100%; width: 13vw;">
                                        {{-- {{ $row->name }} --}}
                                        Paket Selam 3D 1N
                                    </span></td>
                                    <td class="fit-content text-center"><span class="d-inline-block text-truncate">
                                        {{-- {{ $row->email }} --}}
                                        13/10/2020
                                    </span></td>
                                    <td class="text-center">
                                        LUNAS
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td><span class="d-inline-block text-truncate" style="min-width: 100%; width: 13vw;">
                                        {{-- {{ $row->name }} --}}
                                        Paket Selam 3D 1N
                                    </span></td>
                                    <td class="fit-content text-center"><span class="d-inline-block text-truncate">
                                        {{-- {{ $row->email }} --}}
                                        13/10/2020
                                    </span></td>
                                    <td class="text-center">
                                        LUNAS
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td><span class="d-inline-block text-truncate" style="min-width: 100%; width: 13vw;">
                                        {{-- {{ $row->name }} --}}
                                        Paket Selam 3D 1N
                                    </span></td>
                                    <td class="fit-content text-center"><span class="d-inline-block text-truncate">
                                        {{-- {{ $row->email }} --}}
                                        13/10/2020
                                    </span></td>
                                    <td class="text-center">
                                        LUNAS
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim</div>
              </div>
            </div>
          </div>
    </section>
</div>

@endsection