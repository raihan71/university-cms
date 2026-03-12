@extends('layouts.dashboard')

@section('title', 'Gallery Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Galeri Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.gallery.index') }}">Daftar Galeri</a></li>
      <li class="breadcrumb-item active">Buat Galeri Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control" placeholder="Contoh: Galeri A" id="title" name="title" required>
          </div>
          <div class="form-group">
              <label for="description">Keterangan</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Contoh: Keterangan Galeri A" required></textarea>
          </div>
          <div class="form-group">
              <label for="image">Gambar</label>
              <input type="file" accept="image/*" class="form-control" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection