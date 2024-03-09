<div class="row p-2">

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <div class="row mt-1">
                    <div class="col-md-4">
                        <label for="">Kode Produk</label>
                    </div>
                    <div class="col-md-8">
                        <form method="GET">
                            <div class="d-flex">
                                <select name="produk_id" class="form-control" id="">
                                    <option value="">-- <?php echo e(isset($p_detail) ? $p_detail->name : 'Nama Produk'); ?> --
                                    </option>
                                    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->id. ' - ' .$item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <button type="submit" class="btn btn-primary">Pilih</button>
                            </div>
                        </form>
                    </div>
                </div>

                <form action="/kasir/transaksi/detail/create" method="POST">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="transaksi_id" value="<?php echo e(Request::segment(3)); ?>">
                    <input type="hidden" name="produk_id" value="<?php echo e(isset($p_detail) ? $p_detail->id : ''); ?>">
                    <input type="hidden" name="produk_name" value="<?php echo e(isset($p_detail) ? $p_detail->name : ''); ?>">
                    <input type="hidden" name="subtotal" value="<?php echo e($subtotal); ?>">

                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">Nama Produk</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="<?php echo e(isset($p_detail) ? $p_detail->name : ''); ?>" class="form-control" disabled name="nama_produk">
                        </div>
                    </div>
                    

                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="<?php echo e(isset($p_detail) ? $p_detail->harga : ''); ?>" class="form-control" disabled name="harga_satuan">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">Stok</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="<?php echo e(isset($p_detail) ? $p_detail->stok : ''); ?>" class="form-control" disabled name="stok">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">QTY</label>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex">
                                <a href="?produk_id=<?php echo e(request('produk_id')); ?>&act=min&qty=<?php echo e($qty); ?>" class="btn btn-primary"><i class="
                            fas fa-minus"></i></a>
                                <input type="number" value="<?php echo e($qty); ?>" id="qty" class="form-control" name="qty">
                                <a href="?produk_id=<?php echo e(request('produk_id')); ?>&act=plus&qty=<?php echo e($qty); ?>" class="btn btn-primary"><i class="
                            fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mt-1">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <h5>Subtotal : Rp. <?php echo e(format_rupiah($subtotal)); ?></h5>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <a href="/admin/transaksi" class="btn btn-info"><i class="fas fa-arrow-left"></i>
                                Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-right"></i>
                                Tambah</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>QTY</th>
                        <th>Subtotal</th>
                        <th>#</th>
                    </tr>

                    <?php $__currentLoopData = $transaksi_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->produk_name); ?></td>
                        <td><?php echo e($item->qty); ?></td>
                        <td><?php echo e('Rp. '.format_rupiah($item->subtotal)); ?></td>
                        <td>
                            <a href="/admin/transaksi/detail/delete?id=<?php echo e($item->id); ?>"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

                <a href="/kasir/transaksi/detail/selesai/<?php echo e(Request::segment(3)); ?>" class="btn btn-success"><i class="fas fa-check"></i> Konfirmasi</a>
            </div>
        </div>
    </div>

</div>

<div class="row p-2">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <form action="" method="GET">
                    <div class="form-group">
                        <label for="">Total Belanja</label>
                        <input type="number" value="<?php echo e($transaksi->total); ?>" name="total_belanja" disabled class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Dibayarkan</label>
                        <input type="number" name="dibayarkan" value="<?php echo e(request('dibayarkan')); ?>" class="form-control" id="">
                    </div>

                    <button type=" submit" class="btn btn-primary btn-block"> Hitung</button>
                </form>

                <hr>

                <div class="form-group">
                    <label for="">Uang Kembalian</label>
                    <input type="number" value="<?php echo e(format_rupiah($kembalian)); ?>" disabled name="kembalian" class="form-control" id="">
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\ukkhidayat\resources\views//admin/transaksi/create.blade.php ENDPATH**/ ?>