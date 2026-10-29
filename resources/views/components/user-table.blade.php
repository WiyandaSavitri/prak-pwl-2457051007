<div class="table-card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td><span class="id-chip" title="{{ $user->id }}">{{ substr($user->id, 0, 8) }}…</span></td>
                    <td class="fw-medium">{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td><span class="badge-kelas">{{ $user->nama_kelas }}</span></td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn-action btn-edit">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-hapus"
                                    onclick="return confirm('Yakin ingin menghapus {{ $user->nama }}?')">
                                    <i class="bi bi-trash3"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">Belum ada data pengguna.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>