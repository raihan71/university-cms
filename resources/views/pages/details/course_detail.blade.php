@extends('layouts.master')

@section('title', $course->name)

@push('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@push('scripts')
<script>
    (function($) {
         $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true
        });
        $(function() {
            var $header = $('#header3');
            var $sticker = $('#sticker');
            if (!$header.length || !$sticker.length) {
                return;
            }

            var topBarHeight = $header.find('.header-top-area').outerHeight() || 0;

            var syncHeaderBackground = function() {
                if ($(window).width() <= 767) {
                    $sticker.removeClass('stick');
                    $header.css('top', '');
                    return;
                }

                var scrollTop = $(window).scrollTop();
                if (scrollTop >= topBarHeight) {
                    $sticker.addClass('stick');
                    $header.css('top', '-' + topBarHeight + 'px');
                } else {
                    $sticker.removeClass('stick');
                    $header.css('top', '-' + scrollTop + 'px');
                }
            };

            syncHeaderBackground();
            $(window).on('scroll.courseDetailHeader resize.courseDetailHeader', syncHeaderBackground);
        });
    })(jQuery);
</script>
@endpush

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $course->name }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li>{{ $course->name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Courses Page 4 Area Start Here -->
<div class="courses-page-area4">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="course-details-inner">
                    <h2 class="title-default-left title-bar-high">{{ $course->name }}</h2>
                    <div class="owl-carousel owl-theme">
                        @foreach($banners as $banner)
                        <div class="item">
                            <img loading="lazy" src="{{ asset('storage/'.$banner->image) }}" class="img-responsive" alt="{{ $banner->title }}" style="width: 746px; height: 434px; object-fit: cover;">
                        </div>
                        @endforeach
                    </div>
                    <p>{{ $course->description }}</p>
                    <div class="course-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="course-details-tab-btn">
                                    <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Deskripsi</a></li>
                                    <li><a href="#score" data-toggle="tab" aria-expanded="false">Akreditasi</a></li>
                                    <li><a href="#lecturers" data-toggle="tab" aria-expanded="false">Pengajar</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="description">
                                        <div class="trix-content">
                                            {!! $course->content !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lecturers">
                                        <div class="course-details-skilled-lecturers">
                                            <h3 class="sidebar-title">Dosen Prodi {{$course->name}}</h3>
                                            <ul>
                                                @foreach($teachers as $teacher)
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img width="100" height="100" src="{{asset('storage/'.$teacher->photo)}}" class="img-responsive" alt="{{$teacher->name}}"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">{{$teacher->name}}</a></h4>
                                                        <p>{{$teacher->subject}}</p>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="score">
                                        <div class="course-details-comments">
                                            <h3 class="sidebar-title">Akreditasi {{$course->name}}</h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <img loading="lazy" src="{{ asset('storage/' . $course->image) }}" class="img-responsive" alt="{{$course->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Punya pertanyaan lain?</h3>
                            <div class="sidebar-question-form">
                                <form id="question-form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" autocomplete="off" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" autocomplete="off" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="message" id="sidebar-form-message" rows="3" cols="20" data-error="Message field is required" autocomplete="off" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="default-full-width-btn">Kirim Sekarang</button>
                                        </div>
                                        <div class='form-response'></div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-add-area overlay-primaryColor">
                            <img src="{{asset('img/building3.jpg')}}" class="img-responsive" alt="banner">
                            <a href="#" class="sidebar-ghost-btn">Daftar Yuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
