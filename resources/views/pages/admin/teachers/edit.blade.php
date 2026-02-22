@extends('layouts.dashboard')

@section('title', 'Dosen Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Edit Dosen</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.teachers.index') }}">Daftar Dosen</a></li>
      <li class="breadcrumb-item active">Edit Dosen</li>
      <li class="breadcrumb-item"><a href="{{ route('teachers.show', $teacher->id) }}">{{ $teacher->name }}</a></li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" placeholder="Masukkan nama lengkap dengan gelar" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
          </div>
          <div class="form-group">
              <label for="bio">Bio</label>
              <textarea placeholder="Masukkan bio seperti pengalaman mengajar, pendidikan, dll." class="form-control" id="bio" name="bio" rows="3" required>{{ $teacher->bio }}</textarea>
          </div>
          <div class="form-group">
              <label for="photo">Foto</label>
              <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Masukkan email" id="email" name="email" value="{{ $teacher->email }}" required>
          </div>
          <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="Masukkan nomor telepon" id="phone" name="phone" value="{{ $teacher->phone }}">
          </div>
          <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" placeholder="Masukkan alamat" id="address" name="address" value="{{ $teacher->address }}">
          </div>
          <div class="form-group">
            <label for="subject">Mata Kuliah</label>
            <input type="text" placeholder="Masukkan mata kuliah yang diajarkan" class="form-control" id="subject" name="subject" value="{{ $teacher->subject }}">
          </div>
          <div class="form-group">
              <label for="prodi">Prodi</label>
              <select class="form-control" id="prodi" name="prodi" required>
                <option value="" disabled selected>Pilih Prodi</option>
                @foreach($courses as $course)
                    <option value="{{ $course->slug }}" {{ $course->slug == $teacher->prodi ? 'selected' : '' }}>{{ $course->name }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="role">Jabatan</label>
            <input type="text" placeholder="Masukkan jabatan dosen jika ada" class="form-control" id="role" name="role" value="{{ $teacher->role }}">
          </div>
          <div class="form-group">
              <label for="linkedin">LinkedIn</label>
              <input type="url" class="form-control" placeholder="Masukkan URL LinkedIn" id="linkedin" name="linkedin" value="{{ $teacher->linkedin }}">
          </div>
          <div class="form-group">
              <label for="twitter">Twitter</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Twitter" id="twitter" name="twitter" value="{{ $teacher->twitter }}">
          </div>
          <div class="form-group">
              <label for="instagram">Instagram</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Instagram" id="instagram" name="instagram" value="{{ $teacher->instagram }}">
          </div>
          <div class="form-group">
              <label for="facebook">Facebook</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Facebook" id="facebook" name="facebook" value="{{ $teacher->facebook }}">
          </div>
          <div class="form-group">
              <label for="website">Website</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Website" id="website" name="website" value="{{ $teacher->website }}">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection