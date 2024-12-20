<!-- Work Section -->
<section data-scroll-index="3" class="section work-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Portfolio</span></h6>
                <h3>My latest projects</h3>
                <p>{!! $portfolio_bio->intro !!}</p>

            </div>
        </div>
        <div class="owl-carousel lightbox-gallery" data-items="3" data-nav-dots="true" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-space="30" data-autoplay="true">

            @foreach($portfolios as $portfolio)
            <div class="work-box mb-4" onclick="window.open('{{ $portfolio->project_link }}', '_blank')" style="cursor: pointer">
                <div class="work-img">
                    <a class="gallery-link" href="#">
                        <img src="{{asset($portfolio->photo)}}" title="" alt="">
                    </a>
                </div>
                <div class="work-info">
                    <div class="meta">
                        <span class="text-theme">{{$portfolio->title}}</span>
                    </div>
                    <h5>{{ \Illuminate\Support\Str::limit($portfolio->headline, 65, '...') }}</h5>

                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($portfolio->description), 190, '...') }}</p>

                    <div class="btn-bar">
                        <a class="link-effect gallery-link" href="{{asset('frontend/assets/img/work-1.jpg')}}">View Project <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Work Section -->
