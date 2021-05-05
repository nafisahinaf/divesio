{{-- Navigation --}}
<nav id="navbarSupportedContent"
    class="nav px-0 vh-100 d-md-block bg-light sidebar position-fixed shadow overflow-auto pt-md-0 pt-5 pb-4 collapse navbar-body">
    <div class="pt-sm-3 pb-4 w-100">

        {{-- Isi konten --}}
        <ul id="nav-active" class="nav flex-column">
            <li class="d-md-block d-none text-center">
                <img src="{{ asset('img/DIVESIO - about.png') }}" class="mx-auto my-5" width="60%" alt="">
            </li>
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    Dashboard<span class="sr-only">(current)</span>
                    <i class='fas fa-home fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            <li class="nav-item {{ Request::is('profil') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/profil') }}">
                    Profil Akun<span class="sr-only">(current)</span>
                    <i class='fas fa-user fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            @role('admin')
            <li class="nav-item {{ Request::is('/dashboard/content/admin/users*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard/content/admin/users') }}">
                    User
                    {{-- <i class='bx bxs-id-card bx-xs bx-pull-right' style="margin-top: 0.2rem"></i> --}}
                    <i class='fas fa-users fa-pull-right' style="margin-top: 0.2rem"></i>

                </a>
            </li>
            <li class="nav-item {{ Request::is('/dashboard/content/admin/divecenter*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard/content/admin/divecenter') }}">
                    Dive Center
                    <i class='fas fa-store fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            <li class="nav-item {{ Request::is('/dashboard/content/admin/transaksi-all*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard/content/admin/transaksi-all') }}">
                    Transaksi
                    <i class='fas fa-money-check-alt fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            @elserole('divecenter')
            <p
                class="h6 sidebar-heading d-flex justify-content-between align-items-center py-3 px-4 mt-4 mb-2 text-muted text-bold" style="background-color: #fafafa">
                Dive Center
            </p>
            <li class="nav-item {{ Request::is('/dashboard/content/divecenter/profil*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard/content/divecenter/profil') }}">
                    Profil Dive Center
                    <i class='fas fa-id-card fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            <li class="nav-item {{ Request::is('/dashboard/content/divecenter/paketselam*') ? 'active' : '' }}">
                <a class="nav-link" href="#') }}">
                    Paket Selam
                    <i class='fas fa-swimming-pool fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            <li class="nav-item {{ Request::is('/dashboard/content/divecenter/add-paket*') ? 'active' : '' }}">
                <a class="nav-link" href="#') }}">
                    Tambah Paket Selam
                    <i class='fas fa-plus fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            <li class="nav-item {{ Request::is('/dashboard/content/divecenter/transaksi-divecenter*') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    Transaksi
                    <i class='fas fa-money-check-alt fa-pull-right' style="margin-top: 0.2rem"></i>
                </a>
            </li>
            @endrole

        </ul>
        {{-- End isi konten --}}

    </div>
</nav>
{{-- End Navigation --}}
