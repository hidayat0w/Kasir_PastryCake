<div class="row p-2">
  <div class="col-md-6">
    <div class="card">

       <div class="card-title p-2">

        </div>
        <div class="card-body">

          <h5><b><?php echo e($title); ?></b></h5>
          <hr>

           <?php if(isset( $kategori)): ?>
               <form action="/admin/kategori/<?php echo e($kategori->id); ?>" method="POST">
                 <?php echo method_field('PUT'); ?>
           <?php else: ?>
                <form action="/admin/kategori" method="POST">
           <?php endif; ?>

          <?php echo csrf_field(); ?>
              <label for="">Nama Kategori</label>
              <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
              placeholder="Nama kategori" value="<?php echo e(isset($kategori) ? $kategori->name : old('name')); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <div class="invalid-feedback">
                    <?php echo e($message); ?>

                 </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


              <a href="/admin/kategori" class="btn btn-info mt-2"><i class="fas fa-arrow-left"></i> 
              kembali</a>
              <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-save"></i> Simpan</
              button>
          </form>
          
           </div>
        </div>    
    </div> 
</div>   <?php /**PATH D:\ukkhidayat\resources\views/admin/kategori/create.blade.php ENDPATH**/ ?>