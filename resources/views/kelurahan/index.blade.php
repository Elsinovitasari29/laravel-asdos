<x-layout.admin title="Kelurahan">
    <div class="container-fluid mt-4">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Data Kelurahan</h3>
                <a href="{{ route('kelurahan.create') }}" class="btn btn-primary btn-sm">+ Tambah Kelurahan</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Nama</th>
                            <th>Kecamatan</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kelurahan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kecamatan }}</td>
                                <td>
                                    <a href="{{ route('kelurahan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('kelurahan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada data kelurahan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout.admin>