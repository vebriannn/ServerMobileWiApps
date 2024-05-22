<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3"> Wisata <sup>Server</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : ''}}">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    {{-- <li class="nav-item {{ request()->routeIs('admin.kelolah') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.kelolah')}}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Kelolah Data Masuk</span>
        </a>
    </li> --}}
    {{-- <li class="nav-item {{ request()->routeIs('admin.kelolah.expired') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.kelolah.expired')}}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Kelolah Data Expired</span>
        </a>
    </li> --}}

</ul>
