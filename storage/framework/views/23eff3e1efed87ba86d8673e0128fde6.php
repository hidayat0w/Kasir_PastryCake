<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi</title>
    <style>
        /* Gaya CSS Anda di sini */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<?php
    // Urutkan $transaksiDetails berdasarkan transaksi_id
    $transaksiDetails = $transaksiDetails->sortBy('transaksi_id');
?>

<body>
    <?php $__currentLoopData = $transaksiDetails->groupBy('transaksi_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi_id => $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-bottom: 15px;">
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="4">Transaksi ID: # INV-00230<?php echo e($transaksi_id); ?></th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php if($key === 0): ?>
                                <td rowspan="<?php echo e(count($transaksi)); ?>"><?php echo e($key + 1); ?></td>
                                <td rowspan="<?php echo e(count($transaksi)); ?>"><?php echo e($trx->created_at->format('d F Y')); ?></td>
                                <td><?php echo e($trx->produk_name); ?></td>
                                <td><?php echo e($trx->qty); ?></td>
                            <?php else: ?>
                                <td><?php echo e($trx->produk_name); ?></td>
                                <td><?php echo e($trx->qty); ?></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
    
    
    

</html><?php /**PATH D:\ukkhidayat\resources\views/riwayat/riwayat_pdf.blade.php ENDPATH**/ ?>