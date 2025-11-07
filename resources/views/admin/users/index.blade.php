<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen User</title>
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
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
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
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action bg-light">Manajemen User</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Aktivitas</a>
        </div>
    </aside>

    <div class="content-wrapper">
        <h1 class="mb-4">Manajemen User</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Tambah User</a>

        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
