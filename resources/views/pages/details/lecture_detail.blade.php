@extends('layouts.master')

@section('title', $teacher->name . ' - Dosen')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $teacher->name }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li><a href="{{ route('teachers.index') }}">Pengajar</a></li>
                <li>{{ $teacher->name }}</li>
            </ul>
        </div>
    </div>
</div>
@stop