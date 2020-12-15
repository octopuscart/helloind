<?php
$this->load->view('layout/header');
?>

<style>
    .datepicker-days .day{
        cursor: pointer;
    }
</style>

<main style="background: url(<?php echo base_url(); ?>assets/theme2/images/onview-bg.jpg);background-size: cover;" ng-controller="bookController">
    <!-- Page Banner -->
    <!--    <div class="container-fluid no-padding page-banner" style="    padding: 30px 0 30px;">
             Container 
            <div class="container">
                <h3>Book Now</h3>
            </div> Container /- 
        </div> Page Banner /- -->

    <!-- Welcome Section -->
    <input type="hidden" ng-model="bookinit.predate" ng-init="bookinit.predate = '<?php echo date("Y-m-d") ?>'">
    <div class="container-fluid no-padding welcome-section2">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">			
                <div class="col-md-6 col-sm-6 img-block">
                </div>
                <div class="col-md-6 col-sm-6 content-block">




                    <div class="tab-container mt-4 booknowblock" >

                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#helloindia" aria-controls="helloindia" role="tab" data-toggle="tab">
                                        <img src="<?php echo base_url(); ?>assets/images/logo.png" style="height:50px;"/>
                                    </a></li>
                                <li role="presentation"><a href="#quandoo" aria-controls="quandoo" role="tab" data-toggle="tab">
                                        <img src="<?php echo base_url(); ?>assets/images/quandoo.png" style="    height: 34px;    margin-top: 13px;" /></a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="helloindia">
                                    <div class="tab-content clearfix" id="tabs-restaurant">
                                        <center style="width:100%;">
                                            <div class="row clearfix" style="    width: fit-content;">

                                                <div class="p-5 reservation-form1 rounded bg-white" style="width: 500px;">

                                                    <div class="section-header2">
                                                        <span>Book At Restaurants</span>
                                                        <h2></h2>
                                                    </div>

                                                    <div class="form-widget mt-4 mt-lg-0 bookingpage" data-loader="button">
                                                        <div class="form-result"></div>
                                                        <form class="mb-0 row"  action="#" method="post" >
                                                            <div class="form-process"></div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class='text-left pull-left'>Name</label>
                                                                <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class='text-left pull-left'>Email</label>

                                                                <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class='text-left pull-left'>Contact No.</label>

                                                                <input type="text" id="template-contactform-phone" name="contact" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                                            </div>
                                                            <div class="col-sm-6 mb-3  travel-date-group">
                                                                <!--<input type="date" id="template-contactform-subject" name="select_date" value="" class="form-control border-form-control tleft required" placeholder="Select Reservation Date" required="" min="<?php echo date("Y-m-d") ?>" ng-model="bookinit.selectdate" ng-change="changeDate()">-->
                                                                <label class='text-left pull-left'>Select Date</label>
                                                                <div class="">
                                                                    <input type="text" name="select_date" class="form-control datepicker" id="selecteddate" value="<?php echo date("Y-m-d") ?>"/>
                                                                </div>

                                                            </div>
                                                            <div class="clear"></div>

                                                            <div class="col-sm-6 mb-3">
                                                                <label class='text-left pull-left'>Select Time</label>
                                                                <select id="template-contactform-time" class="custom-select form-control border-form-control" name="select_time" required="" ng-if="bookinit.selectdate == '2020-11-14'">
                                                                    <option value="disabled" disabled="" selected="">Select Time</option>
                                                                    <option value="12:00">12:00 - 13:00</option>
                                                                    <option value="13:00">13:00 - 14:00</option>
                                                                    <option value="14:00">14:00 - 15:00</option>

                                                                </select>
                                                                <select id="template-contactform-time" class="custom-select form-control border-form-control" name="select_time" required="" ng-if="bookinit.selectdate != '2020-11-14'">
                                                                    <option value="disabled" disabled="" selected="">Select Time</option>
                                                                    <option value="12:00">12:00 - 13:00</option>
                                                                    <option value="13:00">13:00 - 14:00</option>
                                                                    <option value="14:00">14:00 - 15:00</option>
                                                                    <option value="18:00">18:00 - 19:00</option>
                                                                    <option value="19:00">19:00 - 20:00</option>
                                                                    <option value="20:00">20:00 - 21:00</option>
                                                                    <option value="21:00">21:00 - 22:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class='text-left pull-left'>No. Of Persons</label>
                                                                <select id="template-contactform-people" class="custom-select form-control border-form-control" name="people" required="">
                                                                    <option value="disabled" disabled="" selected=""  >Person</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6+</option>
                                                                </select>
                                                            </div>
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
                                <div role="tabpanel" class="tab-pane" id="quandoo">
                                    <center>
                                        <iframe src="https://booking-widget.quandoo.com.au/iframe.html?agentId=2&merchantId=71001&origin=https%3A%2F%2Fadmin.quandoo.com&path=https%3A%2F%2Fbooking-widget.quandoo.com%2F&theme=brand " style="    height: 666px;

                                                border: none;"></iframe>
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
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

<script src="<?php echo base_url(); ?>assets/jqlib/jquery-3.4.1.slim.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jqlib/jquery-ui.css">

<script src="<?php echo base_url(); ?>assets/jqlib/jquery-1.12.4.js"></script>
<script src="<?php echo base_url(); ?>assets/jqlib/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/jqlib/moment.js"></script>
<script>
                                                                    var listofbookeddate = <?php echo json_encode($datelist); ?>
</script>
<?php
$this->load->view('layout/footer');
?>