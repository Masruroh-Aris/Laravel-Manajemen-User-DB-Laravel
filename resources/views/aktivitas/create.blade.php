<body>
    @include('layouts.header')

    <div class="container mt-5 mb-5">
        <h2>Tambah Aktivitas</h2>
        <form action="{{ route('aktivitas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_aktivitas" class="form-label">Nama Aktivitas</label>
                <input type="text" class="form-control" id="nama_aktivitas" name="nama_aktivitas" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="from-label">Tanggal</label>
                <input type="date" class="from-control" id="tanggal" name="tanggal" required>  
            </div>    
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    @include('layouts.footer')
</body>
