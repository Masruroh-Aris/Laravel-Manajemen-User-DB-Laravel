<body>
    @include('layouts.header')

    <div class=""container mt-5 mb-5>
        <h2>DAFTAR AKTIVITAS</h2>
        <a href="{{  route('aktivitas.create') }}" class="btn btn-primary mb-3">
            +Tambah Aktivitas
        </a>
        <table class="table table-bordered" border=1>
            <thead>
                <tr>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama_aktivitas}}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ date('d-m-Y-', strtotime($item->tanggal)) }}</td>
                    <td>{{ $item->status ? 'Selesai' : 'Belum Selesai' }}</td>
                    <td>
                        <a href="{{ route('aktivitas.show', $item->id) }}" class="btn btn-info btn-sm">
                            Detail
                        </a>
                        <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus aktivitas ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
</body>