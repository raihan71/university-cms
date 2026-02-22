@extends('layouts.dashboard')

@section('title', 'Partner Management')

@section('content')
<div class="container-fluid mb-4">
  <div class="p-1">
      @include('layouts.alert')
  </div>
  <h1 class="mt-4">Daftar Partner/Mitra</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Daftar Partner</li>
  </ol>
  <a href="{{ route('portal-admin.partners.create') }}" class="btn btn-primary mb-3">Buat Partner Baru</a>
  <table class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Partner</th>
              <th>Logo Partner</th>
              <th>Pengaturan</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($partners as $key => $partner)
              <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $partner->name }}</td>
                  <td><a href="{{ asset('storage/' . $partner->logo) }}" target="_blank"><img class="img-thumbnail" src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" width="100"></a></td>
                  <td>
                      <form action="{{ route('portal-admin.partners.destroy', $partner->id) }}" method="POST" style="display:inline;">
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
  {!! $partners->withQueryString()->links('pagination::bootstrap-4') !!}
</div>
@endsection