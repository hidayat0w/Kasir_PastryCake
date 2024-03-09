<div class="row p-4">
  <div class="col-md-12">
    <div class="card">

      <div class="card-title p-1">

      </div>
      <div class="card-body">

        <h5><b><?php echo e($title); ?></b></h5>

        <a href="/kasir/transaksi/create" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah</a>

        <table class="table">
          <tr>
            <th>NO</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
          </tr>

          <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($item->created_at); ?></td>
            <td><?php echo e($item->kasir_name); ?></td>
            <td><?php echo e($item->total); ?></td>
            <td><?php echo e($item->status); ?></td>
            <td>
              <div class="d-flex">
                <form id="formPrint<?php echo e($item->id); ?>"
                  action="<?php echo e(route('print.invoice', ['id' => $item->id])); ?>"
                  method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-inverse-primary btn-icon" style="margin-left: 5px;">
                    <i class="fas fa-print"></i>
                </button>
            </form>
                <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                <form action="/kasir/transaksi/<?php echo e($item->id); ?>" method="POST">
                  <?php echo method_field('delete'); ?>
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <?php echo e($transaksi->links()); ?>

      </div>
    </div>
  </div>
</div>
<script>
  document.querySelector('.btn-primary').addEventListener('click', function() {
    this.disabled = true;
  });
</script<?php /**PATH D:\ukkhidayat\resources\views//admin/transaksi/index.blade.php ENDPATH**/ ?>