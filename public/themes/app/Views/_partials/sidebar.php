<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="<?php echo base_url('/'); ?>" class="brand-link">
<img src="<?php echo base_url('themes/dist'); ?>
/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle
elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">SIAK Online</span>
</a>
<div class="sidebar">
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="<?php echo base_url('themes/dist'); ?>
/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Admin</a> </div>
</div>
<nav class="mt-2">

<ul class="nav nav-pills nav-sidebar flex-column" data-
widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="<?php echo base_url('/'); ?>" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>Dashboard</p> </a></li>
<li class="nav-item">
<a href="<?php echo base_url('fakultas'); ?>" class="nav-link">
<i class="nav-icon fas fa-tags"></i>
<p>Data Fakultas</p> </a></li>
<li class="nav-item">
<a href="<?php echo base_url('prodi'); ?>" class="nav-link">
<i class="nav-icon fas fa-cart-plus"></i>
<p>Data Prodi</p> </a></li>
<li class="nav-item">
<a href="<?php echo base_url('dosen'); ?>" class="nav-link">
<i class="nav-icon fas fa-dollar-sign"></i>
<p>Data Dosen</p> </a> </li>
<li class="nav-item">
<a href="<?php echo base_url('mahasiswa'); ?>" class="nav-link">
<i class="nav-icon fas fa-dollar-sign"></i>
<p>Data Mahasiswa</p> </a></li>
<li class="nav-header">ACCOUNT</li>
<li class="nav-item">
<a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
<p class="text">Logout</p> </a> </li>
</ul>
</nav>
</div>
</aside>