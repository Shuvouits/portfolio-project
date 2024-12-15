<!-- Contact Section -->
<section data-scroll-index="4" class="section contactus-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Contact</span></h6>
                <h3>Get in touch</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contact-form" method="POST">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input name="Subject" id="subject" placeholder="Subject *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Your message *" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="link-effect" type="button" value="Send" onclick="send_mail()"> send message <i class="bi bi-arrow-up-right"></i></button>
                                    <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                    <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row gy-4 text-center justify-content-center contact-info">
            <div class="col-md-4">
                <div class="contact-name">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>Visit My Studio</h5>
                    <p>Warnwe Park Streetperrine, <br>FL 33157 New York City</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-name">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5>Mail</h5>
                    <p>info@domainname.com<br>Mon to Fri (10 am – 8 pm)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-name">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>Phone</h5>
                    <p>Phone: +01 123 654 8096<br>Fax: +04 123 654 8096</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
