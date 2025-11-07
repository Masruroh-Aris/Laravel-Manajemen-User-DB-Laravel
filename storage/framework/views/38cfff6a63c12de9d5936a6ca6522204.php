<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #sidebar-wrapper {
            position: fixed;
            top: 56px;
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
        .content-wrapper {
            margin-left: 270px;
            margin-top: 70px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        @media (max-width: 992px) {
            #sidebar-wrapper {
                position: relative;
                width: 100%;
                height: auto;
                top: 0;
                border-right: none;
            }
            .content-wrapper {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">Admin Panel</a>
    </div>
</nav>

<aside class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-3">
        <strong>Menu Admin</strong>
    </div>
    <div class="list-group list-group-flush">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo e(route('admin.users.index')); ?>" class="list-group-item list-group-item-action bg-light">Manajemen User</a>
    </div>
</aside>

<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Tambah User</h2>
        <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-secondary">Kembali</a>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.users.store')); ?>" method="POST" class="shadow p-4 bg-white rounded">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="is_admin" class="form-label">Tipe Akun</label>
            <select name="is_admin" id="is_admin" class="form-select" required>
                <option value="0">User Biasa</option>
                <option value="1">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\SEMESTER 5\Pemrograman Framework\2023150103-IDAMAS\laravel\resources\views/admin/users/create.blade.php ENDPATH**/ ?>