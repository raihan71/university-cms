@extends('layouts.master')

@section('title', 'Fasilitas Akademik')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Fasilitas Akademik</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Akademik</li>
                <li style="margin: 10px">/</li>
                <li>Fasilitas Akademik</li>
            </ul>
        </div>
    </div>
</div>
<div class="gallery-area2">
    <div class="container" id="inner-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab isotop-btn">
                    <a href="#" class="current" data-filter="*">Semua</a>
                  @foreach($facilitiesCategories as $category)
                    <a href="#" data-filter=".{{ $category['value'] }}">{{ $category['label'] }}</a>
                  @endforeach
                </div>
            </div>
        </div>
        <div class="row featuredContainer gallery-wrapper">
            @foreach($facilities as $facility)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 {{ $facility->category }}">
                <div class="gallery-box">
                    <img src="{{ asset('storage/' . $facility->foto) }}" class="img-responsive" alt="{{ $facility->name }}" style="width: 282px; height: 255px; object-fit: cover;">
                    <div class="gallery-content">
                        <a href="{{ asset('storage/' . $facility->foto) }}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop