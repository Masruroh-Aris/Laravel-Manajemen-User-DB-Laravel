<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        }
        .content-wrapper {
            margin-left: 270px;
            margin-top: 70px;
            padding: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
    </div>
</nav>

<aside class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-3"><strong>Menu Admin</strong></div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action bg-light">Manajemen User</a>
    </div>
</aside>

<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Edit User</h2>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="shadow p-4 bg-white rounded">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi Baru (opsional)</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tidak diubah">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi Baru</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulangi jika mengganti password">
        </div>

        <div class="mb-3">
            <label for="is_admin" class="form-label">Tipe Akun</label>
            <select name="is_admin" id="is_admin" class="form-select" required>
                <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>User Biasa</option>
                <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
