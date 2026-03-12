@extends('layouts.master')

@section('title', 'Kegiatan & Acara')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Daftar Acara</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Informasi</li>
                <li style="margin: 10px">/</li>
                <li>Acara</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    @foreach ($events as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-img-holder">
                                <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('img/news/default.jpg') }}" class="img-responsive" alt="{{ $item->title }}">
                                <ul class="news-date2">
                                    <li>{{ $item->created_at->format('d M') }}</li>
                                    <li>{{ $item->created_at->format('Y') }}</li>
                                </ul>
                            </div>
                            <h3 class="title-news-left-bold"><a href="{{ route('info.events.show', $item->slug) }}">{{ $item->title }}</a></h3>
                            <ul class="title-bar-high news-comments">
                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ date('H:i', strtotime($item->event_date)) }}</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $item->location }}</a></li>
                            </ul>
                            <p>{{ Str::limit($item->description, 160) }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {!! $events->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
