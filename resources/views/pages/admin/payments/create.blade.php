@extends('layouts.dashboard')

@section('title', 'Payment Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Buat Pembayaran Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.payment.index') }}">Daftar Pembayaran</a></li>
      <li class="breadcrumb-item active">Buat Pembayaran Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.payment.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="type">Jenis Pembayaran</label>
              <select class="form-control" id="type" name="type" required>
                  <option value="" disabled selected>Pilih Jenis Pembayaran</option>
                  @foreach ($categories as $category)
                      <option value="{{ $category['value'] }}">{{ $category['label'] }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="norek">Nomor Rekening</label>
              <input type="text" class="form-control" id="norek" name="norek" placeholder="Contoh: 1234567890" required>
          </div>
          <div class="form-group">
              <label for="bank">Nama Bank</label>
              <input type="text" class="form-control" id="bank" name="bank" placeholder="Contoh: Bank ABC" required>
          </div>
          <div class="form-group">
              <label for="name">Atas Nama</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Contoh: PT. Contoh Pembayaran" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection
