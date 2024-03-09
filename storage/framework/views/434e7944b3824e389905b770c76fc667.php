<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <form id="printForm" action="<?php echo e(route('riwayat.print')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-inverse-info">
                    <i class="fas fa-print"></i>
                </button>
            </form>
            
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Histori Transaksi</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ryt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($ryt->created_at->format('d F Y')); ?></td>
                                    <td><?php echo e(format_rupiah($ryt->total)); ?></td>
                                    <td><?php if($ryt->status == 'selesai'): ?>
                                        <span >Selesai</span>
                                        <?php else: ?>
                                        <span>Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if(auth()->user()->role!="pengguna"): ?>
                                        <form action="<?php echo e(route('riwayat.destroy', ['id' => $ryt->id])); ?>" method="POST">
                                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-inverse-danger btn-icon" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><?php /**PATH D:\rizalherisdianto\resources\views//riwayat/index.blade.php ENDPATH**/ ?>