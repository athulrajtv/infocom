@extends('admin.layouts.master')
@section('body')

<!-- start page content-->
<div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;">
                <ion-icon name="home-outline"></ion-icon>
            </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
        </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
        <button type="button" class="btn btn-outline-primary">Settings</button>
        <button type="button"
            class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
            href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
        </div>
    </div>
    </div>
    <!--end breadcrumb-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
    <div class="col">
        <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-start gap-2">
            <div>
                <p class="mb-0 fs-6">Total Revenue</p>
            </div>
            <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                <ion-icon name="wallet-outline"></ion-icon>
            </div>
            </div>
            <div class="d-flex align-items-center mt-3">
            <div>
                <h4 class="mb-0">$92,854</h4>
            </div>
            <div class="ms-auto">+6.32%</div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-start gap-2">
            <div>
                <p class="mb-0 fs-6">Total Customer</p>
            </div>
            <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                <ion-icon name="people-outline"></ion-icon>
            </div>
            </div>
            <div class="d-flex align-items-center mt-3">
            <div>
                <h4 class="mb-0">48,789</h4>
            </div>
            <div class="ms-auto">+12.45%</div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-start gap-2">
            <div>
                <p class="mb-0 fs-6">Total Orders</p>
            </div>
            <div class="ms-auto widget-icon-small text-white bg-gradient-danger">
                <ion-icon name="bag-handle-outline"></ion-icon>
            </div>
            </div>
            <div class="d-flex align-items-center mt-3">
            <div>
                <h4 class="mb-0">88,234</h4>
            </div>
            <div class="ms-auto">+3.12%</div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-start gap-2">
            <div>
                <p class="mb-0 fs-6">Conversion Rate</p>
            </div>
            <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                <ion-icon name="bar-chart-outline"></ion-icon>
            </div>
            </div>
            <div class="d-flex align-items-center mt-3">
            <div>
                <h4 class="mb-0">48.76%</h4>
            </div>
            <div class="ms-auto">+8.52%</div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!--end row-->


</div>
<!-- end page content-->

<!--start switcher-->
<div class="switcher-body">
    <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
    <ion-icon name="color-palette-outline" class="me-0"></ion-icon>
    </button>
    <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
                <label class="form-check-label" for="SemiDark">Semi Dark</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end switcher-->

<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

@endsection