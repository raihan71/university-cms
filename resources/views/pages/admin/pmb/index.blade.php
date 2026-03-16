@extends('layouts.dashboard')
@section('title', 'PMB Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengaturan PMB</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Detail PMB</li>
  </ol>
  <a href="{{ route('portal-admin.pmb.detail') }}" class="btn btn-primary mb-3">Atur Detail PMB</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Brosur</th>
              <th>File Pendukung</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>
            @if ($pmbDetail->gambar)
              <a href="{{ asset('storage/' . $pmbDetail->gambar) }}" target="_blank">Lihat Brosur</a>
            @else
              Tidak ada brosur
            @endif
          </td>
          <td>
            @if ($pmbDetail->file)
              <a href="{{ asset('storage/' . $pmbDetail->file) }}" target="_blank">Lihat File Pendukung</a>
            @else
              Tidak ada file pendukung
            @endif
          </td>
          <td>
            <a href="{{ route('portal-admin.pmb.detail') }}" class="btn btn-sm btn-warning">Edit Detail</a>
          </td>
      </tbody>
  </table>
  <a href="{{ route('portal-admin.pmb.create') }}" class="btn btn-primary mb-3">Buat Pendaftaran Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Jalur Pendaftaran</th>
              <th>Tanggal Pendaftaran</th>
              <th>Tanggal Ujian Seleksi</th>
              <th>Pengumuman Hasil</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($pmbs as $index => $pmb)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pmb->path_register }}</td>
            <td>{{ \Carbon\Carbon::parse($pmb->date_register)->format('d M Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($pmb->date_test)->format('d M Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($pmb->date_result)->format('d M Y') }}</td>
            <td>
              <form action="{{ route('portal-admin.pmb.destroy', $pmb->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pendaftaran ini?');">
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
                  {!! $pmbs->withQueryString()->links('pagination::bootstrap-4') !!}
              </td>
          </tr>
      </tfoot>
  </table>
</div>
@endsection