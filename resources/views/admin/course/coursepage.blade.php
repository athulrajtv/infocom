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
                    <form id="jQueryValidationForm" method="post" action="{{ route('admin.category.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Order Number</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="input35" name="number" placeholder="Order Number" value="{{ old('number') }}">
                                @error('number')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input35" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Customer Details</h5>

            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>id</th>
                            <th>Order Number</th>
                            <th>Course Title</th>
                            <th>Courses</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1; ?>
                        @if('$data')
                        @foreach( $data as $key => $data )
                        <tr>
                            <td>{{$id}}</td>
                            <td>{{$data->number}}</td>
                            <td>{{$data->title}}</td>
                            <td>
                                <a href="{{ route('admin.addcourse.course', $data->id) }}" class="btn btn-secondary">Add Courses</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.category.Edit', $data->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.category.delete', $data->id) }}" class="btn btn-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php $id += 1; ?>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection