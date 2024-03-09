<!-- Main Sidebar Container -->
<aside style="background-color : #004544;" class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">

  </a>


    <a href="#" class="brand-link">
      <!--img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"!-->
      <span class="brand-text font-weight-light"><b>PastryCake</b></span>
    </a>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/admin/adasboard" class="nav-link  <?php echo e(Request::is('/') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php if(optional(auth()->user())->role != "admin"): ?>
        <div class="card-header">
          <b class="text-white">Pembayaran</b>
        </div>
        <?php endif; ?>
        <?php if(optional(auth()->user())->role != "admin"): ?>
        <li class="nav-item">
          <a href="/kasir/transaksi" class="nav-link  <?php echo e(Request::is('kasir/transaksi*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if(optional(auth()->user())->role != "pengguna"): ?>
        <li class="nav-item">
          <a href="/kasir/riwayat" class="nav-link  <?php echo e(Request::is('kasir/riwayat*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Riwayat
            </p>
          </a>
        </li>
        <?php endif; ?>
       
       
        <?php if(optional(auth()->user())->role != "pengguna"): ?>
        <li class="nav-item">
          <a href="/admin/produk" class="nav-link  <?php echo e(Request::is('admin/produk*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Produk
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if(optional(auth()->user())->role != "pengguna"): ?>
        <li class="nav-item">
          <a href="/admin/kategori" class="nav-link  <?php echo e(Request::is('admin/kategori*') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if(optional(auth()->user())->role != "pengguna"): ?>
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

<div class="content-wrapper"><?php /**PATH D:\ukkhidayat\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>