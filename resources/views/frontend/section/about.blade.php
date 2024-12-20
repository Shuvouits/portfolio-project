 <!-- About Section -->
 <section data-scroll-index="1" class="section about-section border-top-g">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-5 col-xl-4 mx-auto sticky-md-top">
                <div class="about-img-box">
                    <div class="about-img">
                        <img src="{{asset($intro_section->photo)}}" title="" alt="">
                    </div>
                    <div class="nav social-icons justify-content-center">
                        <a class="facebook" target="_blank" href="{{get_general_setting()->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="twitter" target="_blank" href="{{get_general_setting()->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a class="instagram" target="_blank" href="{{get_general_setting()->instagram}}"><i class="fab fa-instagram"></i></a>
                        <a class="linkedin" target="_blank" href="{{get_general_setting()->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="pinterest" target="_blank" href="{{get_general_setting()->pinterest}}"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 pt-5 pt-lg-0">
                <div class="about-text">
                    <div class="about-row">
                        <h3>Professional Summery</h3>
                        <p>{!! $bio->description !!}</p>
                    </div>
                    <div class="about-row">
                        <h3>Education</h3>
                        <div class="row g-4">

                            @foreach($educations as $education)

                            <div class="col-6">
                                <h5>{{$education->degree}}</h5>
                                <p>{{$education->institution}}</p>
                                <small>{{ \Carbon\Carbon::parse($education->date)->format('Y') }}</small>
                            </div>
                            @endforeach



                        </div>
                    </div>
                    <div class="about-row">
                        <h3>Experience</h3>
                        <div class="row g-4">

                            @foreach($experiences as $experience)
                            <div class="col-6">
                                <h5>{{$experience->company_name}}</h5>
                                <p>{{$experience->address}}</p>
                                <small>{{$experience->start_date}} — {{$experience->end_date}}</small>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="about-row">
                        <div class="row g-4">
                            <div class="col-6">
                                <h3>Technology</h3>
                                <ul>

                                    @foreach($technology as $item)
                                    <li>{{$item->technology}}</li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="col-6">
                                <h3>Tools</h3>
                                <ul>
                                    <li>Vs Code</li>
                                    <li>Sublime Text</li>
                                    <li>Git</li>
                                    <li>Asana</li>
                                    <li>Zira</li>
                                    <li>Trello</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->
