<?php $__env->startSection('content'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h2">User</h3>
        </div>

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="table-responsive small col-lg-10">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <a href="/dashboard/users/create" class="text-decoration-none badge bg-success ms-1">Create New User</a>
            <?php endif; ?>
            <table class="table table-striped table-sm mt-2">
                <thead>
                <tr>
                    <th scope="col">Id User</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Program Studi</th>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                        <th scope="col">Action</th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id_user); ?></td>
                        <td><?php echo e($user->nama_user); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->role->nama_role); ?></td>
                        <td><?php echo e(($user->programStudi->nama_program_studi) ?? '-'); ?></td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                        <td>
                            <a href="/dashboard/users/<?php echo e($user->id_user); ?>/edit" class="badge bg-warning">
                                <span class="bi bi-pencil-square"></span>
                            </a>
                            <form method="post" action="/dashboard/users/<?php echo e($user->id_user); ?>" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <span class="bi bi-x"></span>
                                </button>
                            </form>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="500"></canvas>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/user/index.blade.php ENDPATH**/ ?>