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
    <div class="p-1">
        @include('layouts.alert')
    </div>
    <h1 class="mt-4">Pengaturan Kampus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pengaturan Kampus</li>
    </ol>
    <form action="{{ route('portal-admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kampus</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $universities->name) }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $universities->location) }}">
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" accept="image/*" class="form-control" id="logo" name="logo">
            <div class="mt-2">
                <img
                    id="logo-preview"
                    src="{{ $universities->logo ? asset('storage/' . $universities->logo) : '' }}"
                    alt="Logo preview"
                    class="{{ $universities->logo ? '' : 'd-none' }}"
                    style="width: 200px; height: 300px; object-fit: contain; border: 1px solid #dee2e6; border-radius: 0.25rem;"
                >
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $universities->email) }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $universities->phone) }}">
        </div>
        <div class="mb-3">
            <label for="count_teacher" class="form-label">Jumlah Dosen</label>
            <input type="text" class="form-control" id="count_teacher" name="count_teacher" value="{{ old('count_teacher', $universities->count_teacher) }}">
        </div>
        <div class="mb-3">
            <label for="count_student" class="form-label">Jumlah Mahasiswa Aktif</label>
            <input type="text" class="form-control" id="count_student" name="count_student" value="{{ old('count_student', $universities->count_student) }}">
        </div>
        <div class="mb-3">
            <label for="count_program" class="form-label">Jumlah Program Studi</label>
            <input type="text" class="form-control" id="count_program" name="count_program" value="{{ old('count_program', $universities->count_program) }}">
        </div>
        <div class="mb-3">
            <label for="count_alumni" class="form-label">Jumlah Alumni</label>
            <input type="text" class="form-control" id="count_alumni" name="count_alumni" value="{{ old('count_alumni', $universities->count_alumni) }}">
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Deskripsi</label>
            </div>
            <div class="card-body">
                <input id="description_input" type="hidden" name="description" value="{{ old('description', $universities->description) }}">
                <trix-editor id="description" class="trix-content" input="description_input"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="history">Sejarah</label>
            </div>
            <div class="card-body">
                <input id="history_input" type="hidden" name="history" value="{{ old('history', $universities->history) }}">
                <trix-editor id="history" class="trix-content" input="history_input"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="vision">Visi</label>
            </div>
            <div class="card-body">
                <input id="vision_input" type="hidden" name="vision" value="{{ old('vision', $universities->vision) }}">
                <trix-editor id="vision" class="trix-content" input="vision_input"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Misi</label>
            </div>
            <div class="card-body">
                <input id="mission_input" type="hidden" name="mission" value="{{ old('mission', $universities->mission) }}">
                <trix-editor id="mission" class="trix-content" input="mission_input"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Akreditasi</label>
            </div>
            <div class="card-body">
                <input id="accreditation_input" type="hidden" name="accreditation" value="{{ old('accreditation', $universities->accreditation) }}">
                <trix-editor id="accreditation" class="trix-content" input="accreditation_input"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Struktur Organisasi</label>
            </div>
            <div class="card-body">
                <input id="structure_input" type="hidden" name="structure" value="{{ old('structure', $universities->structure) }}">
                <trix-editor id="structure" class="trix-content" input="structure_input"></trix-editor>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Identitas</label>
            </div>
            <div class="card-body">
                <input id="identity_input" type="hidden" name="identity" value="{{ old('identity', $universities->identity) }}">
                <trix-editor id="identity" class="trix-content" input="identity_input"></trix-editor>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    const logoInput = document.getElementById('logo');
    const logoPreview = document.getElementById('logo-preview');

    if (logoInput) {
        logoInput.addEventListener('change', (event) => {
            const [file] = event.target.files;

            if (!file) {
                return;
            }

            const reader = new FileReader();

            reader.onload = (e) => {
                logoPreview.src = e.target.result;
                logoPreview.classList.remove('d-none');
            };

            reader.readAsDataURL(file);
        });
    }
</script>
@endpush
