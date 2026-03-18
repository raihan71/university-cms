@extends('layouts.master')

@section('title', $event->title)

@push('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@push('meta')
    <meta property="og:title" content="{{ $event->title }}">
    <meta property="og:description" content="{{ $event->description }}">
    <meta property="og:image" content="{{ $event->image ? asset('storage/' . $event->image) : asset('img/news/default.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">
@endpush

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail-unsplash.jpg') }}'); background-position: center;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $event->title }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Informasi</li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Acara</li>
                <li style="margin: 10px">/</li>
                <li>{{ $event->title }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="news-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-img-holder">
                            <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/news/default.jpg') }}" class="img-responsive" alt="{{ $event->title }}">
                            <ul class="news-date1">
                                <li>{{ date('d M Y', strtotime($event->event_date)) }}</li>
                                <li>{{ date('Y', strtotime($event->event_date)) }}</li>
                            </ul>
                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $event->title }}</a></h2>
                        <ul class="title-bar-high news-comments">
                          <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ date('H:i', strtotime($event->event_date)) }}</a></li>
                          <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->location }}</a></li>
                        </ul>
                        <div>
                            {!! $event->description !!}
                        </div>
                        @php
                            $shareUrl = urlencode(url()->current());
                            $shareTitle = urlencode($event->title);
                        @endphp
                        <ul class="news-social">
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://pinterest.com/pin/create/button/?url={{ $shareUrl }}&description={{ $shareTitle }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.addtoany.com/share#url={{ $shareUrl }}&title={{ $shareTitle }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="course-details-comments">
                            <div id="disqus_thread"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Postingan Terbaru</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    @foreach ($hotNews as $news)
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="{{ route('info.news.show', $news->slug) }}"><img src="{{ asset('storage/' . $news->image) }}" class="img-responsive" alt="{{ $news->title }}"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>{{ $news->created_at->format('d M, Y') }}</h4>
                                            <p>{{ Str::limit($news->description, 25) }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
