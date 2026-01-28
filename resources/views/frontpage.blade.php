@extends('layouts.master')

@section('title', 'Selamat Datang')

@section('content')
 <div class="slider1-area slider3-area overlay-default">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <img src="{{asset('img/slider/3-1.jpg')}}" alt="slider" title="#slider-direction-1" />
            <img src="{{asset('img/slider/3-2.jpg')}}" alt="slider" title="#slider-direction-2" />
            <img src="{{asset('img/slider/3-3.jpg')}}" alt="slider" title="#slider-direction-3" />
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="title-container s-tb-c">
                    <div class="title1">Best Education For Diploma</div>
                    <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                        <br>dummy text ever sinceprinting and typesetting industry. </p>
                    <div class="slider-btn-area">
                        <a href="#" class="default-big-btn">Start a Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-2">
                <div class="title-container s-tb-c">
                    <div class="title1">Best Education For HTML Template</div>
                    <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                        <br>dummy text ever sinceprinting and typesetting industry. </p>
                    <div class="slider-btn-area">
                        <a href="#" class="default-big-btn">Start a Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-3">
                <div class="title-container s-tb-c">
                    <div class="title1">Best Education Into PHP</div>
                    <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                        <br>dummy text ever sinceprinting and typesetting industry. </p>
                    <div class="slider-btn-area">
                        <a href="#" class="default-big-btn">Start a Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
