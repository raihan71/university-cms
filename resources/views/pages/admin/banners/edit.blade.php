@extends('layouts.dashboard')

@section('title', 'Banner Management')

@section('content')
<div class="container-fluid mb-4">
  <h1 class="mt-4">Edit Banner</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.banners.index') }}">Daftar Banner</a></li>
      <li class="breadcrumb-item active">Edit Banner</li>
      <li class="breadcrumb-item active">{{ $banner->title }}</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $banner->title }}" required>
          </div>
          <div class="form-group">
              <label for="subtitle">Subjudul</label>
              <textarea class="form-control" id="subtitle" name="subtitle" rows="3" required>{{ $banner->subtitle }}</textarea>
          </div>
          <div class="form-group">
              <label for="image">Gambar</label>
              <input type="file" class="form-control" id="image" name="image" accept="image/*">
          </div>
          <div class="form-group">
              <label for="link">Link</label>
              <input type="url" class="form-control" id="link" name="link" value="{{ $banner->link }}" required>
          </div>
          <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status" required>
                  <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Aktif</option>
                  <option value="0" {{ $banner->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
              </select>
          </div>
          <div class="form-group">
              <label for="type">Jenis</label>
              <select class="form-control" id="type" name="type" required>
                  <option value="image" {{ $banner->type == 'image' ? 'selected' : '' }}>Gambar</option>
                  <option value="video" {{ $banner->type == 'video' ? 'selected' : '' }}>Video</option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('portal-admin.banners.index') }}" class="btn btn-secondary ml-2">Batal</a>
      </form>
    </div>
  </div>
</div>
@endsection