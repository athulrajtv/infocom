@extends('guest.layouts.master')
@section('body')

<!-- Start of breadcrumb section
    ============================================= -->
<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="/guestassets/img/banner/bn-bg1.jpg">
    <span class="breadcrumb-overlay position-absolute"></span>
    <div class="container">
        <div class="yl-breadcrumb-content text-center yl-headline">
            <h2>Contact Us</h2>
            <div class="yl-breadcrumb-item ul-li">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of breadcrumb section
    ============================================= -->



<!-- Start of contact content section
    ============================================= -->

<section id="contact-content" class="contact-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="yl-section-title text-center yl-headline yl-title-style-two position-relative">
                    <p class="title-watermark">Institute</p>
                    <span>Top Institute</span>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach($data as $key => $data )
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="yl-section-title text-center yl-headline yl-title-style-two">
                    <h2>{{ $data->name }}</h2>
                </div>
                <div class="yl-contact-content-inner text-center">
                    <div class="yl-contact-content-icon">
                        <img src="/guestassets/img/cct-icon3.png" alt="" class="img-fluid">
                    </div>
                    <div class="yl-contact-content-text yl-headline">
                        <h3>Address</h3>
                        <span>
                            {!!$data->address!!}
                        </span>
                    </div>
                    <hr>
                </div>

                <div class="yl-contact-content-inner text-center">
                    <div class="yl-contact-content-icon ">
                        <img src="/guestassets/img/cct-icon2.png" alt="" class="img-fluid">
                    </div>
                    <div class="yl-contact-content-text yl-headline">
                        <h3>Email Us</h3>
                        <span>
                            {!!$data->email!!}
                        </span>
                        <!-- <span><a href="mailto:infocomperumbavoor@gmail.com">infocomperumbavoor@gmail.com</a></span>
                            <span><a href="mailto:infocomofficepbvr@gmail.com"><br>infocomofficepbvr@gmail.com</a></span> -->
                        <hr>
                    </div>
                </div>
                <div class="yl-contact-content-inner text-center">
                    <div class="yl-contact-content-icon">
                        <img src="/guestassets/img/cct-icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="yl-contact-content-text yl-headline">
                        <h3>Phone No</h3>
                        <span>
                            {!!$data->number!!}
                        </span>
                        <!-- <span><a href="tel:+91 9048 692 345">+91 9048 692 345</a></span><br>
                            <span><a href="tel:0484-259 19 81">0484-259 19 81</a></span> -->

                    </div>
                </div>
                {!!$data->link!!}
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="" class="enquiry-content-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="yl-enquiry-form-wrap yl-contact-form-wrap yl-headline">

                    <!-- Display Success and Error Messages -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <h3>Write us a message</h3>
                    <form class="formSubmit yl-contact-form-area" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="yl-contact-form-input d-flex">
                            <div class="d-grid">
                                <input type="text" placeholder="Your Name*" name="name">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <input type="email" placeholder="Your email*" name="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <input type="text" placeholder="Phone" name="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <textarea placeholder="Write your message here*" name="message"></textarea>
                        @error('message')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of contact content section
    ============================================= -->

@endsection