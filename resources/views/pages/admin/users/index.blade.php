@extends('layouts.dashboard')

@section('title', 'User Management')

@section('content')
<div class="container-fluid mb-4">
    <div class="p-1">
        @include('layouts.alert')
    </div>
    <h1 class="mt-4">Daftar Pengguna</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Daftar Pengguna</li>
    </ol>
    <a href="{{ route('portal-admin.users.create') }}" class="btn btn-primary mb-3">Buat Pengguna Baru</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Tanggal Dibuat</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $users->firstItem() ? $users->firstItem() + $loop->index : $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge badge-info text-uppercase">{{ $user->role ?? '-' }}</span>
                                </td>
                                <td>{{ optional($user->created_at)->format('d M Y H:i') ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('portal-admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                                    @if (auth()->id() !== $user->id && auth()->user()->role === 'admin')
                                    <form action="{{ route('portal-admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data pengguna.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {!! $users->withQueryString()->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
</div>
@endsection
