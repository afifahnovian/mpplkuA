<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!-- LOGO -->
        <div class="logo-box">
            <a href="#" class="logo">
                <span class="logo-lg">
                    <img src="{{asset('highdamin/light/assets/images/logo-dark.png')}}" alt="" height="22">
                </span>
            </a>
        </div>
        <!-- User box -->
        <div class="user-box">
            <img src="{{asset('highdamin/light/assets/images/users/avatar-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle" height="48">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Nama User</a>
            </div>
            <p class="text-muted">G64170000</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{route('user-dashboard')}}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user-biodata')}}">
                        <i class="fe-airplay"></i>
                        <span> Biodata </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-mail"></i>
                        <span> Pengajuan Surat </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('user-surat-keterangan-aktif')}}">Surat Keterangan Mahasiswa Aktif</a></li>
                        <li><a href="{{route('user-surat-keterangan-lulus')}}">Surat Keterangan Lulus</a></li>
                        <li><a href="{{route('user-surat-perpanjangan-masa-studi')}}">Surat Perpanjangan Masa Studi</a></li>
                        <li><a href="{{route('user-surat-pengunduran-diri')}}">Surat Pengunduran Diri</a></li>
                        <li><a href="{{route('user-surat-keterangan-cuti')}}">Surat Keterangan Cuti</a></li>
                        <li><a href="{{route('user-surat-keterangan-aktif-cuti')}}">Surat Keterangan Aktif Setelah Cuti</a></li>
                        <li><a href="{{route('user-legalisir-transkrip')}}">Legalisir Transkrip</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->