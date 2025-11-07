<body>
    @include('layouts.header')

    <div class="container mt-5 mb-5">
        <h2 class="mb-4">Edit Aktivitas</h2>

        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_aktivitas" class="form-label">Nama Aktivitas</label>
                <input type="text" 
                       class="form-control @error('nama_aktivitas') is-invalid @enderror" 
                       id="nama_aktivitas" 
                       name="nama_aktivitas" 
                       value="{{ old('nama_aktivitas', $aktivitas->nama_aktivitas) }}" 
                       required>
                @error('nama_aktivitas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                          id="deskripsi" 
                          name="deskripsi" 
                          rows="3" 
                          required>{{ old('deskripsi', $aktivitas->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tanggal --}}
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" 
                       class="form-control @error('tanggal') is-invalid @enderror" 
                       id="tanggal" 
                       name="tanggal" 
                       value="{{ old('tanggal', $aktivitas->tanggal) }}" 
                       required>
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" 
                        id="status" 
                        name="status" 
                        required>
                    <option value="0" {{ old('status', $aktivitas->status) == 0 ? 'selected' : '' }}>Belum Selesai</option>
                    <option value="1" {{ old('status', $aktivitas->status) == 1 ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('aktivitas') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    @include('layouts.footer')
</body>
