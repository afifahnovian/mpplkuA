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
                    <a href="{{route('admin-dashboard')}}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin-diproses')}}">
                        <i class="fe-airplay"></i>
                        <span> Surat Diproses </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin-masuk')}}">
                        <i class="fe-airplay"></i>
                        <span> Surat Masuk </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin-selesai')}}">
                        <i class="fe-airplay"></i>
                        <span> Surat Selesai </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin-ditolak')}}">
                        <i class="fe-airplay"></i>
                        <span> Surat Ditolak </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin-create')}}">
                        <i class="fe-airplay"></i>
                        <span> Create Admin </span>
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