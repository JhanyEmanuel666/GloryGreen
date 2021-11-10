<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Glory Green</div>
        
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_profile'); ?>">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Profil</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_team') ;?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Kelola Team</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_player') ;?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Kelola Player</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_berita') ;?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Kelola Berita</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_jadwal') ;?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Kelola Jadwal</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_season') ;?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Kelola Season MPL</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_about') ;?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Kelola About</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ;?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>