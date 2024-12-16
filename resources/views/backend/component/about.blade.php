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
                                                <form>
                                                    <div class="main-container">
                                                        <label for="editor" class="form-label">Biography</label>
                                                        <textarea id="editor" name="content" class="form-control"></textarea>
                                                    </div>

                                                    <button class="btn btn-primary w-100">Submit</button>

                                                </form>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <button type="button" id="add-row"
                                                            class="btn btn-success">Add More</button>

                                                <form id="dynamic-form">
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="degree-0" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Name of Degree</span>


                                                            </label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter your degree name" id="degree-0"
                                                                name="degrees[]">

                                                            <label for="institution-0" class="form-label">Name of
                                                                Institution</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter your institution name" id="institution-0"
                                                                name="institutions[]">

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

                                    <div class="tab-pane fade" id="v-pills-experience" role="tabpanel"
                                        aria-labelledby="v-pills-experience-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <button type="button" id="add-row-company"
                                                                    class="btn btn-success">Add More</button>

                                                <form id="dynamic-form-company">
                                                    <div id="form-rows-company">
                                                        <div class="form-row mb-3">


                                                            <label for="company-0" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Company Name</span>


                                                            </label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter your company name" id="company-0"
                                                                name="company[]">

                                                            <label for="address-0" class="form-label">Company
                                                                Address</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter your address info" id="address-0"
                                                                name="address[]">

                                                            <label for="date-0" class="form-label">Date</label>
                                                            <input type="date" class="form-control mb-2"
                                                                id="date-0" name="date[]">

                                                            <button type="button"
                                                                class="btn btn-danger remove-row-company">Remove</button>
                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Submit</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="v-pills-technology" role="tabpanel"
                                        aria-labelledby="v-pills-technology-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">

                                                <button type="button" id="add-row-technology"
                                                                    class="btn btn-success">Add More</button>

                                                <form id="dynamic-form-technology">
                                                    <div id="form-rows-technology">
                                                        <div class="form-row mb-3">


                                                            <label for="technology-0" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Prefered Technology</span>


                                                            </label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Enter technology name" id="technology-0"
                                                                name="technology[]">



                                                            <button type="button"
                                                                class="btn btn-danger remove-row-technology">Remove</button>
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
    <script src="{{ asset('backend/assets/custom/about/about.js') }}"></script>
@endpush
