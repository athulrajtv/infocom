@extends('guest.layouts.master')
@section('body')

    <!-- Start of breadcrumb section
    ============================================= -->
    <section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="/guestassets/img/banner/bn-bg005.jpg">
        <span class="breadcrumb-overlay position-absolute"></span>
        <div class="container">
            <div class="yl-breadcrumb-content text-center yl-headline">
                <h2>Photo Gallery</h2>
                <div class="yl-breadcrumb-item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
    ============================================= -->

    <!-- Start of photo gallery section
    ============================================= -->
    <section id="yl-photo-gallery" class="yl-photo-gallery-section">
        <div class="container">
            @foreach($data as $category)
            <div class="yl-photo-gallery-area">
                <h2>{{ $category->title }} </h2>
                <div class="filtr-container-area grid clearfix" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
                    <div class="grid-sizer"></div>
                    @foreach($record as $item)
                        @if($item->gallery_id == $category->id)
                            <div class="grid-item grid-size-33 business design health" data-category="business design health">
                                <div class="photo-gallery-innerbox">
                                    <div class="content">
                                        <div class="content-overlay"></div>
                                        <a class="yl-photo-popup" data-lightbox="roadtrip" href="#"></a>
                                        <img class="yl-photo-popup" src="/uploads/{{ $item->image }}" alt="" class="img-fluid">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title"></h3>
                                            <p class="content-text"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
            
            <div class="yl-course-more-btn text-center">
                <a href="#">Load More <i class="fas fa-sync-alt"></i></a>
            </div>
        </div>
    </section>
    <!-- End of photo gallery section
    ============================================= -->

@endsection