 <!-- Start of Footer  section
============================================= -->
   <footer id="yl-footer" class="yl-footer-section-2" data-background="/guestassets/img/f-bg.jpg">
      <div class="container">
         <div class="yl-footer-content-wrap">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="yl-footer-widget">
                     <div class="yl-footer-logo-widget yl-headline pera-content">
                        <div class="yl-footer-logo">
                           <a href="#"><img src="/guestassets/img/logo/infocom.png" alt="" class="img-fluid" width="190px"></a>
                           F
                        </div>
                        <p>Our Institute was founded in 2003, having two branches one in perumbavoor and another in kalady.</p>

                        <a class="footer-logo-btn text-center text-uppercase" href="{{ route('About') }}">About us</a>
                     </div>

                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="yl-footer-widget">
                     <div class="yl-footer-info-widget ul-li">
                        <h3 class="widget-title">Official info:Kalady</h3>
                        <ul>
                           <li>
                              <i class="fas fa-map-marker-alt"></i>
                              <a href="#">1st Floor,
                                 Krishna Complex,
                                 perumbavoor road-683 574 ,
                                 Kalady, Ernakulam</a>
                           </li>
                           <li>
                              <i class="fas fa-phone"></i><a href="tel:+91 9947 354 958">+91 9947 354 958 </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6">
                  <div class="yl-footer-widget">
                     <div class="yl-footer-info-widget ul-li">
                        <h3 class="widget-title">Official info:Perumbavoor</h3>
                        <ul>
                           <li>
                              <i class="fas fa-map-marker-alt"></i>
                              <a href="#">2nd floor ,Manju Complex , PP Road , Perumbavoor - 683542 , Ernakulam</a>
                           </li>
                           <li>
                              <i class="fas fa-phone"></i><a href="tel:+91 9048 692 345">+91 9048 692 345 </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--<div class="col-lg-3 col-md-6">
                  <div class="yl-footer-widget">
                     <div class="yl-footer-newslatter-widget pera-content">
                        <h3 class="widget-title">Opening Hours</h3>
                        <div class="office-open-hour">
                           <p>Mon - Sat: 8 am - 5 pm<br>
                              Sunday: 9 am - 1 pm
                           </p>
                        </div>
                     </div>
                  </div>
               </div>-->
               <div class="col-lg-3 col-md-6">
                  <div class="yl-footer-widget">
                     <div class="yl-footer-instagram-widget">
                        <h3 class="widget-title">Social Media</h3>
                        <div class="yl-footer-social ul-li">
                           <ul>
                              <li><a href="https://www.facebook.com/INFOCOMACADEMY/"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/infocom_official/"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                           </ul>
                        </div>
                        <div class="yl-footer-widget">
                           <div class="yl-footer-newslatter-widget pera-content">
                              <h3 class="widget-title">Opening Hours</h3>
                              <div class="office-open-hour">
                                 <p>Mon - Sat: 8 am - 5 pm<br>
                                    Sunday: 9 am - 1 pm
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="yl-footer-copyright text-center"><span>© 2020 Infocom - Education. All rights reserved.</span></div>
      </div>
   </footer>

 
   <section class="announcement fixed-ann">
      <div class="latest-news owl-carousel owl-theme">
         @if($items)
            @foreach($items as $key => $items	)
               <div class="item">
                  <div class="announcement-paras">
                     <p><a href="{{$items->link}}"><span>{{$items->news}}</span></a></p>
                  </div>
               </div>
            @endforeach
         @else
            <p>No Record found.</p>
         @endif
      </div>
   </section>


 <button class="btn scrollbuttons" style="display: none;"><img src="/guestassets/images/icons/03.png" class="img-fluid"></i></div></button>
 <!-- WhatsHelp.io widget -->
 <script type="text/javascript">
    (function() {
       var options = {
          whatsapp: "9048692345", // WhatsApp number
          call_to_action: "", // Call to action
          position: "right", // Position may be 'right' or 'left'
       };
       var proto = document.location.protocol,
          host = "getbutton.io",
          url = proto + "//static." + host;
       var s = document.createElement('script');
       s.type = 'text/javascript';
       s.async = true;
       s.src = url + '/widget-send-button/js/init.js';
       s.onload = function() {
          WhWidgetSendButton.init(host, proto, options);
       };
       var x = document.getElementsByTagName('script')[0];
       x.parentNode.insertBefore(s, x);
    })();
 </script>
 <!-- End of Footer section
============================================= -->