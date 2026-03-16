@extends('layouts.dashboard')

@section('title', 'User Management')

@section('content')
<div class="container-fluid mb-4">
    <div class="p-1">
        @include('layouts.alert')
    </div>
    <h1 class="mt-4">Buat Pengguna Baru</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('portal-admin.users.index') }}">Daftar Pengguna</a></li>
        <li class="breadcrumb-item active">Buat Pengguna Baru</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('portal-admin.users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        placeholder="Masukkan nama pengguna"
                        value="{{ old('name') }}"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="nama@email.com"
                        value="{{ old('email') }}"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input
                        type="text"
                        id="role"
                        name="role"
                        class="form-control"
                        placeholder="Contoh: admin/user"
                        value="{{ old('role', 'user') }}"
                        required
                    >
                    <small class="form-text text-muted">Gunakan huruf kecil tanpa spasi, misal: admin, user, editor.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Minimal 6 karakter"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-control"
                        placeholder="Ulangi password"
                        required
                    >
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('portal-admin.users.index') }}" class="btn btn-light">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Pengguna</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
