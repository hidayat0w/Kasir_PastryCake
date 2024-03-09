<div class="container-fluid mt-2">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body"> 

                <h5><b><?php echo e($title); ?></b></h5>
                <a href="/admin/user/create" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah </a>
                
                <?php if(session()->has('success')): ?>
                   <div class="alert alert-success mt-2"><i class="fas fa-check"></i>
                    <?php echo e(session('success')); ?>

                   </div>
                <?php endif; ?>

                <table class="table mt-1">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td>
                            <div class="d-flex">
                            <a href="/admin/user/<?php echo e($item->id); ?>/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                            <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                            <form action="/admin/user/<?php echo e($item->id); ?>" method="POST">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                            </form> 
                          
                         </div>
                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH D:\ukkhidayat\resources\views/admin/user/index.blade.php ENDPATH**/ ?>