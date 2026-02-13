@extends('layouts.dashboard')
@section('title', 'Course Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Daftar Program</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Program</li>
  </ol>
  <a href="{{ route('portal-admin.courses.create') }}" class="btn btn-primary mb-3">Buat Program Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Program</th>
              <th>Deskripsi</th>
              <th>File Akreditasi</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($courses as $index => $course)
          <tr>
              <td>{{ $courses->firstItem() + $index }}</td>
              <td>{{ $course->name }}</td>
              <td>{{ Str::limit($course->description, 100) }}</td>
              <td>
                @if ($course->image)
                  <a href="{{ asset('storage/' . $course->image) }}" target="_blank">Lihat File</a>
                @else
                    <small class="text-danger">Tidak ada file</small>
                @endif
              </td>
              <td>
                  <a href="{{ route('portal-admin.courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <form action="{{ route('portal-admin.courses.destroy', $course->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus program ini?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                  </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $courses->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection