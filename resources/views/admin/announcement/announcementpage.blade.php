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
                    <h5 class="mb-0">Announcement</h5>
                </div>
                <div class="card-body p-4">
                    <form id="jQueryValidationForm" method="post" action="{{ route('admin.Announcement.create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input35" name="link" placeholder="Link" value="{{ old('link') }}">
                                @error('link')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Announcement</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input35" name="news" placeholder="Announcement" value="{{ old('news') }}">
                                @error('news')
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
                            <th>Link</th>
                            <th>Announcement</th>
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
                            <td>{{$data->link}}</td>
                            <td>{{$data->news}}</td>
                            <td>
                                <a href="{{ route('admin.Announcement.Edit', $data->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.Announcement.delete', $data->id) }}" class="btn btn-danger">Delete</a> 
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



<div class="overlay nav-toggle-icon"></div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="address"]'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="email"]'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="number"]'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection