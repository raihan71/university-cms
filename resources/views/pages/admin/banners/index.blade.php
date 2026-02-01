@extends('layouts.dashboard')

@section('title', 'Banner Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Daftar Banner</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Banner</li>
  </ol>
  <a href="{{ route('portal-admin.banners.create') }}" class="btn btn-primary mb-3">Buat Banner Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Subjudul</th>
              <th>Gambar</th>
              <th>Link</th>
              <th>Status</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($banners as $key => $banner)
              <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $banner->title }}</td>
                    <td>{{ Str::limit($banner->subtitle, 30) }}</td>
                  <td><a href="{{ asset('storage/' . $banner->image) }}" target="_blank"><img class="img-thumbnail" src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" width="100"></a></td>
                  <td><a href="{{ $banner->link }}" class="btn btn-link" target="_blank">Kunjungi</a></td>
                  <td>
                    <label class="badge {{ $banner->status === 1 ? "badge-success" : "badge-danger" }}">{{ $banner->status === 1 ? "Aktif" : "Non-Aktif" }}</label>
                  </td>
                  <td>
                      <a href="{{ route('portal-admin.banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                      <form action="{{ route('portal-admin.banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger ml-2">Delete</button>
                      </form>
                      <a href="{{ route('frontpage') }}" target="_blank" class="btn btn-info ml-2">
                        <i class="fa fa-eye"></i>
                      </a>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
  {!! $banners->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection