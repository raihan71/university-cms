@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
<div class="container-fluid mb-4">
    <div class="p-1">
        @include('layouts.alert')
    </div>
    <h1 class="mt-4">Pengaturan Kalender Akademik</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('portal-admin.pmb.index') }}">Daftar PMB</a></li>
        <li class="breadcrumb-item active">PMB Baru</li>
    </ol>
    <form action="{{ route('portal-admin.pmb.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="path_register" class="form-label">Jalur Pendaftaran</label>
            <input type="text" class="form-control" id="path_register" name="path_register" value="{{ old('path_register') }}">
        </div>
        <div class="mb-3">
            <label for="date_register" class="form-label">Tanggal Pendaftaran</label>
            <input type="date" class="form-control" id="date_register" name="date_register" value="{{ old('date_register') }}">
        </div>
        <div class="mb-3">
            <label for="date_test" class="form-label">Tanggal Ujian Seleksi</label>
            <input type="date" class="form-control" id="date_test" name="date_test" value="{{ old('date_test') }}">
        </div>
        <div class="mb-3">
            <label for="date_result" class="form-label">Tanggal Pengumuman</label>
            <input type="date" class="form-control" id="date_result" name="date_result" value="{{ old('date_result') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

