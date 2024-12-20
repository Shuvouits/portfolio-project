 <!-- core Section -->
 <section class="section core-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Core Values</span></h6>
                <h3>Core values that drive my work</h3>
                <p>{!! $cors->intro !!}</p>
            </div>
        </div>
        <div class="row gy-4">

            @foreach($core_infos as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon">
                        <img src="{{asset($item->image)}}" width="50" height="50" />
                    </div>
                    <div class="feature-content col">
                        <h5>{{ $item->title }}</h5>
                        <p>{!! $item->core_description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End core Section -->
