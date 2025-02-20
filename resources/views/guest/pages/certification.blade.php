@extends('guest.layouts.master')
@section('body')

    <!-- Start of breadcrumb section
    ============================================= -->
    <section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="/guestassets/img/banner/bn-bg004.jpg">
        <span class="breadcrumb-overlay position-absolute"></span>
        <div class="container">
            <div class="yl-breadcrumb-content text-center yl-headline">
                <h2>Certifications</h2>
                <div class="yl-breadcrumb-item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Certifications</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
    ============================================= -->

    <!-- Start of instructors section
    ============================================= -->
    <section id="yl-instructor" class="yl-instructor-section">
        <div class="container">
            <div class="yl-instructor-content">
                <div class="row">
                    @foreach($data as $key => $data	)
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="yl-instructor-img-text text-center position-relative">
                                <div class="yl-instructor-text yl-headline position-relative">
                                    <img src="/uploads/{{ $data->image }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End of instructors section
    ============================================= -->

@endsection