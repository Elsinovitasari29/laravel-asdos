<x-layout.admin title="Tambah Data Kelurahan">
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Tambah Data Kelurahan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('kelurahan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kelurahan</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama kelurahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukkan nama kecamatan" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('kelurahan.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</x-layout.admin>