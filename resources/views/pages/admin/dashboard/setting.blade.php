@extends('layouts.dashboard')

@section('title', 'Settings')

@push('styles')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<style type="text/css">
    .trix-content{
        height: 200px;
        overflow-y: auto;
    }
</style>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@section('content')
<div class="container-fluid mb-4">
    <h1 class="mt-4">Pengaturan Kampus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pengaturan Kampus</li>
    </ol>
    <form action="{{ route('portal-admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kampus</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $universities->name }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $universities->location }}">
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $universities->email }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $universities->phone }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Jumlah Dosen</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $universities->count_teacher }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Jumlah Mahasiswa Aktif</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $universities->count_student }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Jumlah Program Studi</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $universities->count_program }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Jumlah Alumni</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $universities->count_alumni }}">
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Deskripsi</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_description">
                <trix-editor id="description" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="history">Sejarah</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_history">
                <trix-editor id="history" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="vision">Visi</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_vision">
                <trix-editor id="vision" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Misi</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_mission">
                <trix-editor id="mission" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Akreditasi</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_accreditation">
                <trix-editor id="accreditation" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Struktur Organisasi</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_structure">
                <trix-editor id="structure" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Identitas</label>
            </div>
            <div class="card-body">
                <input id="x" type="hidden" name="content_identity">
                <trix-editor id="identity" class="trix-content" input="x"></trix-editor>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
