<ul class="navbar-nav sidebar  sidebar-dark sidebar .main .list-item:hover accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand-icon rotate-n-1">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <img class="sidebar-card-illustration mb-1" src={{url('/assets/Logo-MarinaFF.png')}} width="70" height="70">
        </div>
        <div class="sidebar-brand-text mx-3">Marina <sup>FrozenFood</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>


    <li class="nav-item">
        <a class="nav-link" href="{{ route ('kategori') }}">
            <i class="bi bi-tag-fill"></i>
            <span>Kategori</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route ('produk') }}">
            <i class="bi bi-cart-check-fill"></i>
            <span>Produk</span></a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('artikel') }}">
            <i class="bi bi-card-list"></i>
            <span>Artikel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route ('promo') }}">
            <i class="fas bi-bag-check-fill"></i>
            <span>Promo</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route ('transaksi') }}">
            <i class="bi bi-clipboard2-check-fill"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>