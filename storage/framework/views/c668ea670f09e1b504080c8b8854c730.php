<div class="row p-2">
  <div class="col-md-12">
    <div class="card">

       <div class="card-title p-2">

        </div>
        <div class="card-body bg-Alice Blue">

          <h5><b><?php echo e($title); ?></b></h5>

           <a href="/admin/kategori/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>

           <table class="table">
            <tr>
                <th>NO</th>
                <th>Name</th>
                <th>Action</th>
            </tr>

              <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td>
                <div class="d-flex">
                  <a href="/admin/kategori/<?php echo e($item->id); ?>/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                  <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                  <form action="/admin/kategori/<?php echo e($item->id); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                         <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                  </form> 
                </div>  
              </td>
            </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           </table>

           <?php echo e($kategori->links()); ?>

           </div>
        </div>
    </div> 
  </div>   <?php /**PATH D:\ukkhidayat\resources\views/admin/kategori/index.blade.php ENDPATH**/ ?>