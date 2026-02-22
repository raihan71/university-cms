@extends('layouts.master')

@section('title', $news->title . ' - ' . $news->type)

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail-unsplash.jpg') }}'); background-position: center;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $news->title }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li><a href="{{ route('news.index') }}">Berita</a></li>
                <li>{{ $news->title }}</li>
            </ul>
        </div>
    </div>
</div>
@stop