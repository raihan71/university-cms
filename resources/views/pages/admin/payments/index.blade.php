@extends('layouts.dashboard')
@section('title', 'Scholarship Management')
@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Pengelolaan BAK</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Metode Pembayaran</li>
  </ol>
  <a href="{{ route('portal-admin.payment.create') }}" class="btn btn-primary mb-3">Buat Data Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Jenis Pembayaran</th>
              <th>Norek</th>
              <th>Bank</th>
              <th>Atas Nama</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($payments as $index => $item)
          <tr>
              <td>{{ $payments->firstItem() + $index }}</td>
              <td>
                @foreach ($categories as $category)
                  @if ($category['value'] === $item->type)
                    {{ $category['label'] }}
                  @endif
                @endforeach
              </td>
              <td>{{ $item->norek }}</td>
              <td>{{ $item->bank }}</td>
              <td>{{ $item->name }}</td>
              <td>
                <form action="{{ route('portal-admin.payment.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus metode pembayaran ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Hapus</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {!! $payments->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection