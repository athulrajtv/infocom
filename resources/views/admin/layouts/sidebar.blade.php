<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="/assets/images/infocom.webp" class="logo-icon" alt="logo icon">
        </div>
        
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="{{ route('admin.dashboard') }}">
            <div class="parent-icon">
              <ion-icon name="home-outline"></ion-icon>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>

        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <i class="fadeIn animated bx bx-map-alt"></i>
            </div>
            <div class="menu-title">Course</div>
          </a>
          <ul>
            <li><a href="{{ route('admin.course.coursepage') }}">
                <ion-icon name="ellipse-outline"></ion-icon>Categories
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <i class="fadeIn animated bx bx-layer"></i>
            </div>
            <div class="menu-title">Main course</div>
          </a>
          <ul>
            <li><a href="{{route('admin.course')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Courses
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="{{ route('admin.Certification') }}">
            <div class="parent-icon">
              <i class="fadeIn animated bx bx-certification"></i>
            </div>
            <div class="menu-title">Certification</div>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.Gallery') }}">
            <div class="parent-icon">
              <i class="fadeIn animated bx bx-images"></i>
            </div>
            <div class="menu-title">Gallery</div>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.Contact') }}">
            <div class="parent-icon">
              <i class="fadeIn animated bx bx-current-location"></i>
            </div>
            <div class="menu-title">Contact</div>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.Announcement') }}">
            <div class="parent-icon">
              <i class="lni lni-bullhorn"></i>
            </div>
            <div class="menu-title">Announcement</div>
          </a>
        </li>

      </ul>
      <!--end navigation-->   
    </aside>
<!--end sidebar --> 