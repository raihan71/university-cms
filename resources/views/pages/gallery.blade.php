@extends('layouts.master')

@section('title', 'Berita & Pemberitahuan')


@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Galeri</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Informasi</li>
                <li style="margin: 10px">/</li>
                <li>Galeri</li>
            </ul>
        </div>
    </div>
</div>
<div class="gallery-area1">
    <div class="container">
        <div class="row gallery-wrapper">
            @foreach ($galleries as $item)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="gallery-box">
                  <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('img/news/default.jpg') }}" class="img-responsive" alt="{{ $item->title }}" style="width:377px;height:335px;object-fit:cover;">
                  <div class="gallery-content">
                      <a href="{{ $item->image ? asset('storage/' . $item->image) : asset('img/news/default.jpg') }}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop
