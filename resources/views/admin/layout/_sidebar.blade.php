    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">App Mama <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>
        @if (auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{url('user')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Manage User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user/bidan">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>User Bidan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user/rs">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>User Rs</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('user/skl')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>SKL</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('user/edu')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Manage Artikel</span></a>
        </li>
        @endif
        @if (auth()->user()->role == 'bidan')
        <li class="nav-item">
            <a class="nav-link" href="{{url('kontrol',auth()->user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Kontrol</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('setting',auth()->user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>setting</span></a>
        </li>
        @endif
        @if (auth()->user()->role == 'rs')
        <li class="nav-item">
            <a class="nav-link" href="{{url('kamar',auth()->user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Manage Kamar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('mybook',auth()->user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Kamar Terbooking</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('setting',auth()->user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>setting</span></a>
        </li>
        @endif
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>back</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->