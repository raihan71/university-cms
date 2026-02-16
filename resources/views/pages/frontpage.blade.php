@extends('layouts.master')

@section('title', 'Selamat Datang')

@section('content')
<div class="slider1-area slider3-area overlay-default">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            @foreach ($banners as $banner)
                <img class="banner-slide-img" src="{{ asset('storage/'.$banner->image) }}" alt="slider" title="#slider-direction-{{ $loop->index + 1 }}" />
            @endforeach
        </div>
        @foreach ($banners as $banner)
        <div id="slider-direction-{{ $loop->index + 1 }}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-{{ $loop->index + 1 }}">
                <div class="title-container s-tb-c">
                    <div class="title1">{{ $banner->title }}</div>
                    <p>{{ $banner->subtitle }}</p>
                    <div class="slider-btn-area">
                        <a href="{{$banner->link}}" class="default-big-btn">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="service1-area">
    <div class="service1-inner-area">
        <div class="container">
            <div class="row service1-wrapper">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                    <div class="service-box-content">
                        <h3><a href="#">{{ $service['title'] }}</a></h3>
                        <p>{{ $service['description'] }}</p>
                    </div>
                    <div class="service-box-icon">
                        <i class="fa {{ $service['icon'] }}" aria-hidden="true"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="about1-area">
    <div class="container">
        <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Wilujeung Sumping</h1>
        <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
        <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
            <img src="{{asset('img/team/team1.png')}}" width="650" height="328" alt="about" class="img-responsive" />
        </div>
    </div>
</div>
<div class="courses2-area bg-common-style" style="background-image: url({{asset('img/featured/back2.jpg')}});">
    <div class="container">
        <h2 class="title-default-left">Rekomendasi Program Studi</h2>
    </div>
    <div class="container courses-list-wrapper">
        <div class="row courses-wrapper courses-list">
            @foreach ($courses as $course)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img loading="lazy" src="{{ asset('storage/'.$course->image) }}" class="img-responsive" alt="{{ $course->name }}">
                            <a href="{{ route('courses.show', $course->slug) }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="{{ route('courses.show', $course->slug) }}">{{ $course->name }}</a></h3>
                            <p class="item-content">{{ Str::limit($course->description, 50) }}</p>
                            <ul class="courses-info">
                                <li>4 Tahun
                                    <br><span> Studi</span></li>
                                <li>160
                                    <br><span> SKS</span></li>
                                <li>Karyawan - Regular
                                    <br><span> Kelas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="view-all-btn-area loadmore">
            <a href="#" class="view-all-accent-btn">View All Corses</a>
        </div>
    </div>
</div>
<div class="video-area overlay-video bg-common-style" style="background-image: url({{asset('img/about/building2.jpg')}}); background-position: center;">
    <div class="container">
        <div class="video-content">
            <h2 class="video-title">Watch Campus Life Video Tour</h2>
            <p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem
                <br>Ipsum industry's standard dum an unknowramble.</p>
            <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                <h2 class="title-default-left">Latest News</h2>
                <ul class="news-wrapper">
                    <li>
                        <div class="news-img-holder">
                            <a href="#"><img src="img/news/1.jpg" class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="single-news.html">Summer Course Start From 1st June</a></h3>
                            <div class="post-date">June 15, 2017</div>
                            <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                        </div>
                    </li>
                    <li>
                        <div class="news-img-holder">
                            <a href="#"><img src="img/news/2.jpg" class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="single-news.html">Guest Interview will Occur Soon</a></h3>
                            <div class="post-date">June 15, 2017</div>
                            <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                        </div>
                    </li>
                    <li>
                        <div class="news-img-holder">
                            <a href="#"><img src="img/news/3.jpg" class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="single-news.html">Easy English Learning Way</a></h3>
                            <div class="post-date">June 15, 2017</div>
                            <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                        </div>
                    </li>
                </ul>
                <div class="news-btn-holder">
                    <a href="#" class="view-all-accent-btn">View All</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                <h2 class="title-default-left">Upcoming Events</h2>
                <ul class="event-wrapper">
                    <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="event-calender-wrapper">
                            <div class="event-calender-holder">
                                <h3>26</h3>
                                <p>Jan</p>
                                <span>2017</span>
                            </div>
                        </div>
                        <div class="event-content-holder">
                            <h3><a href="single-event.html">Html MeetUp Conference 2017</a></h3>
                            <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                            <ul>
                                <li>04:00 PM - 06:00 PM</li>
                                <li>Australia , Melborn</li>
                            </ul>
                        </div>
                    </li>
                    <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
                        <div class="event-calender-wrapper">
                            <div class="event-calender-holder">
                                <h3>26</h3>
                                <p>Jan</p>
                                <span>2017</span>
                            </div>
                        </div>
                        <div class="event-content-holder">
                            <h3><a href="single-event.html">Workshop On UI Design</a></h3>
                            <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                            <ul>
                                <li>03:00 PM - 05:00 PM</li>
                                <li>Australia , Melborn</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="event-btn-holder">
                    <a href="#" class="view-all-primary-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="counter-area bg-primary-deep" style="background-image: url({{asset('img/about/wisudawan.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                <h2 class="about-counter title-bar-counter" data-num="80">80</h2>
                <p>PROFESSIONAL TEACHER</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                <h2 class="about-counter title-bar-counter" data-num="20">20</h2>
                <p>NEWS COURSES EVERY YEARS</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                <p>NEWS COURSES EVERY YEARS</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                <p>REGISTERED STUDENTS</p>
            </div>
        </div>
    </div>
</div>
<div class="brand-area bg-common-style">
    <div class="container">
        <h2 class="title-default-center">Partner Kerja Sama</h2>
        <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/1.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/2.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/3.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/4.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/1.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/2.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/3.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="img/brand/4.jpg" alt="brand"></a>
            </div>
        </div>
    </div>
</div>
{{-- <div class="students-say-area">
    <h2 class="title-default-center">What Our Students Say</h2>
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/1.jpg" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                        <span class="item-designation">UI Designer</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/2.jpg" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                        <span class="item-designation">Manager</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/1.jpg" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                        <span class="item-designation">UI Designer</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/2.jpg" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                        <span class="item-designation">Manager</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/1.jpg" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                        <span class="item-designation">UI Designer</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-wrapper">
                    <div class="profile-img-wrapper">
                        <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/2.jpg" alt="Testimonial"></a>
                    </div>
                    <div class="tlp-tm-content-wrapper">
                        <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                        <span class="item-designation">Manager</span>
                        <ul class="rating-wrapper">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 {{-- // $('#question-form').on('submit', function(e) {
//     e.preventDefault();

//     var formData = {
//         name: $('#form-name').val(),
//         email: $('#form-email').val(),
//         message: $('#sidebar-form-message').val(),
//     };

//     $.ajax({
//         url: '{{ route("course.question.submit", $course->id) }}',
//         method: 'POST',
//         data: formData,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function(response) {
//             $('#question-form .form-response').html('<div class="alert alert-success">' + response.message + '</div>');
//             $('#question-form')[0].reset();
//         },
//         error: function(xhr) {
//             var errorMessage = 'Terjadi kesalahan. Silakan coba lagi.';
//             if (xhr.responseJSON && xhr.responseJSON.message) {
//                 errorMessage = xhr.responseJSON.message;
//             }
//             $('#question-form .form-response').html('<div class="alert alert-danger">' + errorMessage + '</div>');
//         }
//     });
// }); --}}
@endsection

