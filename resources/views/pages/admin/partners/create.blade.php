@extends('layouts.dashboard')

@section('title', 'Partner Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Partner/Mitra Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.partners.index') }}">Daftar Partner</a></li>
      <li class="breadcrumb-item active">Buat Partner Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.partners.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Nama Partner</label>
              <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="logo">Logo Partner</label>
              <input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection