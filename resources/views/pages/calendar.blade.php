@extends('layouts.master')

@section('title', $calendarDetail->name)

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $calendarDetail->name }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Akademik</li>
                <li style="margin: 10px">/</li>
                <li>{{ $calendarDetail->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Kalender Akademik Terbaru</h2>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        {!! $calendarDetail->description !!}
                    </div>
                </div>
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <a href="{{ asset('storage/' . $calendarDetail->file) }}" target="_blank" class="btn btn-primary">Unduh Kalender Akademik</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h3 class="sidebar-title">Jadwal Kegiatan Akademik</h3>
                        <div class="panel-group curriculum-wrapper" id="accordion">
                            @foreach ($calendars as $calendar)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $calendar->id }}">
                                            <ul>
                                                <li><i class="fa fa-file-o" aria-hidden="true"></i></li>
                                                <li>{{ $calendar->name }}</li>
                                                <li>{{ Str::limit($calendar->description, 50) }}</li>
                                                <li><i class="fa fa-clock-o" aria-hidden="true"><span> {{ \Carbon\Carbon::parse($calendar->date)->format('F d, Y') }}</span></i></li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapse{{ $calendar->id }}" role="tabpanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{$calendar->description}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop