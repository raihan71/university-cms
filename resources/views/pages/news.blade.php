@extends('layouts.master')

@section('title', 'Berita & Pemberitahuan')

@push('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush


@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $type }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Informasi</li>
                <li style="margin: 10px">/</li>
                <li>{{ $type }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    @foreach ($news as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-img-holder">
                                <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('img/news/default.jpg') }}" class="img-responsive" alt="{{ $item->title }}">
                                <ul class="news-date2">
                                    <li>{{ $item->created_at->format('d M') }}</li>
                                    <li>{{ $item->created_at->format('Y') }}</li>
                                </ul>
                            </div>
                            <h3 class="title-news-left-bold"><a href="{{ route('info.news.show', $item->slug) }}">{{ $item->title }}</a></h3>
                            <ul class="title-bar-high news-comments">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> {{ $item->author }}</a></li>
                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{ $item->category }}</a></li>
                            </ul>
                            <p>{{ Str::limit($item->description, 160) }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {!! $news->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Cari {{ $type }}</h3>
                            <div class="sidebar-find-course">
                                <form id="checkout-form" action="{{ route('info.news.search') }}" method="POST">
                                    @csrf
                                    <div class="form-group course-name">
                                        <input id="first-name" name="search" placeholder="Ketik Disini . . .." class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <button class="sidebar-search-btn-full disabled" type="submit" value="Login">Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Kategori</h3>
                            <ul class="sidebar-categories">
                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Postingan Terbaru</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    @foreach ($hotNews as $news)
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="#"><img src="{{ asset('storage/' . $news->image) }}" class="img-responsive" alt="{{ $news->title }}"></a>
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
@endsection
