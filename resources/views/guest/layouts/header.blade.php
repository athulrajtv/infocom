<!-- Start of header section
============================================= -->
<header id="yl-header" class="yl-header-main header-style-three">
   <div class="yl-header-three clearfix">
      <div class="container">
         <div class="yl-brand-logo float-left">
            <a href="#"><img src="/guestassets/img/logo/infocom-black.png" alt="" class="img-fluid" width="250px"></a>
         </div>
         <div class="yl-header-cart-login float-right">
            <div class="yl-top-cart-login">
                <button data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user"></i></button>
            </div>
         </div>
         <div class="yl-main-nav-wrap  float-right">
            <nav class="yl-main-navigation ul-li">
               <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                <li><a href="{{ route('Index') }}">Home</a></li>
                <li><a href="{{ route('About') }}">About</a></li>
                <li><a href="{{ route('Course') }}">Course</a></li>  
                <li><a href="{{ route('Gallery') }}">Gallery</a></li>  
                <li><a href="{{ route('Certification') }}">Certifications</a></li> 
                <li><a href="{{ route('Contact') }}">Contact</a></li> 
               </ul>
            </nav>
         </div>
         <div class="yl-mobile-menu-wrap">
            <div class="yl-mobile_menu position-relative">
               <div class="yl-mobile_menu_button yl-open_mobile_menu">
                  <i class="fas fa-bars"></i>
               </div>
               <div class="yl-mobile_menu_wrap">
                  <div class="mobile_menu_overlay yl-open_mobile_menu"></div>
                  <div class="yl-mobile_menu_content">
                     <div class="yl-mobile_menu_close yl-open_mobile_menu">
                        <i class="fas fa-times"></i>
                     </div>
                     <div class="m-brand-logo text-center">
                        <a href="#"><img src="/guestassets/img/logo/infocom.png" alt="" class="img-fluid" width="190px"></a>
                     </div>
                     <nav class="yl-mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                           <li><a href="{{ route('Index') }}">Home</a></li>
                           <li><a href="{{ route('About') }}">About</a></li>
                           <li><a href="{{ route('Course') }}">Course</a></li>
                           <li><a href="{{ route('Gallery') }}">Gallery</a></li>
                           <li><a href="{{ route('Certification') }}">Certifications</a></li>
                           <li><a href="{{ route('Contact') }}">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <!-- /Mobile-Menu -->
         </div>
      </div>
   </div>
</header>
<!-- End of header section
============================================= -->