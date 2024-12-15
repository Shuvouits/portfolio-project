@extends('backend.master')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Introducing Yourself</h4>

            </div><!-- end card header -->

            <div class="card-body">

                <div class="live-preview">
                    <form action="javascript:void(0);">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter your title"
                                        id="firstNameinput">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="lastNameinput" class="form-label">Photo</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="main-container">
                                <label for="editor" class="form-label">Short Description</label>
                                <textarea id="editor" name="content" class="form-control"></textarea>
                            </div>




                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phonenumberInput" class="form-label">Years of experience</label>
                                    <input type="number" class="form-control" placeholder="Enter your experience"
                                        id="phonenumberInput">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="emailidInput" class="form-label">Completed project</label>
                                    <input type="number" class="form-control" placeholder="Your complete project"
                                        id="emailidInput">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="lastNameinput" class="form-label">Upload resume</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">

                                <button type="submit" class="btn btn-primary w-100" style="margin-top: 25px" >Submit</button>

                            </div>




                        </div>
                        <!--end row-->
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
