@extends('layouts.dashboard')

@section('title', 'Fasilitas Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Fasilitas Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.facilities.index') }}">Daftar Fasilitas</a></li>
      <li class="breadcrumb-item active">Buat Fasilitas Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.facilities.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" placeholder="Contoh: Fasilitas A" id="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="category">Kategori</label>
              <select class="form-control" id="category" name="category">
                  <option value="" selected disabled>Pilih Kategori</option>
                  @foreach ($categories as $category)
                      <option value="{{ $category['value'] }}">{{ $category['label'] }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" accept="image/*" class="form-control" id="foto" name="foto">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection