@extends('layouts.dashboard')

@section('title', 'Social Media Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Edit Media Sosial</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.socials.index') }}">Daftar Media Sosial</a></li>
      <li class="breadcrumb-item active">Edit Media Sosial</li>
      <li class="breadcrumb-item active">{{ $social->name }}</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.socials.update', $social->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $social->name }}" required>
          </div>
          <div class="form-group">
              <label for="link">Link</label>
              <input type="url" class="form-control" id="link" name="link" value="{{ $social->link }}" required>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('portal-admin.socials.index') }}" class="btn btn-secondary ml-2">Batal</a>
      </form>
    </div>
  </div>
</div>
@endsection