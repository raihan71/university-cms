@extends('layouts.dashboard')
@section('title', 'Event Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Daftar Acara</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Acara</li>
  </ol>
  <a href="{{ route('portal-admin.events.create') }}" class="btn btn-primary mb-3">Buat Acara Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Acara</th>
              <th>Tanggal Acara</th>
              <th>Lokasi Acara</th>
              <th>Foto Acara</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($events as $index => $event)
          <tr>
              <td>{{ $events->firstItem() + $index }}</td>
              <td>{{ $event->title }}</td>
              <td>{{ $event->event_date }}</td>
              <td>{{ $event->location }}</td>
              <td>
                @if ($event->image)
                  <a href="{{ asset('storage/' . $event->image) }}" target="_blank">Lihat File</a>
                @else
                    <small class="text-danger">Tidak ada file</small>
                @endif
              </td>
              <td>
                  <a href="{{ route('portal-admin.events.edit', $event->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <form action="{{ route('portal-admin.events.destroy', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus acara ini?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                  </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $events->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection