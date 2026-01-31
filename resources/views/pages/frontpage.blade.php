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
<div class="service1-area">
    <div class="service1-inner-area">
        <div class="container">
            <div class="row service1-wrapper">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                    <div class="service-box-content">
                        <h3><a href="#">Scholarship Facility</a></h3>
                        <p>Eimply dummy text printing ypese tting industry.</p>
                    </div>
                    <div class="service-box-icon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                    <div class="service-box-content">
                        <h3><a href="#">Skilled Lecturers</a></h3>
                        <p>Eimply dummy text printing ypese tting industry.</p>
                    </div>
                    <div class="service-box-icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                    <div class="service-box-content">
                        <h3><a href="#">Book Library & Store</a></h3>
                        <p>Eimply dummy text printing ypese tting industry.</p>
                    </div>
                    <div class="service-box-icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about1-area">
    <div class="container">
        <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Welcome To Academics</h1>
        <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
        <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
            <img src="{{asset('img/about/1.jpg')}}" alt="about" class="img-responsive" />
        </div>
    </div>
</div>
<div class="courses2-area bg-common-style" style="background-image: url({{asset('img/featured/back2.jpg')}});">
    <div class="container">
        <h2 class="title-default-left">Featured Courses</h2>
    </div>
    <div class="container courses-list-wrapper">
        <div class="row courses-wrapper courses-list">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/5.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Evining MBA</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>70
                                    <br><span> Classes</span></li>
                                <li>7 pm - 10 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/6.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>20
                                    <br><span> Classes</span></li>
                                <li>8 pm - 9 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/7.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Advance GMAT</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>3 Months
                                    <br><span> Course</span></li>
                                <li>50
                                    <br><span> Classes</span></li>
                                <li>10 pm - 11 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/8.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">IELTS</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>2 Months
                                    <br><span> Course</span></li>
                                <li>15
                                    <br><span> Classes</span></li>
                                <li>5 pm - 7 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/9.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Evining MBA</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>70
                                    <br><span> Classes</span></li>
                                <li>7 pm - 10 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/10.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>20
                                    <br><span> Classes</span></li>
                                <li>8 pm - 9 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/11.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Advance GMAT</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>3 Months
                                    <br><span> Course</span></li>
                                <li>50
                                    <br><span> Classes</span></li>
                                <li>10 pm - 11 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/12.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">IELTS</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>2 Months
                                    <br><span> Course</span></li>
                                <li>15
                                    <br><span> Classes</span></li>
                                <li>5 pm - 7 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/13.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Evining MBA</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>70
                                    <br><span> Classes</span></li>
                                <li>7 pm - 10 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                <div class="courses-box2">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-right">
                            <img class="img-responsive" src="img/course/14.jpg" alt="courses">
                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                            <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>20
                                    <br><span> Classes</span></li>
                                <li>8 pm - 9 pm
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all-btn-area loadmore">
            <a href="#" class="view-all-accent-btn">View All Corses</a>
        </div>
    </div>
</div>
<div class="video-area overlay-video bg-common-style" style="background-image: url({{asset('img/banner/1.jpg')}});">
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
<div class="counter-area bg-primary-deep" style="background-image: url({{asset('img/banner/4.jpg')}});">
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
<div class="students-say-area">
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
</div>
<div class="students-join1-area">
    <div class="container">
        <div class="students-join1-wrapper">
            <div class="students-join1-left">
                <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                    <ul class="ri-grid-list">
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="students-join1-right">
                <div>
                    <h2>Join<span> 29,12,093</span> Students.</h2>
                    <a href="#" class="join-now-btn">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-area">
    <div class="container">
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
@endsection
