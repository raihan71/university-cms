@extends('layouts.dashboard')
@section('title', 'Dosen Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Daftar Pengajar/Dosen</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Pengajar/Dosen</li>
  </ol>
  <a href="{{ route('portal-admin.teachers.create') }}" class="btn btn-primary mb-3">Buat Pengajar/Dosen Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Pengajar/Dosen</th>
              <th>Mata Kuliah</th>
              <th>Prodi</th>
              <th>Jabatan</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($teachers as $index => $teacher)
          <tr>
              <td>{{ $index+1 }}</td>
              <td>{{ $teacher->name }}</td>
              <td>{{ Str::limit($teacher->subject, 100) }}</td>
              <td>
                <span class="badge badge-success">{{ $teacher->prodi }}</span>
              </td>
              <td>
                @if($teacher->role)
                    <span class="badge badge-info">{{ $teacher->role }}</span>
                @else
                    -
                @endif
              </td>
              <td>
                  <a href="{{ route('portal-admin.teachers.edit', $teacher->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <form action="{{ route('portal-admin.teachers.destroy', $teacher->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus pengajar/dosen ini?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                  </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $teachers->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection