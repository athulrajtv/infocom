@extends('guest.layouts.master')
@section('body')

<!-- Start of breadcrumb section
    ============================================= -->
<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="/guestassets/img/banner/bn-bg003.jpg">
    <span class="breadcrumb-overlay position-absolute"></span>
    <div class="container">
        <div class="yl-breadcrumb-content text-center yl-headline">
            <h2>Course</h2>
            <div class="yl-breadcrumb-item ul-li">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Course</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of breadcrumb section
    ============================================= -->

<section class="courses-sec">
    <div class="container">
        <div class="row">
            @foreach($data as $category)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="my-jdz">
                    <div class="jdzBox">
                        <h2>{{ $category->title }}</h2>
                        <ul>
                            <?php $id = 1; ?>
                            @foreach($record as $course)
                            @if($course->course_id == $category->id) <!-- Ensure only related courses are displayed -->
                            <li><span>{{ $id }}</span> {{ $course->name }}</li>
                            <?php $id += 1; ?>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="my-jdz">
                        <div class="jdzBox">
                            <h2>Tally Academy Certification</h2>
                            <ul>
                                <li><span>1</span>Tally ACE</li>
                                <li><span>2</span>Tally Guru</li>
                                <li><span>3</span>Tally Pro</li>
                                <li><span>4</span>GST using Tally</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="my-jdz">
                        <div class="jdzBox">
                            <h2>CAD and CAM Courses</h2>
                            <ul>
                                <li><span>1</span> Arcitectural Building Designing</li>
                                <li><span>2</span> Civil Cad</li>
                                <li><span>3</span>Mechanical Cad</li>
                                <li><span>4</span>Electrical Cad </li>
                                <li><span>5</span>Architectural Cad</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="my-jdz">
                        <div class="jdzBox">
                            <h2>Programming Courses</h2>
                            <ul>
                                <li><span>1</span> C, C++</li>
                                <li><span>2</span>VB, .NET</li>
                                <li><span>3</span>Android, Python</li>
                                <li><span>4</span>PHP </li>
                                <li><span>5</span> JAVA</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="my-jdz">
                        <div class="jdzBox">
                            <h2>Multimedia and Animation Govt approved courses</h2>
                            <ul>
                                <li><span>1</span>Graphic Designing<p>(kerala Rutronix)</p>
                                </li>
                                <li><span>2</span>3d Animations & VFX </li>
                                <li><span>3</span>Multimedia Web Designing</li>
                                <li><span>4</span>Advertising & Designing<p>(kerala Rutronix)</p>
                                </li>
                                <li><span>5</span>2D Animation & Art Engineering </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</section>



@endsection