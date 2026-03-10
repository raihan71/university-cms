@extends('layouts.master')

@section('title', $tentang)

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $tentang }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Profil</li>
                <li style="margin: 10px">/</li>
                <li>{{ $tentang }}</li>
            </ul>
        </div>
    </div>
</div>
@if($about === 'history' || $about === 'vision' || $about === 'identity')
<div class="about-page1-area">
    <div class="container">
        <div class="row about-page1-inner">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        {!! $profileAbout !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-img-holder">
                    @if($about === 'identity')
                    <img style="background-size: cover; padding: 45px;" src="{{ asset('storage/'.$university->logo) }}" class="img-responsive img-fluid" alt="about">
                    @else
                    <img src="{{ asset('img/about/building2.jpg') }}" class="img-responsive img-fluid" alt="about">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($about === 'leadership')
<div class="lecturers-area">
    <div class="container">
        <h2 class="title-default-left">Unsur Pimpinan Inti</h2>
    </div>
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
            @foreach($teacher as $item)
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="lecturers-img-wrapper">
                        <a href="{{ route('profile.teachers.show', $item->slug) }}">
                          <img class="img-responsive" src="{{ asset('storage/'.$item->photo) }}" style="width: 263px; height: 272px; object-fit: cover;" alt="team {{ $item->name }}">
                        </a>
                    </div>
                    <div class="lecturers-content-wrapper">
                        <h3 class="item-title"><a href="{{ route('profile.teachers.show', $item->slug) }}">{{ $item->name }}</a></h3>
                        <span class="item-designation">{{ $item->role }}</span>
                        <h5>{{ Str::upper($item->isCode) }}: {{ $item->nip }}</h5>
                        <ul class="lecturers-social">
                            <li><a href="{{ $item->website }}"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $item->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $item->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $item->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{ $item->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@elseif($about === 'structure')
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Bagan Struktur Organisasi</h2>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        {!! $profileAbout !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($about === 'accreditation')
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Peringkat Akreditasi Terbaru</h2>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        {!! $profileAbout !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@stop