<x-layout.admin title="Edit Kelurahan">
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Kelurahan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kelurahan</label>
                        <input class="form-control" type="text" name="nama" id="nama" value="{{ old('nama', $kelurahan->nama) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{ old('kecamatan', $kelurahan->kecamatan) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('kelurahan.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-layout.admin>