<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!-- LOGO -->

        <!-- User box -->
        <div class="user-box">
            <img src="{{asset('highdamin/light/assets/images/users/avatar-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle" height="48">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Afifah Noviani</a>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{route('admin-dashboard')}}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-mail"></i>
                        <span> Pengajuan Surat </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin-masuk')}}">Surat Masuk</a></li>
                        <li><a href="{{route('admin-diproses')}}">Surat Diproses</a></li>
                        <li><a href="{{route('admin-selesai')}}">Surat Selesai</a></li>
                        <li><a href="{{route('admin-ditolak')}}">Surat Ditolak</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('admin-create')}}">
                        <i class="fe-airplay"></i>
                        <span> Pengaturan Admin </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->