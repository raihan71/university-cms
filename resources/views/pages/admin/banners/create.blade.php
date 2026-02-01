@extends('layouts.dashboard')

@section('title', 'Banner Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Banner Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.banners.index') }}">Daftar Banner</a></li>
      <li class="breadcrumb-item active">Buat Banner Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.banners.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="form-group">
              <label for="subtitle">Subjudul</label>
              <textarea class="form-control" id="subtitle" name="subtitle" rows="3" required></textarea>
          </div>
          <div class="form-group">
              <label for="image">Gambar</label>
              <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
          </div>
          <div class="form-group">
              <label for="link">Link</label>
              <input type="url" class="form-control" id="link" name="link" required>
          </div>
          <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status" required>
                  <option value="1">Aktif</option>
                  <option value="0">Tidak Aktif</option>
              </select>
          </div>
          <div class="form-group">
              <label for="type">Jenis</label>
              <select class="form-control" id="type" name="type" required>
                  <option value="image">Gambar</option>
                  <option value="video">Video</option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection