<?php $__env->startSection('content'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h3">Polling Mata Kuliah Semester Antara</h3>
        </div>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <a href="/dashboard/polling-matakuliah/create" class="text-decoration-none badge bg-success">Create Polling
            Baru</a>
        <a href="/dashboard/polling-matakuliah/hasil" class="text-decoration-none badge bg-success">Lihat Hasil
            Polling</a>
        <form method="post" action="/dashboard/polling-matakuliah-detail">
            <?php echo csrf_field(); ?>
            <div class="col-lg-5">
                <div class="mb-3">
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="id_polling" value="<?php echo e($data->id_polling); ?>">
                        <p for="Periode" class="form-label">Periode
                            buka: <?php echo e(\Carbon\Carbon::parse($data->start_at)->format('d F Y')); ?>

                            - <?php echo e(\Carbon\Carbon::parse($data->end_at)->format('d F Y')); ?>

                            <a href="/dashboard/polling-matakuliah/<?php echo e($data->id_polling); ?>/edit"
                               class="text-decoration-none badge bg-dark mb-2m s-2 mt-4">Edit Polling</a>
                        <form method="post" action="/dashboard/polling-matakuliah/<?php echo e($data->id_polling); ?>"
                              class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                        </p>
                        <label for="Kode MataKuliah" class="form-label">Kode - Nama Mata Kuliah</label>
                        <?php $__currentLoopData = $mks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check" required>
                                <input class="form-check-input mata-kuliah" type="checkbox"
                                       value="<?php echo e($mk->id_mataKuliah); ?>"
                                       data-sks="<?php echo e($mk->sks); ?>" id="id_mataKuliah" name="id_mataKuliah[]">
                                <label class="form-check-label" for="Kode - Nama Matakuliah">
                                    <?php echo e($mk->id_mataKuliah); ?> - <?php echo e($mk->nama_mataKuliah); ?>

                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <p class="fw-bold" id="total-sks">
                Total SKS: 0
            </p>
            <p id="error" class="text-danger"></p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <canvas class="my-4 w-100" id="myChart" width="900" height="500"></canvas>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-tambahan'); ?>
    <script>
        $(document).ready(function () {
            $('.mata-kuliah').change(function () {
                var total = 0;
                $('.mata-kuliah:checked').each(function () {
                    total += parseInt($(this).data('sks'));
                });
                $('#total-sks').text('Total SKS: ' + total);

                if (total > 9) {
                    $('#error').text('Total SKS tidak boleh lebih dari 9').show();
                } else {
                    $('#error').hide();
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/polling/index.blade.php ENDPATH**/ ?>