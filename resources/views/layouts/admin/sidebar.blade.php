<!-- Sidebar -->
<div class="position-sticky top-0 h-100" style="width: fit-content;">
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #38527E" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-home"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pusat Halal Insan Kamil<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            menu
        </div>
        <li class="nav-item {{ Request::is('kelola-pendaftaran*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kelola-pendaftaran.index') }}">
                <i class="fas fa-fw fa-user-plus"></i>
                <span>Pendaftaran</span></a>
        </li>
        <li class="nav-item {{ Request::is('kelola-artikel*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kelola-artikel.index') }}">
                <i class="fas fa-fw fa-blog"></i>
                <span>Artikel</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/dataset*') ? 'active' : '' }}">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-bullhorn"></i>
                <span>Berita</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/dataset*') ? 'active' : '' }}">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-question-circle"></i>
                <span>FAQ</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
</div>
<!-- End of Sidebar -->
