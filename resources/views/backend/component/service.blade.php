@extends('backend.master')

@section('main-content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xxl-12">
                <h5 class="mb-3">Vertical Nav Tabs</h5>
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true" tabindex="0">Service Intro</a>
                                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false" tabindex="-1">Services</a>




                                </div>
                            </div>


                            <!-- end col -->
                            <div class="col-md-9" style="margin-left: 20px">
                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">


                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">
                                                <form method="post" action="{{route('service.store')}}">
                                                    @csrf
                                                    <div class="main-container">
                                                        <label for="editor" class="form-label">Describe your service intro</label>
                                                        <textarea id="editor" name="intro" class="form-control"></textarea>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary w-100">Update</button>

                                                </form>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <button type="button" id="add-row"
                                                            class="btn btn-success">
                                                            Add More
                                                </button>

                                                <form id="dynamic-form">
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="icon-0" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Icon</span>


                                                            </label>
                                                            <input type="file" class="form-control mb-2"
                                                                id="icon-0"
                                                                name="icon[]">

                                                            <label for="service-name-0" class="form-label">Service Name</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Example: Web Development" id="service-name-0"
                                                                name="service-name[]">

                                                                <label for="service-description-0" class="form-label">Service Description</label>
                                                                <textarea class="form-control mb-2"
                                                                    id="service-description-0"
                                                                    name="service-description[]"></textarea>



                                                            <button type="button"
                                                                class="btn btn-danger remove-row">Remove</button>
                                                        </div>
                                                    </div>

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
    <script src="{{ asset('backend/assets/custom/service/service.js') }}"></script>
@endpush
