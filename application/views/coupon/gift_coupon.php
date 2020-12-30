<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
    .checkbox-coupon{
        height: 28px;
        float: left;
        width: 20px;
        margin-top: 10px

    }
    .coupon-imgage-payment{
        float: left;
        width: 120px;
    }



</style>


<main ng-controller="cakeController" style="background: url(<?php echo base_url(); ?>assets/theme2/images/onview-bg.jpg);background-size: cover;">
    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="    padding: 30px 0 30px;">

        <div class="container">
            <h3>Gift Coupon</h3>
            <h3 style="font-size: 25px;line-height: 25px;"> </h3>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid no-padding welcome-section2" style="background: #fff;">
        <!-- Container -->
        <div class="container">

            <div class="row clearfix">
                <div class="row clearfix" style="    width: fit-content;">


                    <div class='col-md-8'>
                        <img src="https://manager2.woodlandshk.com/assets/images/coupon100.jpg">
                    </div>
                    <div class='col-md-4'>
                        <div class="p-5rounded bg-white" style="  padding: 15px;">
                            <h3 class="font-secondary h1 color"></h3>

                            <div class=" mt-4 mt-lg-0 bookingpage" >
                                <div class="form-result"></div>
                                <form class="mb-0 row form-widget"  action="#" method="post" >
                                    <div class="form-process"></div>
                                    <div class="col-sm-6 mb-3">
                                        <label >Name</label>
                                        <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label >Contact No.</label>
                                        <input type="text" id="template-contactform-phone" name="contact_no" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                    </div>

                                    <div class="clear"></div>
                                    <div class="col-sm-12 mb-3">
                                        <label >Email</label>
                                        <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                    </div>


                                    <div class="col-sm-12 mb-3">
                                        <p class="text-center">Choose Payment Method</p>
                                        <div class="col-md-6 pull-left">
                                            <label class="radio-inline">
                                                <input type="radio"  name="payment_type" value="ALIPAY" class="checkbox-coupon  form-control border-form-control" checked=true required="">
                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/alipay.jpg" class="coupon-imgage-payment">
                                            </label>
                                        </div>

                                        <div class="col-md-6 pull-left">
                                            <label class="radio-inline">
                                                <input type="radio"  name="payment_type" value="WECHAT" class="checkbox-coupon  form-control border-form-control"  checked=false required="">
                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/wechat.jpg" class="coupon-imgage-payment">
                                            </label>
                                        </div>
                                    </div>


                                    <div class="clear"></div>
                                    <div class="col-12 nobottommargin" style='    text-align: center;'>
                                        <button class="button btn btn-lg btn btn-danger button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" name="submit_now" value="submit">Buy Now</button>
                                    </div>
                                    <div class="clear"></div>

                                </form>
                            </div>
                        </div>
                    </div>
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

<?php
$this->load->view('layout/footer');
?>