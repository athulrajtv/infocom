@extends('guest.layouts.master')
@section('body')

    <!-- Start of slider section
    ============================================= -->
    <section id="yl-slider-2" class="yl-slider-section-2">
        <div id="yl-main-slider-2" class="yl-main-slider-wrap owl-carousel">
            <div class="slider-main-item-2 position-relative">
                <div class="slider-main-img img-zooming" data-background="/guestassets/img/banner/banner-one.webp"></div>
                <div class="slider-overlay"></div>
                <div class="container">
                    <div class="slider-main-text yl-headline text-center pera-content">
                        <span>Build Your Career with Infocom</span>
                        <h1>Infocom Computer Academy</h1>
                        <a href="https://infocomedu.com/course">Browse Course</a>
                    </div>
                </div>
            </div>
            <div class="slider-main-item-2 position-relative">
                <div class="slider-main-img img-zooming" data-background="/guestassets/img/banner/banner-two.webp"></div>
                <div class="slider-overlay"></div>
                <div class="container">
                    <div class="slider-main-text yl-headline text-center pera-content">
                        <span></span>
                        <h1>Passionate your dream with creativity</h1>
                        <a href="https://infocomedu.com/course">Browse Course</a>
                    </div>
                </div>
            </div>
            <div class="slider-main-item-2 position-relative">
                <div class="slider-main-img img-zooming" data-background="/guestassets/img/banner/banner-three.jpg"></div>
                <div class="slider-overlay"></div>
                <div class="container">
                    <div class="slider-main-text yl-headline text-center pera-content">
                        <span></span>
                        <h1>Infocom Computer Academy</h1>
                        <a href="https://infocomedu.com/course">Browse Course</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of slider section
    ============================================= -->

    <!-- Start of course  section
    ============================================= -->
    <section id="yl-course-3" class="yl-course-section-3">
        <div class="container">
            <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
                <p class="title-watermark">Courses</p>
                <span>Courses</span>
                <h2>Featured Courses.
                </h2>
            </div>
            <div class="yl-course-content-3">
                <div class="row">
                    @foreach($course as $key => $course	)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="cd-box">
                                <div class="c-img">
                                    <img src="/uploads/{{ $course->image }}" class="img-fluid">
                                </div>
                                <div class="cd-box-cntnt">
                                    <a href="{{ route('course.Show',$course->id) }}">
                                        <h3>{{ $course->title }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End of course  section
    ============================================= -->

    <!-- Start of course  search section
    ============================================= -->
    <section id="yl-course-search-3" class="yl-course-search-section-3">
        <div class="container">
            <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
                <p class="title-watermark">Browse</p>
                <span>Extend Your Skill</span>
                <h2>Search Infocom Courses.
                </h2>
            </div>
            <div class="search-course-content">
                <div class="search-form-wrap position-relative">
                    <form action="#">
                        <input type="text" placeholder="Search what do you want to learn?">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="yl-fun-fact-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="yl-fun-fact-inner">
                                <div class="yl-fun-fact-icon position-relative float-left">
                                    <i class="flaticon-file"></i>
                                </div>
                                <div class="yl-fun-fact-text yl-headline pera-content">
                                    <span class="odometer" data-count="12000">00 </span><strong>+</strong>
                                    <p>Live Lectures</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="yl-fun-fact-inner">
                                <div class="yl-fun-fact-icon position-relative float-left">
                                    <i class="flaticon-graduation-cap"></i>
                                </div>
                                <div class="yl-fun-fact-text yl-headline pera-content">
                                    <span class="odometer" data-count="5">00 </span><strong>k+</strong>
                                    <p>Total Graduate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="yl-fun-fact-inner">
                                <div class="yl-fun-fact-icon position-relative float-left">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="yl-fun-fact-text yl-headline pera-content">
                                    <span class="odometer" data-count="15">00 </span><strong>k+</strong>
                                    <p>Active Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="yl-fun-fact-inner">
                                <div class="yl-fun-fact-icon position-relative float-left">
                                    <i class="flaticon-like"></i>
                                </div>
                                <div class="yl-fun-fact-text yl-headline pera-content">
                                    <span class="odometer" data-count="10000">00 </span><strong>k+</strong>
                                    <p>Total Thumbs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of course search section
    ============================================= -->

    <!-- Start of course  search section
    ============================================= -->
    <section id="yl-instructor" class="yl-instructor-section-wrap">
        <div class="container">
            <div class="yl-section-title text-left yl-headline  position-relative">
                <span>Certifications</span>
                <h2>Expert Certifications
                </h2>
            </div>
            <div class="yl-instructor-slide-wrap">
                <div id="yl-instructor-slider" class="yl-instructor-slide-area owl-carousel">
                    @foreach($data as $key => $data	)
                    <div class="yl-instructor-img-text text-center position-relative wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="yl-instructor-text yl-headline position-relative">
                            <img src="/uploads/{{ $data->image }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Start of course  search section
    ============================================= -->

    <!-- Start of Newslatter section
    ============================================= -->
    <section id="yl-newslatter" class="yl-newslatter-section-2 position-relative">
        <div class="container">
            <div class="yl-newslatter-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="yl-newslatter-text-icon">
                            <div class="yl-newslatter-icon float-left">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="yl-newslatter-text yl-headline">
                                <h3>Subscribe to a Newsletter!</h3>
                                <span>You will get our update instantly! <img src="/guestassets/img/like.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="yl-newslatter-form position-relative">
                            <form action="#">
                                <input type="email" placeholder="Enter your mail address...">
                                <button>Submit <i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Newslatter section
    ============================================= -->

@endsection