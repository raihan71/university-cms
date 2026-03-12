@extends('layouts.master')

@section('title', 'Berita & Pemberitahuan')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Pencarian: {{ $search }}</h1>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                            <h3 class="title-news-left-bold"><a href="#">{{ $item->title }}</a></h3>
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
        </div>
    </div>
</div>
@endsection
