@extends('layouts.master')

@section('title', 'Program Beasiswa')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Program Beasiswa</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Layanan</li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Kemahasiswaan</li>
                <li style="margin: 10px">/</li>
                <li>Program Beasiswa</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Informasi Beasiswa untuk Mahasiswa Aktif</h2>
        <p class="mb-30">Berikut adalah informasi mengenai program beasiswa yang tersedia untuk mahasiswa aktif di Universitas Negeri Malang. Program beasiswa ini bertujuan untuk mendukung mahasiswa dalam mencapai prestasi akademik dan non-akademik, serta memberikan bantuan keuangan bagi mereka yang membutuhkan.</p>
        <div class="row about-page1-inner mt-30">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h3 class="sidebar-title">Daftar Beasiswa tersedia</h3>
                        <div class="panel-group curriculum-wrapper" id="accordion">
                            @foreach ($scholarships as $scholarship)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $scholarship->id }}">
                                            <ul>
                                                <li><i class="fa fa-file-o" aria-hidden="true"></i></li>
                                                <li>{{ $scholarship->name }}</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapse{{ $scholarship->id }}" role="tabpanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{$scholarship->description}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about-page1-inner mt-30">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h3 class="sidebar-title">Prosedur Pengajuan Beasiswa</h3>
                        <ul class="list-group">
                          @foreach ($procedures as $procedure)
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> {{ $procedure }}</li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop