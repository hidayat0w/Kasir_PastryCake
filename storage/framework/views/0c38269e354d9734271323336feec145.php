<div class="row p-2">
  <div class="col-md-6">
    <div class="card">

       <div class="card-title p-2">
        

        </div>
        <div class="card-body">

          <h5><b><?php echo e($title); ?></b></h5>
          <hr>

           <?php if(isset( $produk)): ?>
               <form action="/admin/produk/<?php echo e($produk->id); ?>" method="POST" enctype="multipart/form-data">
                 <?php echo method_field('PUT'); ?>
           <?php else: ?>
                <form action="/admin/produk" method="POST"  enctype="multipart/form-data">
           <?php endif; ?>

          <?php echo csrf_field(); ?>
              <label for="">Nama Produk</label>
              <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
              placeholder="Nama Produk" value="<?php echo e(isset($produk) ? $produk->name : old('name')); ?>">
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

                <label for="">Nama Kategori</label>
                <select name="kategori_id" class="form-control  <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                id="">
                  <option value="">--kategori--</option>
                  <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($item->id); ?>" <?php echo e(isset($produk) ? $item->id ==
                        $produk->kategori_id ? 'selected' : '' : ''); ?>><?php echo e($item->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['kategori_id'];
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

                <label for="">Harga</label>
              <input type="number" name="harga" class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
              placeholder="Harga" value="<?php echo e(isset($produk) ? $produk->harga : old('harga')); ?>">
                <?php $__errorArgs = ['harga'];
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

                <label for="">Stok</label>
              <input type="number" name="stok" class="form-control <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
              placeholder="Stok" value="<?php echo e(isset($produk) ? $produk->stok : old('stok')); ?>">
                <?php $__errorArgs = ['stok'];
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

                <label for="">Gambar</label>
              <input type="file" name="gambar" class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
              value="<?php echo e(isset($produk) ? $produk->gambar : old('gambar')); ?>">
                <?php $__errorArgs = ['gambar'];
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

                <?php if(isset($produk)): ?>
                   <img src="/<?php echo e($produk->gambar); ?>" width="100px" alt="">
                <?php endif; ?>
                <br>

              <a href="/admin/kategori" class="btn btn-info mt-2"><i class="fas fa-arrow-left"></i> 
              kembali</a>
              <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-save"></i> Simpan</
              button>
          </form>
          
           </div>
        </div>    
    </div> 
</div>   <?php /**PATH D:\ukkhidayat\resources\views/admin/produk/create.blade.php ENDPATH**/ ?>