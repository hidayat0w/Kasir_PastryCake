<div class="row p-2">
  <div class="col-md-12">
    <div class="card">

      <div class="card-title p-2">

      </div>
      <div class="card-body">

        <h5><b><?php echo e($title); ?></b></h5>

        <a href="/admin/produk/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>

        <table class="table">
          <tr>
            <th>No</th>
            <th>Foto Kue</th>
            <th>Nama Kue</th>
            <th>Stok Kue</th>
            <th>Harga Kue</th>
            <th>Kategori Kue</th>
            <th>Aksi</th>
          </tr>

          <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td>
              <img src="<?php echo e(asset($item->gambar)); ?>" alt="" style="max-width: 100px; max-height: 100px;">
            </td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->stok); ?></td> <!-- Tampilkan nilai stok -->
            <td><?php echo e($item->harga); ?></td> <!-- Tampilkan nilai harga -->
            <?php if($item->kategori): ?>
            <td><?php echo e($item->kategori->name); ?></td>
            <?php else: ?>
            <td>Kategori tidak tersedia</td>
            <?php endif; ?>
            <td>
              <div class="d-flex">
                <a href="/admin/produk/<?php echo e($item->id); ?>/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                <form action="/admin/produk/<?php echo e($item->id); ?>" method="POST">
                  <?php echo method_field('delete'); ?>
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <?php echo e($produk->links()); ?>

      </div>
    </div>
  </div>
</div><?php /**PATH D:\ukkhidayat\resources\views/admin/produk/index.blade.php ENDPATH**/ ?>