<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
         aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-dark <?php echo e(Request::is('/') ? 'active': ''); ?>"
                       aria-current="page" href="/">
                        <svg class="bi">
                            <span class="bi bi-house"></span>
                        </svg>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-dark
                    <?php echo e(Request::is('dashboard/polling-matakuliah')
                        ? 'active': ''); ?>" href="/dashboard/polling-matakuliah">
                        <svg class="bi">
                            <i class="bi bi-file-post"></i>
                        </svg>
                        Polling Mata Kuliah
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('kaprodi')): ?>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 text-dark <?php echo e(Request::is('dashboard/matakuliah') ? 'active': ''); ?>"
                           href="/dashboard/mata-kuliah">
                            <svg class="bi">
                                <i class="bi bi-file-post"></i>
                            </svg>
                            Mata Kuliah
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('kaprodi')): ?>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 text-dark <?php echo e(Request::is('dashboard/users') ? 'active': ''); ?>"
                           href="/dashboard/users">
                            <svg class="bi">
                                <i class="bi bi-file-post"></i>
                            </svg>
                            Users
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <a class="nav-link d-flex align-items-center gap-2 text-dark" href="route('logout')"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <svg class="bi">
                                <i class="bi bi-door-closed"></i>
                            </svg>
                            <?php echo e(__('Log Out')); ?>

                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/dashboard/sidebar.blade.php ENDPATH**/ ?>