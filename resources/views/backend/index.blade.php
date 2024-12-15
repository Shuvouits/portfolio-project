@extends('backend.master')

@section('main-content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Blog</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a>
                        </li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-success border-success rounded-2 fs-17">
                                    <i data-feather="users" class="icon-dual-light"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">17.6k</h5>
                                <p class="mb-0 text-muted">Followers</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-warning border-warning rounded-2 fs-17">
                                    <i data-feather="file-text" class="icon-dual-light"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">149</h5>
                                <p class="mb-0 text-muted">Total Post</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-danger border-danger rounded-2 fs-17">
                                    <i data-feather="heart" class="icon-dual-light"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">24.8k</h5>
                                <p class="mb-0 text-muted">Likes</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-primary border-primary rounded-2 fs-17">
                                    <i data-feather="bar-chart" class="icon-dual-light"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">54.3k</h5>
                                <p class="mb-0 text-muted">Views</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
               
            </div><!--end row-->
        </div><!--end col-->


    </div><!--end row-->

</div>

@endsection
