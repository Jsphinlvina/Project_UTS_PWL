<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container">
        <a class="navbar-brand" href="/home">Belajar Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('categories') ? 'active' : ''); ?>" href="/categories">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('blogs')? 'active' : ''); ?>" href="/blogs">Blogs</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <?php echo e(auth()->user()->name); ?>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <a href="route('logout')" class="dropdown-item"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <?php echo e(__('Log Out')); ?>

                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item ">
                        <a href="<?php echo e(route('login')); ?>" class="nav-link">Log in</a>
                    </li>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item me-3">
                            <a href="<?php echo e(route('register')); ?>" class="nav-link">Register</a>
                        </li>
                    <?php endif; ?>

                <?php endif; ?>

            </ul>

            <form class="d-flex" role="search" action="/blogs">
                <?php if(request('category')): ?>
                    <input type="hidden" placeholder="Search" aria-label="Search" name="category"
                           value="<?php echo e(request('category')); ?>">
                <?php endif; ?>
                <?php if(request('user')): ?>
                    <input type="hidden" placeholder="Search" aria-label="Search" name="user"
                           value="<?php echo e(request('user')); ?>">
                <?php endif; ?>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"
                       value="<?php echo e(request('search')); ?>">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\PWL\PWL_Project_UTS\main\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>