@extends('layouts.master')

@section('title', 'Aturan & Pedoman')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Aturan & Pedoman</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Akademik</li>
                <li style="margin: 10px">/</li>
                <li>Aturan & Pedoman</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Aturan & Pedoman</h2>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        {!! $university->rules_policy !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop