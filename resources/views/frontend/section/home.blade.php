 <!-- Home Section -->
 <section data-scroll-index="0" class="home-section">
    <div class="container">
        <div class="row min-vh-100 align-items-center gy-5">
            <div class="col-lg-7 pe-lg-5">
                <div class="home-intro">
                    <h6>INTRODUCTION</h6>
                    <h2 class="text-theme" style="font-size: 45px">{{$intro_section->title}} </h2>
                    <p>{!! $intro_section->short_description !!}</p>
                    <div class="hs-exp">
                        <div class="exp-box">
                            <h5>{{$intro_section->experience}}+</h5>
                            <span>YEARS<br /> OF EXPERIENCE</span>
                        </div>
                        <div class="exp-box">
                            <h5>{{$intro_section->complete_project}}+</h5>
                            <span>PROJECTS<br /> COMPLETED</span>
                        </div>
                    </div>
                    <div class="btn-bar">
                        <a class="link-effect" target="_blank" href="{{$intro_section->resume}}">Download Resume <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="home-image">
                    <img src="{{asset($intro_section->photo)}}" title="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Home Section -->
