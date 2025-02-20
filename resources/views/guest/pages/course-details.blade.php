@extends('guest.layouts.master')
@section('body')

<section id="yl-breadcrumb" class="yl-breadcrumb-section position-relative" data-background="/guestassets/img/banner/bn-bg003.jpg">
   <span class="breadcrumb-overlay position-absolute"></span>
   <div class="container">
      <div class="yl-breadcrumb-content text-center yl-headline"> 
         <h2>Courses</h2>
         <div class="yl-breadcrumb-item ul-li">
            <ul class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Courses</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="c-detls">
   <div class="container">
      <div class="row">
         @if($record->count())
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
               <div class="coursed-img">
                  <img src="/uploads/{{ $record->image }}" class="img-fluid">
               </div>
               <div class="coursed-cntnt">
                  <h2>{{ $record->title }}</h2>

                  <p>{{ $record->description }}</p>
                  <p class="d-e">Duration <span> : {{ $record->duration }}</span></p>
                  <p>Eligibility <span> : {{ $record->eligibility }}</span></p>
                  <h5>Career options</h5>
                  <p>{{ $record->career }}</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
               <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                  <!-- <div class="prgrm-cntnt">
                     <h5>Programme Structure</h5>
                     <h6>Theory</h6>
                     <ul>
                        
                        <li><button><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>Fundamentals of web designing -<span class="li-span">html,css,Javascript</span></li>
                        <li><button><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>Graphic designing and Frontent <span class="li-span">Development</span></li>
                        <li><button><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>Full stack web development using PHP</li>
                     </ul>
                     <h6>Lab</h6>
                     <ul>
                        <li><button><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>web design
                           <li class="web-li">- graphic design,Javascript</li>
                           <li class="web-list">- front-End frameworks</li>
                        </li>
                        <li><button><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>Web app development (PHP and <span class="li-span"> Database)</span></li>
                     </ul>
                  </div> -->
                  </div>
                  <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                     <div class="ad-form">
                        <h5>Contact Us</h5>
                        <div class="fm-input">
                           <input type="text" name="" class="form-control ad-fm" placeholder="Name">
                        </div>
                        <div class="fm-input">
                           <input type="text" name="" class="form-control ad-fm" placeholder="Email">
                        </div>
                        <div class="fm-input">
                           <input type="text" name="" class="form-control ad-fm" placeholder="Place">
                        </div>
                        <div class="fm-input">
                           <input type="text" name="" class="form-control ad-fm" placeholder="Phone">
                        </div>
                        <div class="fm-input">
                           <button class="ad-fm-btn">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         @endif
      </div>

   </div>
</section>

@endsection