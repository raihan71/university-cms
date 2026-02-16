@extends('layouts.dashboard')

@section('title', 'Dosen Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Dosen Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.teachers.index') }}">Daftar Dosen</a></li>
      <li class="breadcrumb-item active">Buat Dosen Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" placeholder="Masukkan nama lengkap dengan gelar" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="bio">Bio</label>
              <textarea placeholder="Masukkan bio seperti pengalaman mengajar, pendidikan, dll." class="form-control" id="bio" name="bio" rows="3" required></textarea>
          </div>
          <div class="form-group">
              <label for="photo">Foto</label>
              <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Masukkan email" id="email" name="email" required>
          </div>
          <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="Masukkan nomor telepon" id="phone" name="phone">
          </div>
          <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" placeholder="Masukkan alamat" id="address" name="address">
          </div>
          <div class="form-group">
            <label for="subject">Mata Kuliah</label>
            <input type="text" placeholder="Masukkan mata kuliah yang diajarkan" class="form-control" id="subject" name="subject">
          </div>
          <div class="form-group">
              <label for="prodi">Prodi</label>
              <select class="form-control" id="prodi" name="prodi" required>
                <option value="" disabled selected>Pilih Prodi</option>
                @foreach($courses as $course)
                    <option value="{{ $course->slug }}">{{ $course->name }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="role">Jabatan</label>
            <input type="text" placeholder="Masukkan jabatan dosen jika ada" class="form-control" id="role" name="role">
          </div>
          <div class="form-group">
              <label for="linkedin">LinkedIn</label>
              <input type="url" class="form-control" placeholder="Masukkan URL LinkedIn" id="linkedin" name="linkedin">
          </div>
          <div class="form-group">
              <label for="twitter">Twitter</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Twitter" id="twitter" name="twitter">
          </div>
          <div class="form-group">
              <label for="instagram">Instagram</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Instagram" id="instagram" name="instagram">
          </div>
          <div class="form-group">
              <label for="facebook">Facebook</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Facebook" id="facebook" name="facebook">
          </div>
          <div class="form-group">
              <label for="website">Website</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Website" id="website" name="website">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection