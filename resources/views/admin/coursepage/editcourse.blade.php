@extends('admin.layouts.master')
@section('body')

<!-- start page content-->
<div class="page-content">

  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Student</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0 align-items-center">
          <li class="breadcrumb-item"><a href="javascript:;">
              <ion-icon name="home-outline"></ion-icon>
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Course</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8 mx-auto">

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
        
      <div class="card">
        
        <div class="card-header px-4 py-3">
          <h5 class="mb-0">Featured Course Form</h5>
        </div>
        <div class="card-body p-4">
          <form id="jQueryValidationForm" method="post" action="{{ route('admin.course.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="input35" class="col-sm-3 col-form-label">Order Number</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="input35" name="number" placeholder="Order Number"  value="{{ $data->number }}">
                @error('number')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="input35" class="col-sm-3 col-form-label">Enter The Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input35" name="title" placeholder="Enter Title" value="{{ $data->title }}" >
                @error('title')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="input40" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="input40" name="description" rows="3" placeholder="Description">{{ $data->description }}</textarea>
                @error('description')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="input36" class="col-sm-3 col-form-label">Rate</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input36" name="rate" placeholder="Rate" value="{{ $data->rate }}">
                @error('rate')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="input37" class="col-sm-3 col-form-label">Discount</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input37" name="discount" placeholder="Discount" value="{{ $data->discount }}">
                @error('discount')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="input38" class="col-sm-3 col-form-label">Duration</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input38" name="duration" placeholder="Duration" value="{{ $data->duration }}">
                @error('duration')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="input40" class="col-sm-3 col-form-label">Eligibility</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="input39" name="eligibility" rows="3" placeholder="Eligibility">{{ $data->eligibility }}</textarea>
                @error('eligibility')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="input40" class="col-sm-3 col-form-label">Career Options</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="input40" name="career" rows="3" placeholder="Career Options">{{ $data->career }}</textarea>
                @error('career')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="input38" class="col-sm-3 col-form-label">Image</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="input41" name="image"><br><img style="margin-top: 10px;" src="/uploads/{{$data->image}}" width="100px" height="100px">
                @error('image')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="input38" class="col-sm-3 col-form-label">Status</label>
              <div class="col-md-9">
                <div class="d-flex align-items-center gap-3">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="bsValidation6" name="status" value="active" {{ old('status', $data->status ) == 'active' ? 'checked' : '' }}>
                    <label class="form-check-label" for="bsValidation6">Active</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="bsValidation7" name="status" value="inactive" {{ old('status', $data->status  ) == 'inactive' ? 'checked' : '' }}>
                    <label class="form-check-label" for="bsValidation7">Inactive</label>
                  </div>
                  @error('status')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <div class="d-md-flex d-grid align-items-center gap-3">
                  <button type="submit" class="btn btn-primary px-4" name="submit2">Update</button>

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