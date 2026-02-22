@extends('layouts.dashboard')
@section('title', 'Social Media Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengelolaan Media Sosial</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Media Sosial</li>
  </ol>
  <a href="{{ route('portal-admin.socials.create') }}" class="btn btn-primary mb-3">Buat Data Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Link</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($socials as $index => $item)
          <tr>
              <td>{{ $socials->firstItem() + $index }}</td>
              <td><i class="fab fa-{{ $item->name }}"></i> {{ $item->name }}</td>
              <td><a href="{{ $item->link }}" target="_blank"><span class="badge badge-info">Lihat</span></a></td>
              <td>
                <a href="{{ route('portal-admin.socials.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('portal-admin.socials.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus media sosial ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $socials->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection