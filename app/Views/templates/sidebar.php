<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">My Apps</div>
    </a>

    <?php if (in_groups('admin')) : ?>

        <!-- Divider Admin -->
        <hr class="sidebar-divider">

        <!-- Heading Admin -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - Admin Profile -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?> ">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
    <?php endif; ?>

    <!-- Heading User-->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?> ">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile User -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>