@extends('layouts.dashboard')
@section('title', 'Calendar Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengaturan Kalender Akademik</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Detail Kalender Akademik</li>
  </ol>
  <a href="{{ route('portal-admin.calendar.details') }}" class="btn btn-primary mb-3">Atur Detail Kalender</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Judul Kalender</th>
              <th>Keterangan</th>
              <th>File Pendukung</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>{{ $calendarDetail->name }}</td>
          <td>{{ Str::limit($calendarDetail->description, 100) }}</td>
          <td>
            @if ($calendarDetail->file)
              <a href="{{ asset('storage/' . $calendarDetail->file) }}" target="_blank">Lihat File</a>
            @else
              Tidak ada file
            @endif
          </td>
          <td>
            <a href="{{ route('portal-admin.calendar.details') }}" class="btn btn-sm btn-warning">Edit Detail</a>
          </td>
      </tbody>
  </table>
  <a href="{{ route('portal-admin.calendar.create') }}" class="btn btn-primary mb-3">Buat Kegiatan Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Kegiatan</th>
              <th>Keterangan</th>
              <th>Tanggal Pelaksanaan</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($calendars as $index => $activity)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $activity->name }}</td>
            <td>{{ Str::limit($activity->description, 100) }}</td>
            <td>{{ \Carbon\Carbon::parse($activity->date)->format('d M Y') }}</td>
            <td>
              <a href="{{ route('portal-admin.calendar.edit', $activity->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('portal-admin.calendar.destroy', $activity->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
          <tr>
              <td colspan="5">
                  {!! $calendars->withQueryString()->links('pagination::bootstrap-4') !!}
              </td>
          </tr>
      </tfoot>
  </table>
</div>
@endsection