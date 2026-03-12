@extends('layouts.dashboard')
@section('title', 'Gallery Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengelolaan Galeri</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Galeri</li>
  </ol>
  <a href="{{ route('portal-admin.gallery.create') }}" class="btn btn-primary mb-3">Buat Data Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($galleries as $index => $item)
          <tr>
              <td>{{ $galleries->firstItem() + $index }}</td>
              <td>{{ $item->title }}</td>
              <td><span class="badge badge-info">{{ $item->description }}</span></td>
              <td>
                  @if ($item->image)
                      <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-thumbnail" style="max-width: 100px;">
                  @endif
              </td>
              <td>
                <form action="{{ route('portal-admin.gallery.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $galleries->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection