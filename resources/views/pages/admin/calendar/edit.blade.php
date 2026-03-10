@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
<div class="container-fluid mb-4">
    <div class="p-1">
        @include('layouts.alert')
    </div>
    <h1 class="mt-4">Pengaturan Kalender Akademik</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('portal-admin.calendar.index') }}">Daftar Kalender</a></li>
        <li class="breadcrumb-item active">Detail Kegiatan Akademik</li>
    </ol>
    <form action="{{ route('portal-admin.calendar.update', $calendar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $calendar->name) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $calendar->date) }}">
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Deskripsi</label>
            </div>
            <div class="card-body">
                <textarea id="description" class="form-control" name="description" rows="5">{{ old('description', $calendar->description) }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection

