<?php $__env->startSection('content'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h2">Create Polling Baru </h3>
        </div>
        <form method="post" action="/dashboard/polling-matakuliah">
            <?php echo csrf_field(); ?>
            <div class="col-lg-5">
                <div class="mb-3">
                    <label for="id_polling" class="form-label">ID Polling:</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['id_polling'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="id_polling" name="id_polling" value="<?php echo e(old('id_polling')); ?>">
                    <?php $__errorArgs = ['id_polling'];
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
                    <label for="start_at" class="form-label">Tanggal Mulai:</label>
                    <input type="date" class="form-control" id="start_at" name="start_at">
                </div>
                <div class="mb-3">
                    <label for="end_at" class="form-label">Tanggal Selesai:</label>
                    <input type="date" class="form-control" id="end_at" name="end_at">
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status Aktif:</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <canvas class="my-4 w-100" id="myChart" width="900" height="500"></canvas>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/polling/create.blade.php ENDPATH**/ ?>