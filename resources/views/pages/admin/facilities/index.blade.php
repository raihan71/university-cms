@extends('layouts.dashboard')
@section('title', 'Fasilitas Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengelolaan Fasilitas</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Fasilitas</li>
  </ol>
  <a href="{{ route('portal-admin.facilities.create') }}" class="btn btn-primary mb-3">Buat Data Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($facilities as $index => $item)
          <tr>
              <td>{{ $facilities->firstItem() + $index }}</td>
              <td>{{ $item->name }}</td>
              <td><span class="badge badge-info">{{ $item->category }}</span></td>
              <td>
                <a href="{{ route('portal-admin.facilities.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('portal-admin.facilities.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $facilities->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection