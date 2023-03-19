<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/"><img src="assets/images/logo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/"><img src="assets/images/logo-mini.png" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/me.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Mita</h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Home</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">
            <span class="nav-link">Simulasi</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('simulasi-transaksi-barang') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-washing-machine"></i>
                </span>
                <span class="menu-title">Transaksi Barang</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('simulasi') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-receipt"></i>
                </span>
                <span class="menu-title">Simulasi</span>
            </a>
        </li>

        <li class="nav-item nav-category">
            <span class="nav-link">Pages</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('kamar') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-hotel"></i>
                </span>
                <span class="menu-title">Kamar</span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-television-classic"></i>
                </span>
                <span class="menu-title">Fasilitas Kamar</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-sofa"></i>
                </span>
                <span class="menu-title">Fasilitas Hotel</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">Tamu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-key-variant"></i>
                </span>
                <span class="menu-title">Reservasi</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file"></i>
                </span>
                <span class="menu-title">Generate Laporan</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-key-variant"></i>
                </span>
                <span class="menu-title">Data Reservasi</span>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">User</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account"></i>
                </span>
                <span class="menu-title">Akun</span>
            </a>
        </li> --}}
        
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('guru') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account"></i>
                </span>
                <span class="menu-title">Guru</span>
            </a>
        </li> --}}
        
        {{-- Dropdown --}}
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="{{ url('kamar') }}ui-basic" aria-expanded="false"
        aria-controls="ui-basic">
        <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
        </div>
        </li> --}}
    </ul>
</nav>