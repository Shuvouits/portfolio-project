@extends('backend.master')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Introducing Information</h4>

            </div><!-- end card header -->

            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="live-preview">

                    <form action="{{ route('intro.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$intro->title}}"
                                        placeholder="Example : I'm Ron a Creative Developer & UI Expert" id="title">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Photo</label>

                                    <input id="photoInput" type="file" name="photo" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset($intro->photo)}}" id="photoPreview" width="100" height="100" style="border-radius: 10px" />

                            </div>


                            <!--end col-->
                            <div class="main-container">
                                <label for="editor" class="form-label">Short Description</label>
                                <textarea id="editor" name="short_description" class="form-control">{{$intro->short_description}}</textarea>
                            </div>




                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="experience" class="form-label">Years of experience</label>
                                    <input type="number" class="form-control" name="experience" value="{{$intro->experience}}" placeholder="Example : 3"
                                        id="experience">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="complete_project" class="form-label">Completed project</label>
                                    <input type="number" class="form-control" name="complete_project" value="{{$intro->complete_project}}"
                                        placeholder="Example : 10" id="complete_project">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="resume" class="form-label" style="display: flex; align-items:center; justify-content: space-between">
                                        <span>  Upload resume (must be a pdf format) </span>

                                        @if($intro->resume)

                                        <a href="{{$intro->resume}}" class="btn btn-sm btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                              </svg>
                                        </a>
                                        @endif

                                    </label>
                                    <input type="file" name="resume" class="form-control">
                                </div>
                            </div>



                            <div class="col-md-6">

                                <button type="submit" class="btn btn-primary w-100"
                                    style="margin-top: 25px">Submit</button>

                            </div>




                        </div>
                        <!--end row-->
                    </form>


                </div>

            </div>
        </div>

    </div>
@endsection

@push('scripts')
<script src="{{asset('backend/assets/custom/intro/intro.js')}}"></script>
@endpush
