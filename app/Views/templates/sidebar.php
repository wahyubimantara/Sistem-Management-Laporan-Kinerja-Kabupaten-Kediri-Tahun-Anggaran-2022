<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-dragon"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Senyum <sup>boss</i></sup></div>
</a>
<?php if(in_groups('admin')) : ?> <!-- Isi disini jika hak akses hanya admin -->
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User Management
</div>

<!-- Nav Item - User List -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
        <i class="fas fa-users"></i>
        <span>User List</span></a>
</li>

<?php endif; ?>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User Profile
</div>

<!-- Nav Item - My Profile -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
        <i class="fas fa-user"></i>
        <span>My Profile</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Tabel
</div>

<!-- Nav Item - MTabel -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('EditKinerja'); ?>">
        <i class="fas fa-table"></i>
        <span>Kinerja</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Logout -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
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