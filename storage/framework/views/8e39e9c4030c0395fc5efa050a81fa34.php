<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4">Admin Login</h3>
                <form action="<?php echo e(route('admin.login.submit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger mt-3">
                            <?php echo e($errors->first('email')); ?>

                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH D:\SEMESTER 5\Pemrograman Framework\2023150103-IDAMAS\laravel\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>