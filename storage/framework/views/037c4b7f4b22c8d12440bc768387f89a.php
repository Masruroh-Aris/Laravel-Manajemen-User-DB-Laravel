<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
   
     #sidebar-wrapper {
        position: fixed;
        top: 56px; /* agar tidak menutupi navbar */
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #f8f9fa;
        border-right: 1px solid #dee2e6;
        padding-top: 20px;
        overflow-y: auto;
        transition: all 0.3s ease;
        }

    .sidebar-heading {
        font-size: 1.2rem;
        font-weight: 600;
        color: #343a40;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .list-group-item {
        border: none;
        padding: 12px 20px;
        color: #343a40;
        font-weight: 500;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .list-group-item:hover {
        background-color: #0d6efd;
        color: #fff;
    }

    /* === Content Area Adjustment === */
    .container {
        margin-left: 270px; /* memberi ruang agar tidak tertutup sidebar */
        transition: margin-left 0.3s ease;
    }

    /* Responsive: sembunyikan sidebar di layar kecil */
    @media (max-width: 992px) {
        #sidebar-wrapper {
            position: relative;
            width: 100%;
            height: auto;
            top: 0;
            border-right: none;
        }

        .container {
            margin-left: 0;
        }
    }
</style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">Admin Panel</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <aside class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-3">
        <strong>Menu Admin</strong>
    </div>
    <div class="list-group list-group-flush">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo e(route('admin.users.index')); ?>" class="list-group-item list-group-item-action bg-light">Manajemen User</a>
        <a href="" class="list-group-item list-group-item-action bg-light">Aktivitas</a>
    </div>
</aside>

    <div class="container mt-5">
        <h1 class="text-center">Selamat Datang di Halaman Admin</h1>
        <p class="text-center">Anda login sebagai <strong><?php echo e(Auth::user()->email); ?></strong></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\SEMESTER 5\Pemrograman Framework\2023150103-IDAMAS\laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>