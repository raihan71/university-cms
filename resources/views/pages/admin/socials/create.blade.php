@extends('layouts.dashboard')

@section('title', 'Social Media Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Media Sosial Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.socials.index') }}">Daftar Media Sosial</a></li>
      <li class="breadcrumb-item active">Buat Media Sosial Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.socials.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" placeholder="Contoh: Facebook" id="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="link">Link</label>
              <input type="url" class="form-control" id="link" name="link" placeholder="Contoh: https://www.facebook.com/akunkamu" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection