@extends('backend.master')

@section('main-content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xxl-12">
                <h5 class="mb-3">Vertical Nav Tabs</h5>
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-1">
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true" tabindex="0">BioGraphy</a>
                                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false" tabindex="-1">Education</a>

                                    <a class="nav-link mb-2" id="v-pills-experience-tab" data-bs-toggle="pill"
                                        href="#v-pills-experience" role="tab" aria-controls="v-pills-experience"
                                        aria-selected="false" tabindex="-1">Experience</a>

                                    <a class="nav-link mb-2" id="v-pills-technology-tab" data-bs-toggle="pill"
                                        href="#v-pills-technology" role="tab" aria-controls="v-pills-technology"
                                        aria-selected="false" tabindex="-1">Technology</a>


                                </div>
                            </div>


                            <!-- end col -->
                            <div class="col-md-9" style="margin-left: 20px">
                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">


                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">
                                                <form method="post" action="{{ route('bioupdate') }}">
                                                    @csrf
                                                    <div class="main-container">
                                                        <label for="editor" class="form-label">Biography</label>
                                                        <textarea id="editor" name="description" class="form-control"></textarea>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary w-100">Submit</button>

                                                </form>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <div class="d-flex justify-content-end">
                                                    <button type="button" id="add-row" class="btn btn-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                            height="25" fill="currentColor" class="bi bi-plus-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                            <path
                                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                        </svg>
                                                    </button>
                                                </div>


                                                <form id="dynamic-form" method="post" action="{{ route('eduupdate') }}">
                                                    @csrf
                                                    <div id="form-rows">

                                                        @foreach ($educations as $education)
                                                            <div class="form-row mb-3">


                                                                <label for="degree-0" class="form-label"
                                                                    style="display: flex; align-items:center; justify-content:space-between">
                                                                    <span>Name of Degree</span>


                                                                </label>
                                                                <input type="text" class="form-control mb-2"
                                                                    placeholder="Enter your degree name" id="degree-0"
                                                                    name="degrees[]" value="{{ $education->degree }}" required>

                                                                <label for="institution-0" class="form-label">Name of
                                                                    Institution</label>
                                                                <input type="text" class="form-control mb-2"
                                                                    placeholder="Enter your institution name"
                                                                    id="institution-0" name="institutions[]"
                                                                    value="{{ $education->institution }}">

                                                                <div class="row"
                                                                    style="display: flex; align-items:center; justify-content: space-between">
                                                                    <div class="col-md-11">

                                                                        <label for="date-0"
                                                                            class="form-label">Date</label>
                                                                        <input type="date" class="form-control mb-2"
                                                                            id="date-0" name="date[]"
                                                                            value="{{ $education->date }}">

                                                                    </div>
                                                                    <div class="col-md-1 d-flex justify-content-end">

                                                                        <button type="button"
                                                                            class="btn btn-danger remove-row ">

                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="25" height="25"
                                                                                fill="currentColor"
                                                                                class="bi bi-trash3-fill"
                                                                                viewBox="0 0 16 16">
                                                                                <path
                                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                                            </svg>

                                                                        </button>

                                                                    </div>

                                                                </div>




                                                            </div>
                                                        @endforeach



                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Submit</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="v-pills-experience" role="tabpanel"
                                        aria-labelledby="v-pills-experience-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <div class="d-flex justify-content-end">
                                                    <button type="button" id="add-row-company" class="btn btn-success">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                            height="25" fill="currentColor" class="bi bi-plus-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                            <path
                                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                        </svg>


                                                    </button>

                                                </div>



                                                <form id="dynamic-form-company" method="post"
                                                    action="{{ route('expupdate') }}">
                                                    @csrf

                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif


                                                    @foreach($experiences as $experience)
                                                    <div id="form-rows-company">
                                                        <div class="form-row mb-3">


                                                            <label for="company-0" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Company Name</span>


                                                            </label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter your company name" id="company-0"
                                                                name="company_name[]" value="{{$experience->company_name}}" required>

                                                            <label for="address-0" class="form-label">Company
                                                                Address</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter your address info" id="address-0"
                                                                name="address[]" value="{{$experience->address}}">

                                                            <label for="start-date-0" class="form-label">Start
                                                                Date</label>
                                                            <input type="date" class="form-control mb-2"
                                                                id="start-date-0" name="start_date[]" value="{{$experience->start_date}}">


                                                            <div class="row"
                                                                style="display: flex; align-items:center; justify-content: space-between">
                                                                <div class="col-md-11">

                                                                    <label for="end-date-0" class="form-label">End
                                                                        Date</label>
                                                                    <input type="date" class="form-control mb-2"
                                                                        id="end-date-0" name="end_date[]" value="{{$experience->end_date}}">



                                                                </div>
                                                                <div class="col-md-1 d-flex justify-content-end">

                                                                    <button type="button"
                                                                        class="btn btn-danger remove-row-company ">

                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="25"
                                                                            fill="currentColor" class="bi bi-trash3-fill"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                                        </svg>

                                                                    </button>

                                                                </div>

                                                            </div>






                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Update</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="v-pills-technology" role="tabpanel"
                                        aria-labelledby="v-pills-technology-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <div class="d-flex justify-content-end">

                                                    <button type="button" id="add-row-technology"
                                                        class="btn btn-success">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-plus-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                            <path
                                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                        </svg>

                                                    </button>

                                                </div>



                                                <form id="dynamic-form-technology" method="post" action="{{route('techupdate')}}">
                                                    @csrf

                                                    @foreach($technology as $tech)
                                                    <div id="form-rows-technology">
                                                        <div class="form-row mb-3">


                                                            <label for="technology-0" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Prefered Technology</span>


                                                            </label>

                                                            <div class="row">

                                                                <div class="col-md-11">

                                                                    <input type="text" class="form-control mb-2"
                                                                        placeholder="Enter technology name"
                                                                        id="technology-0" name="technology[]" value="{{$tech->technology}}" required>


                                                                </div>

                                                                <div class="col-md-1  d-flex justify-content-end ">

                                                                    <button type="button"
                                                                        class="btn btn-danger remove-row-technology">

                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-trash3-fill"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                                        </svg>

                                                                    </button>
                                                                </div>

                                                            </div>





                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Submit</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>






                                </div>
                            </div>
                            <!-- end col -->
                        </div>

                        <!--end row-->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>

        </div>


    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/custom/about/about.js') }}"></script>
@endpush
