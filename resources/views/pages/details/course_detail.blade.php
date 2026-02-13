@extends('layouts.master')

@section('title', $course->name)

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
                            <img src="{{ asset('storage/'.$banner->image) }}" class="img-responsive" alt="{{ $banner->title }}" style="width: 746px; height: 434px; object-fit: cover;">
                        </div>
                        @endforeach
                    </div>
                    <p>{{ $course->description }}</p>
                    <div class="course-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="course-details-tab-btn">
                                    <li class="active"><a href="#features" data-toggle="tab" aria-expanded="false">Features</a></li>
                                    <li><a href="#lecturers" data-toggle="tab" aria-expanded="false">Lecturers</a></li>
                                    <li><a href="#reviews" data-toggle="tab" aria-expanded="false">Reviews</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="features">
                                        <ul class="course-feature">
                                            <li>Start: 01 January, 2017</li>
                                            <li>Course Duration: 3 Month</li>
                                            <li>Total Credits: 150</li>
                                            <li>Seats Available: 200</li>
                                            <li>Total Classes : 100</li>
                                            <li>Lecturer: 03</li>
                                            <li>Class: Sunday - Monday</li>
                                            <li>Class Time: 10 am - 11.00 am</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="lecturers">
                                        <div class="course-details-skilled-lecturers">
                                            <ul>
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img src="img/sidebar/1.jpg" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">Kazi Fahim</a></h4>
                                                        <p>Senior UI Designer</p>
                                                    </div>
                                                    <div class="skilled-lecturers-schedule">
                                                        <ul>
                                                            <li>
                                                                <h4>Day</h4>
                                                                <p>Wed Day</p>
                                                            </li>
                                                            <li>
                                                                <h4>Time</h4>
                                                                <p>9 am - 11 am</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img src="img/sidebar/2.jpg" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">Monalisa Deo</a></h4>
                                                        <p>Senior WordPress Developer</p>
                                                    </div>
                                                    <div class="skilled-lecturers-schedule">
                                                        <ul>
                                                            <li>
                                                                <h4>Day</h4>
                                                                <p>Sun Day</p>
                                                            </li>
                                                            <li>
                                                                <h4>Time</h4>
                                                                <p>08 pm - 10 pm</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img src="img/sidebar/3.jpg" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">John Berry</a></h4>
                                                        <p>Senior Finance Lecturer</p>
                                                    </div>
                                                    <div class="skilled-lecturers-schedule">
                                                        <ul>
                                                            <li>
                                                                <h4>Day</h4>
                                                                <p>Mon Day</p>
                                                            </li>
                                                            <li>
                                                                <h4>Time</h4>
                                                                <p>04 pm - 11 05</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews">
                                        <div class="course-details-comments">
                                            <h3 class="sidebar-title">Student Reviews</h3>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img alt="Comments" src="img/course/16.jpg" class="media-object">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Greg Christman</a></h3>
                                                    <h4>Excellent course!</h4>
                                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                    <div class="replay-area">
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img alt="Comments" src="img/course/17.jpg" class="media-object">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Lora Ekram</a></h3>
                                                    <h4>Excellent course!</h4>
                                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                    <div class="replay-area">
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img alt="Comments" src="img/course/18.jpg" class="media-object">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Mike Jones</a></h3>
                                                    <h4>Excellent course!</h4>
                                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                    <div class="replay-area">
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img alt="Comments" src="img/course/16.jpg" class="media-object">
                                                </a>
                                                <div class="media-body">
                                                    <h3><a href="#">Greg Christman</a></h3>
                                                    <h4>Excellent course!</h4>
                                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                    <div class="replay-area">
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="leave-comments">
                                            <h3 class="sidebar-title">Leave A Comment</h3>
                                            <div class="row">
                                                <div class="contact-form" id="review-form">
                                                    <form>
                                                        <fieldset>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Name" class="form-control">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email" class="form-control">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="rate-wrapper">
                                                                        <div class="rate-label">Your Rating:</div>
                                                                        <div class="rate">
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-courses-title-area">
                    <h3>Related Courses</h3>
                </div>
                <div id="shadow-carousel" class="related-courses-carousel">
                    <div class="rc-carousel" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/1.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>40
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/2.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">GMAT</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>3 Months
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/3.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">IELTS</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>2 Months
                                            <br><span> Course</span></li>
                                        <li>24
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Classes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/4.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Regular MBA</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>50
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/1.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>40
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/2.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">GMAT</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>3 Months
                                            <br><span> Course</span></li>
                                        <li>30
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="img/course/3.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Regular MBA</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>50
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Course Price</h3>
                            <div class="sidebar-course-price">
                                <span>$800.00</span>
                                <a href="#" class="enroll-btn">Enroll THis Course</a>
                                <a href="#" class="download-btn">Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Course Reviews</h3>
                            <div class="sidebar-course-reviews">
                                <h4>Average Rating<span>4.8</span></h4>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                </ul>
                                <div class="skill-area">
                                    <div class="progress">
                                        <div class="lead">5 Stars </div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 100%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="100%" class="progress-bar wow fadeInLeft  animated"></div><span>10</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">4 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="80%" class="progress-bar wow fadeInLeft  animated"></div><span>6</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">3 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 60%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="60%" class="progress-bar wow fadeInLeft  animated"></div><span>3</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">2 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div><span>0</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">1 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div><span>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Asked Any Question?</h3>
                            <div class="sidebar-question-form">
                                <form id="question-form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="message" id="sidebar-form-message" rows="3" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="default-full-width-btn">Send</button>
                                        </div>
                                        <div class='form-response'></div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-add-area overlay-primaryColor">
                            <img src="img/banner/7.jpg" class="img-responsive" alt="banner">
                            <a href="#" class="sidebar-ghost-btn">Apply Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection