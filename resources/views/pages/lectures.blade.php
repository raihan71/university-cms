@extends('layouts.master')

@section('title', 'Dosen & Staff')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Staff & Dosen</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Profil</li>
                <li style="margin: 10px">/</li>
                <li>Staff & Dosen</li>
            </ul>
        </div>
    </div>
</div>
<div class="lecturers-page1-area">
    <div class="container">
        <div class="row">
            @foreach($teachers as $item)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="{{ route('profile.teachers.show', $item->slug) }}"><img class="img-responsive" style="width: 263px; height: 272px; object-fit: cover;" src="{{ asset('storage/'.$item->photo) }}" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="{{ route('profile.teachers.show', $item->slug) }}">{{ $item->name }}</a></h3>
                            <span class="item-designation">{{ $item->role }}</span>
                            <h5>{{ Str::upper($item->isCode) }}: {{ $item->nip }}</h5>
                            <ul class="lecturers-social">
                                <li><a href="{{ $item->web }}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $item->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $item->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $item->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $item->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="text-center">
                    {!! $teachers->withQueryString()->links('pagination::bootstrap-4') !!}
                </ul>
            </div>
        </div>
    </div>
</div>
@stop