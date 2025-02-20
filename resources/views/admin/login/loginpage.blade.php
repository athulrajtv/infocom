@extends('admin.login.layouts.master')
@section('content')
<div class="">
  <div class="row g-0 m-0">
    <div class="col-xl-6 col-lg-12">
      <div class="login-cover-wrapper">
        <div class="card shadow-none">
          <div class="card-body">
            <div class="text-center">
              <h4>Sign In</h4>
              <p>Sign In to your account</p>
            </div>
            <form class="form-body row g-3" method="post" action="{{ route('admin.login') }}">
              @csrf
              <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail">
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="col-12">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword">
                @error('password')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="col-12 col-lg-6">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRemember">
                  <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label>
                </div>
              </div>
              <!-- <div class="col-12 col-lg-6 text-end">
                <a href="authentication-reset-password-cover.html">Forgot Password?</a>
              </div> -->
              <div class="col-12 col-lg-12">
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
              <div class="col-12 col-lg-12">
                <div class="position-relative border-bottom my-3">
                  <div class="position-absolute seperator translate-middle-y">or continue with</div>
                </div>
              </div>
              <!-- <div class="col-12 col-lg-12">
                <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                  <a href="https://www.facebook.com/INFOCOMACADEMY/" class=""><img src="/assets/images/icons/facebook.png" alt=""></a>
                  <a href="https://www.instagram.com/infocom_official/v" class=""><img src="/assets/images/icons/apple-black-logo.png" alt=""></a>
                  <a href="javascript:;" class=""><img src="/assets/images/icons/google.png" alt=""></a>
                </div>
              </div> -->
             <!--  <div class="col-12 col-lg-12 text-center">
                <p class="mb-0">Don't have an account? <a href="{{route('admin.register')}}">Sign up</a></p>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-12">
      <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
      </div>
    </div>
  </div>
  <!--end row-->
</div>

@endsection