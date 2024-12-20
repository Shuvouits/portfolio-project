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

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Available Message</h5>

                </div>

                <div class="card-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($all_contact as $index=> $item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->message}}</td>
                                <td>
                                    <!-- Delete Button -->
                                    <form action="{{ route('contact.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>


        </div>


    </div><!--end row-->

</div>

@endsection
