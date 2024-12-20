<!-- Services Section -->
<section data-scroll-index="2" class="section services-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Serverices</span></h6>
                <h3>Services provide for you</h3>
                <p>{{$service->intro}}</p>
            </div>
        </div>
        <div class="row gy-4">

            @foreach($service_info as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon">
                        <img src="{{asset($item->icon)}}" width="35" height="35" />
                    </div>
                    <div class="feature-content col">
                        <h5>{{$item->service_name}}</h5>
                        <p>{!! $item->service_description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Services Section -->
