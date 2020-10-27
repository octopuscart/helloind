<?php
$this->load->view('layout/header');
?>
<style>
    .bookingpage label {
        text-align: left;
        width: 100%;
    }

</style>


<main ng-controller="cakeController" style="background: url(<?php echo base_url(); ?>assets/theme2/images/onview-bg.jpg);background-size: cover;">
    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="    padding: 30px 0 30px;">

        <div class="container">
            <h3>Cake Booking</h3>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid no-padding welcome-section2" style="background: #8c3136;">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">			
                <div class="col-md-6 col-sm-6 img-block" style="    height: 550px;background: #8c3136;
                     border: 10px solid #fff;
                     border-radius: 40px;">
                    <img src="<?php echo base_url(); ?>assets/cake/{{cakeinit.selct_flavour}}" style="margin-top: 130px;"/>
                </div>
                <div class="col-md-6 col-sm-6 " >
                    <div class="tab-container mt-4 booknowblock" style="    border-radius: 40px;">
                        <div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <center style="width:100%;height: 500px;">
                                    <div class="row clearfix" style="    width: fit-content;">

                                        <div class="p-5 reservation-form1 rounded bg-white" style="width: 500px;">



                                            <div class="form-widget mt-4 mt-lg-0 bookingpage" data-loader="button">
                                                <div class="form-result">

                                                </div>
                                                <form class="mb-0 row"  action="#" method="post" >

                                                    <div class="col-sm-6 mb-3">
                                                        <label >Cake Flavours</label >
                                                        <select id="template-contactform-time" class="custom-select form-control border-form-control" name="cake_flavour" required="" ng-model="cakeinit.flavour" ng-change="changeFlavour()">
                                                            <option value="Mixed Fruit">Mixed Fruit</option>
                                                            <option value="Velvet">Velvet</option>
                                                            <option value="Black Forest">Black Forest</option>
                                                            <option value="Mango">Mango</option>
                                                        </select>    
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label >Cake Shape</label >
                                                        <select id="template-contactform-time" class="custom-select form-control border-form-control" name="cake_shape" required="">
                                                            <option value="Round">Round</option>
                                                            <option value="Square">Square</option>
                                                            <option value="Heart">Heart</option>
                                                        </select>                                                      
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label >Color: </label> 
                                                        <div class="form-control" style="text-align: left">Single Color</div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label >Cake Price</label >
                                                        <select id="template-contactform-time" class="custom-select form-control border-form-control" name="cake_price" required="">
                                                            <option value="1 Lb HK$250">1 Lb HK$250</option>
                                                            <option value="2 Lb HK$250">1 Lb HK$490</option>
                                                        </select>                                                      
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label >Message On Cake</label>
                                                        <input type="text" id="template-contactform-email" name="message" value="" class="required email form-control border-form-control" placeholder="Message on cake" required="">
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <label >Name</label >
                                                        <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label >Email</label >
                                                        <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label >Contact No.</label >
                                                        <input type="text" id="template-contactform-phone" name="contact" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 input-daterange travel-date-group">
                                                        <label >Pickup Date</label >
                                                        <input type="date" id="template-contactform-subject" name="select_date" class="form-control border-form-control tleft required" placeholder="Select Reservation Date" required="" min="<?php echo date("Y-m-d") ?>" value="<?php echo date("Y-m-d") ?>">
                                                    </div>
                                                    <div class="clear"></div>
                                                    <h2 style="font-size: 15px;background: red;color:white;padding: 5px;">
                                                        Order 1 Day Before 11:00 AM & Pickup Next Day After 2:00 PM
                                                    </h2>
                                                    <div class="clear"></div>
                                                    <div class="col-12 nobottommargin">
                                                        <button class="button btn btn-lg btn btn-danger button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" name="booknow" value="submit">Book Now</button>
                                                    </div>
                                                    <div class="clear"></div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row /- -->
    </div><!-- Container /- -->
</div><!-- Welcome Section /- -->
<!-- Client Section -->
</main>
<!-- Container -->
<div class="container" style="margin-top: 50px">
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
</div>

<?php
$this->load->view('layout/footer');
?>