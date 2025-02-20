@extends('admin.layouts.master')
@section('body')

<!-- start page content-->
<div class="page-content">

  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Admin</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0 align-items-center">
          <li class="breadcrumb-item"><a href="javascript:;">
            <ion-icon name="home-outline"></ion-icon></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-header px-4 py-3">
          <h5 class="mb-0">Register Form</h5>
        </div>
        <div class="card-body p-4">
          
          <form id="jQueryValidationForm" method="post3" action="">
            <div class="row mb-3">
              <label for="input35" class="col-sm-3 col-form-label">Enter Your Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input35" name="yourname" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input36" class="col-sm-3 col-form-label">Phone No</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input36" name="phone" placeholder="Phone No">
              </div>
            </div>
          
            <div class="row mb-3">
              <label for="input37" class="col-sm-3 col-form-label">Email Address</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="input37" name="email" placeholder="Email Address">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input38" class="col-sm-3 col-form-label">Choose Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="input38" name="password" placeholder="Choose Password">
              </div>
            </div>
            <div class="row mb-3">
              <label for="input38" class="col-sm-3 col-form-label">Confirm Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="input38" name="confirm_password" placeholder="Confirm Password">
              </div>
            </div>
            
            <div class="row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <div class="d-md-flex d-grid align-items-center gap-3">
                  <button type="submit" class="btn btn-primary btn-blue px-4" name="submit2">Submit</button>
                  
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>

@endsection
