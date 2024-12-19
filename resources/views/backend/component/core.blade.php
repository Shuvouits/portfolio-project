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
                                        aria-selected="true" tabindex="0">Core Intro</a>
                                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false" tabindex="-1">Cores</a>




                                </div>
                            </div>


                            <!-- end col -->
                            <div class="col-md-9" style="margin-left: 20px">
                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">


                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="d-flex mb-2">

                                            <div class="flex-grow-1 ms-3">
                                                <form method="post" action="{{ route('core.store') }}">
                                                    @csrf
                                                    <div class="main-container">
                                                        <label for="editor" class="form-label">Core Intro</label>
                                                        <textarea id="editor" name="intro" class="form-control">{{ $core->intro }}</textarea>
                                                    </div>

                                                    <button class="btn btn-primary w-100">Update</button>

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



                                                <form id="dynamic-form" method="post"
                                                    action="{{ route('core-info.store') }}" enctype="multipart/form-data">
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


                                                    <div id="form-rows">

                                                        @foreach ($coreInfo as $index => $item)
                                                        <div class="form-row mb-3">

                                                            <input type="hidden" name="id[]" id="core-{{$index}}" value="{{$item->id}}" />



                                                            <label for="image-{{$index}}" class="form-label"
                                                                style="display: flex; align-items:center; justify-content:space-between">
                                                                <span>Image</span>


                                                            </label>
                                                            <input type="file" class="form-control mb-2 photoInput" id="image-{{$index}}"
                                                                name="image[]" data-index="0">

                                                                <div>

                                                                    <img src="{{ asset($item->image) }}"
                                                                        class="photoPreview"
                                                                        id="preview-{{ $index }}" width="50"
                                                                        height="50"
                                                                        style=" margin-top: 10px; margin-bottom: 10px" />

                                                                </div>


                                                            <label for="title-0" class="form-label">Title</label>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Example: Hard Work" id="title-0"
                                                                name="title[]" value="{{$item->title}}">




                                                            <label for="core-description-0" class="form-label">Core
                                                                Description</label>
                                                            <textarea class="form-control mb-2" id="core-description-0" name="core_description[]">{{$item->core_description}}</textarea>



                                                            <button type="button"
                                                                class="btn btn-danger remove-row">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                                  </svg>
                                                            </button>
                                                        </div>
                                                        @endforeach
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
    <script src="{{ asset('backend/assets/custom/core/core.js') }}"></script>
@endpush
