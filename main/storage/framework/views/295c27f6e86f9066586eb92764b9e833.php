<?php $__env->startSection('content'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h2">Dashboard</h3>
        </div>

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="table-responsive small col-lg-6
        ">
            <table class="table table-striped table-sm mt-2">
                <thead>
                <tr>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah polling</th>
                </tr>
                </thead>
                <tbody>






















                </tbody>
            </table>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="500"></canvas>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/dashboard/index.blade.php ENDPATH**/ ?>