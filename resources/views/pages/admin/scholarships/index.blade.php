@extends('layouts.dashboard')
@section('title', 'Scholarship Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengelolaan Beasiswa</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Beasiswa</li>
  </ol>
  <a href="{{ route('portal-admin.scholarships.create') }}" class="btn btn-primary mb-3">Buat Data Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Beasiswa</th>
              <th>Deskripsi</th>
              <th>Link</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($scholarships as $index => $item)
          <tr>
              <td>{{ $scholarships->firstItem() + $index }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ Str::limit($item->description, 50) }}</td>
              <td>
                @if ($item->link)
                    @if (Str::startsWith($item->link, ['http://', 'https://']))
                    <a class="badge badge-primary" href="{{ $item->link }}" target="_blank">
                      Lihat link
                    </a>
                    @endif
                @else
                  <span class="text-muted">Tidak ada link</span>
                @endif
              </td>
              <td>
                <a href="{{ route('portal-admin.scholarships.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('portal-admin.scholarships.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus beasiswa ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $scholarships->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection