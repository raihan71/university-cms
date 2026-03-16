@extends('layouts.master')

@section('title', 'Kontak kami')

@push('head')
    <style>
        .google-map-area iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
@endpush

@section('content')
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Galeri</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Informasi</li>
                <li style="margin: 10px">/</li>
                <li>Galeri</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-us-page2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2 class="title-default-left title-bar-high">Informasi</h2>
                <div class="contact-us-info2">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $university->location }}</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{ $university->phone }}</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $university->email }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-default-left title-bar-high">Kontak Dengan Kami</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form2">
                        <form id="contact-form">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="ol-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                    <div class="form-group margin-bottom-none">
                                        <button type="submit" class="default-big-btn">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="google-map-area" style="width: 100%; height: 450px;">
            {!! $university->map !!}
        </div>
      </div>
    </div>
</div>
@stop