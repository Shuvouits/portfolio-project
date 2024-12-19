@extends('backend.master')

@section('main-content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xxl-12">
                <h5 class="mb-3">General Settings</h5>
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true" tabindex="0">Address</a>

                                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false" tabindex="-1">Mail</a>

                                    <a class="nav-link mb-2" id="v-pills-phone-tab" data-bs-toggle="pill"
                                        href="#v-pills-phone" role="tab" aria-controls="v-pills-phone"
                                        aria-selected="false" tabindex="-1">Phone</a>

                                    <a class="nav-link mb-2" id="v-pills-social-tab" data-bs-toggle="pill"
                                        href="#v-pills-social" role="tab" aria-controls="v-pills-social"
                                        aria-selected="false" tabindex="-1">Social Link</a>

                                    <a class="nav-link mb-2" id="v-pills-profile-copyright" data-bs-toggle="pill"
                                        href="#v-pills-copyright" role="tab" aria-controls="v-pills-copyright"
                                        aria-selected="false" tabindex="-1">Copyright</a>

                                    <a class="nav-link mb-2" id="v-pills-meta-tab" data-bs-toggle="pill"
                                        href="#v-pills-meta" role="tab" aria-controls="v-pills-meta"
                                        aria-selected="false" tabindex="-1">Meta Info</a>




                                </div>
                            </div>


                            <!-- end col -->
                            <div class="col-md-9" style="margin-left: 20px">
                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">


                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">
                                                <form method="post" action="{{route('other-info.store')}}">
                                                    @csrf
                                                    <div class="main-container">
                                                        <label for="editor" class="form-label">Address Details</label>
                                                        <textarea id="editor" name="address" class="form-control"></textarea>
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


                                                <form id="dynamic-form" method="post" action="{{route('other-info.store')}}">
                                                    @csrf
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control mb-2"
                                                                placeholder="Example: jhon@example.com" id="email"
                                                                name="email">





                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Update</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>



                                    <div class="tab-pane fade" id="v-pills-phone" role="tabpanel"
                                        aria-labelledby="v-pills-phone-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">


                                                <form id="dynamic-form" method="post" action="{{route('other-info.store')}}">
                                                    @csrf
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="phone" class="form-label">Phone</label>
                                                            <input type="number" class="form-control mb-2"
                                                                placeholder="Example: +8801751720590" id="phone"
                                                                name="phone">

                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Update</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="v-pills-social" role="tabpanel"
                                        aria-labelledby="v-pills-social-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">


                                                <form id="dynamic-form" method="post" action="{{route('other-info.store')}}">
                                                    @csrf
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="facebook" class="form-label">Facebook</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="https://www.facebook.com/" id="facebook"
                                                                name="facebook">

                                                            <label for="twitter" class="form-label">Twitter</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="https://www.twitter.com/" id="twitter"
                                                                name="twitter">

                                                            <label for="instagram" class="form-label">Instagram</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="https://www.instagram.com/" id="instagram"
                                                                name="instagram">

                                                            <label for="linkedin" class="form-label">Linkedin</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="https://www.linkedin.com/" id="linkedin"
                                                                name="linkedin">

                                                            <label for="pinterest" class="form-label">Pinterest</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="https://www.pinterest.com/" id="pinterest"
                                                                name="pinterest">

                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">update</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="v-pills-copyright" role="tabpanel"
                                        aria-labelledby="v-pills-copyright-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">


                                                <form id="dynamic-form" method="post" action="{{route('other-info.store')}}">
                                                    @csrf
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="copyright" class="form-label">Copyright</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Example : © 2021 copyright all right reserved"
                                                                id="copyright" name="copyright">



                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Update</button>
                                                </form>


                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="v-pills-meta" role="tabpanel"
                                        aria-labelledby="v-pills-meta-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">


                                                <form id="dynamic-form" method="post" action="{{route('other-info.store')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div id="form-rows">
                                                        <div class="form-row mb-3">



                                                            <label for="meta-title" class="form-label">Meta Title</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Example : © 2021 copyright all right reserved"
                                                                id="copyright" name="meta_title">


                                                            <label for="meta-description" class="form-label">Meta
                                                                Description</label>
                                                            <textarea type="text" class="form-control mb-2" placeholder="Enter description" id="meta-description"
                                                                name="meta_description"></textarea>

                                                            <label for="logo" class="form-label">Logo</label>
                                                            <input type="file" class="form-control mb-2"
                                                                 id="logo"
                                                                name="logo">

                                                                <img id="preview-logo" src="#" alt="Logo Preview" style="display:none; margin-top: 10px; width: 60px; height: 60px">



                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary w-100 mt-3">Update</button>
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
    <script src="{{ asset('backend/assets/custom/other/other.js') }}"></script>
@endpush
