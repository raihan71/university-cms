@extends('layouts.master')

@section('title', $kemahasiswaan->name . ' - Kemahasiswaan')

@push('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $kemahasiswaan->name }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Layanan</li>
                <li style="margin: 10px">/</li>
                <li>{{ $kemahasiswaan->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-page1-area">
  <div class="container">
      <h2 class="title-default-left">{{ $kemahasiswaan->name }}</h2>
      <div class="row about-page1-inner">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="about-page-content-holder">
                  <div class="content-box">
                      {!! $kemahasiswaan->description !!}
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@stop