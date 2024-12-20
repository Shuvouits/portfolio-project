<!-- Contact Section -->
<section data-scroll-index="4" class="section contactus-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Contact</span></h6>
                <h3>Get in touch</h3>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contact-form" method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" id="name" placeholder="Name *" class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" id="email" placeholder="Email *" class="form-control" type="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input name="subject" id="subject" placeholder="Subject *" class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Your message *" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="link-effect" type="submit" value="Send"> send message <i class="bi bi-arrow-up-right"></i></button>
                                    <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                    <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row gy-4 text-center justify-content-center contact-info" >

            <a class="col-md-4" href="https://www.google.com/maps?q={{ urlencode(get_general_setting()->address) }}" target="_blank" style="color: white">

                <div class="">
                    <div class="contact-name">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Address</h5>
                        <p>{{ get_general_setting()->address }}</p>

                    </div>
                </div>

            </a>


            <a class="col-md-4" href="mailto:{{ get_general_setting()->email }}" style="color: white">

                <div class="">
                    <div class="contact-name">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Mail</h5>

                            <p>{{ get_general_setting()->email }}</p>

                    </div>
                </div>

            </a>



            <a class="col-md-4" href="tel:{{ get_general_setting()->phone }}" style="color: white">

                <div class="">
                    <div class="contact-name">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5>Phone</h5>

                            <p>{{ get_general_setting()->phone }}</p>

                    </div>
                </div>

            </a>







        </div>
    </div>
</section>
<!-- End Contact Section -->
