<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-info sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">

  </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <?php if(auth()->check()): ?>     -->
      <div class="image">
        <img src="/vendor/admin/dist/img/resto.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"></a>
      </div>
      <!-- <?php endif; ?> -->
    </div>

    <a href="#" class="brand-link">
      <!--img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"!-->
      <span class="brand-text font-weight-light"><b>Kasir Mainan</b></span>
    </a>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php if(auth()->user()->role!="admin"): ?>
        <div class="card-header">
          <b>Pembayaran</b>
        </div>
        <?php endif; ?>
        <?php if(auth()->user()->role!="admin"): ?>
        <li class="nav-item">
          <a href="/kasir/transaksi" class="nav-link  <?php echo e(Request::is('admin/transaksi*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if(auth()->user()->role!="pengguna"): ?>
        <li class="nav-item">
          <a href="/kasir/riwayat" class="nav-link  <?php echo e(Request::is('admin/user*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-frog"></i>
            <p>
              <p class=text-white>Riwayat</p>
            </p>
          </a>
        </li>
        <?php endif; ?>
       
       
        <?php if(auth()->user()->role!="pengguna"): ?>
        <div class="card-header">
         <b>Produk Mainan</b>
        </div>
        <li class="nav-item">
          <a href="/admin/produk" class="nav-link  <?php echo e(Request::is('admin/produk*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Produk
            </p>
          </a>
        </li>
        <div class="card-header">
          <b></b>
        </div>
        <?php endif; ?>
        <?php if(auth()->user()->role!="pengguna"): ?>
        <li class="nav-item">
          <a href="/admin/kategori" class="nav-link  <?php echo e(Request::is('admin/kategori*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
        <div class="card-header">
          <b>Pengguna</b>
        </div>
        <?php endif; ?>
        <?php if(auth()->user()->role!="pengguna"): ?>
        <li class="nav-item">
          <a href="/admin/user" class="nav-link  <?php echo e(Request::is('admin/user*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<div class="content-wrapper"><?php /**PATH D:\rizalherisdianto\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>