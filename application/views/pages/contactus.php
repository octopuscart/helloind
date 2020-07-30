<?php
$this->load->view('layout/header');
?>
<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner">
        <!-- Container -->
        <div class="container ">
            <h3 class="stylefont-Kaushan">contact</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <div class="section-padding"></div>

    <!-- Contact Section -->
    <div class="container-fluid no-padding contact-section">
        <!-- Container -->
        <div class="container">
            <div class="contact-info">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <i><img src="<?php echo base_url(); ?>assets/theme2/images/contact-info1.png" alt="Contact Info" /></i>
                    <h3>Our Location</h3>
                    <p>Hanyee Building, Shop A & E, 1/F, </p>
                    <p>19-21 Hankow Rd, Tsim Sha Tsui, Hong Kong </p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <i><img src="<?php echo base_url(); ?>assets/theme2/images/contact-info2.png" alt="Contact Info" /></i>
                    <h3>Contact Us</h3>
                    <p><a href="tel:+(852) 2367 7489">Contact No.: +(852) 2367 7489</a></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <i><img src="<?php echo base_url(); ?>assets/theme2/images/contact-info3.png" alt="Contact Info" /></i>
                    <h3>Write some words</h3>
                    <p><a href="mailto:hello@helloindia.com.hk">hello@helloindia.com.hk</a></p>
                    <p><a href="mailto:support@historymuseum.com">info@helloindia.com.hk</a></p>
                </div>
            </div>
            <div class="contact-form">
                <h3>Leave A Message</h3>
                <p>Write some words</p>
                <form method="post">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="first_name" id="input_fname" required="" placeholder="First Name *" class="form-control ">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="last_name" id="input_lname" required="" placeholder="Last Name *" class="form-control ">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email"  required="" placeholder="Your Email *" class="form-control ">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="contact"  required="" placeholder="Contact No." class="form-control ">
                                </div>
                            </div>
                            <br/>
                            <input type="text" name="subject" id="input_subject" required="" placeholder="Subject" class="form-control">
                          
                            <textarea name="message" id="textarea_message" placeholder="Your message" rows="4" class="form-control"></textarea>
                            <button name="sendmessage" type="submit" title="Send Your Message">Send Your Message</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>

    <div class="padding-100"></div>

    <!-- Map -->
    <div class="container-fluid no-padding map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14766.012778915428!2d114.17095!3d22.2968015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe16b7423610eb180!2sHello%20India%20Restaurant%20%26%20Bar!5e0!3m2!1sen!2sin!4v1593671372772!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>			</div><!-- Map /- -->

</main>
<?php
$this->load->view('layout/footer');
?>