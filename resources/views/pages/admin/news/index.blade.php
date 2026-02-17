@extends('layouts.dashboard')
@section('title', 'News Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengumuman/Berita</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Berita/Pengumuman</li>
  </ol>
  <a href="{{ route('portal-admin.news.create') }}" class="btn btn-primary mb-3">Buat Data Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Tipe</th>
              <th>Penulis</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($news as $index => $item)
          <tr>
              <td>{{ $news->firstItem() + $index }}</td>
              <td>{{ $item->title }}</td>
              <td>{{ Str::limit($item->description, 50) }}</td>
              <td>
                <span class="badge badge-info">{{ $item->type == 'news' ? 'Berita' : 'Pengumuman' }}</span>
              </td>
              <td><span class="badge badge-danger">{{ $item->author }}</span></td>
              <td>
                <a href="{{ route('portal-admin.news.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('portal-admin.news.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita/pengumuman ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $news->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection