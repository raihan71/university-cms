@extends('layouts.master')

@section('title', $teacher->name . ' - Dosen')

@push('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $teacher->name }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px"><a href="{{ route('profile.teachers.index') }}">Pengajar</a></li>
                <li style="margin: 10px">/</li>
                <li>{{ $teacher->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="lecturers-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="lecturers-contact-info">
                    <img src="{{ asset('storage/'.$teacher->photo) }}" class="img-responsive" alt="team">
                    <h2>{{ $teacher->name }}</h2>
                    <h3>{{ $teacher->subject }}</h3>
                    <h5>{{ Str::upper($teacher->isCode) }}: {{ $teacher->nip }}</h5>
                    <ul class="lecturers-social2">
                        <li><a href="{{ $teacher->website }}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $teacher->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $teacher->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $teacher->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $teacher->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="lecturers-contact">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{ substr($teacher->phone, 0, 3) . str_repeat('x', strlen($teacher->phone) - 3) }}</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ substr($teacher->email, 0, 3) . str_repeat('x', strpos($teacher->email, '@') - 3) . substr($teacher->email, strpos($teacher->email, '@')) }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h3 class="title-default-left title-bar-big-left-close">Profil Lengkap</h3>
                <div>{!! $teacher->bio !!}</div>
            </div>
        </div>
    </div>
</div>
@stop