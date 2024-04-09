<?php $__env->startSection('content'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h2">Create Mata Kuliah Baru </h3>
        </div>
        <form method="post" action="/dashboard/mata-kuliah">
            <?php echo csrf_field(); ?>
            <div class="col-lg-5">
                <div class="mb-3">
                    <label for="Kode MataKuliah" class="form-label">Kode Mata Kuliah</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['id_mataKuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="id_mataKuliah"
                           name="id_mataKuliah" required autofocus
                           value="<?php echo e(old('id_mataKuliah')); ?>">
                    <?php $__errorArgs = ['id_mataKuliah'];
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
                </div>
                <div class="mb-3">
                    <label for="Nama Mata Kuliah" class="form-label">Nama</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['nama_mataKuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="nama_mataKuliah"
                           name="nama_mataKuliah"
                           required autofocus
                           value="<?php echo e(old('nama_mataKuliah')); ?>">
                    <?php $__errorArgs = ['nama_mataKuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class=" invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['sks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="sks"
                           min="1" max="4"
                           name="sks" required autofocus
                           value="<?php echo e(old('sks')); ?>" style="width: 200px;">
                    <?php $__errorArgs = ['sks'];
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
                </div>

                <div class="mb-3">
                    <label for="Semester" class="form-label">Semester</label>
                    <select class="form-select" name="id_semester" required>
                        <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('id_semester') == $mk->id_semester): ?>
                                <option value="<?php echo e($mk->id_semester); ?>"
                                        selected><?php echo e($mk->semester); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($mk->id_semester); ?>"><?php echo e($mk->semester); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Kode Program Studi" class="form-label">Kode Program Studi</label>
                    <select class="form-select" name="id_program_studi" required>
                        <?php $__currentLoopData = $ps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('kode_ps') == $mk->id_program_studi): ?>
                                <option value="<?php echo e($mk->id_program_studi); ?>"
                                        selected><?php echo e($mk->nama_program_studi); ?></option>
                            <?php else: ?>
                                <option
                                    value="<?php echo e($mk->id_program_studi); ?>"><?php echo e($mk->nama_program_studi); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Tahun Kurikulum" class="form-label">Tahun</label>
                    <select class="form-select" name="id_kurikulum" required>
                        <?php $__currentLoopData = $kurikulum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('kode_ps') == $mk->id_kurikulum): ?>
                                <option value="<?php echo e($mk->id_kurikulum); ?>"
                                        selected><?php echo e($mk->tahun); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($mk->id_kurikulum); ?>"><?php echo e($mk->tahun); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create Mata Kuliah</button>
            </div>
        </form>
        <canvas class="my-4 w-100" id="myChart" width="900" height="500"></canvas>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/matakuliah/create.blade.php ENDPATH**/ ?>