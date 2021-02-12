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
    .headerformblock{
        padding: 10px;
        border: 1px solid #fcb316;
        margin: 10px;
        width:-webkit-fill-available;
        display: inline-block;
    }

    .headerformblock h3 {
        font-size: 14px;
        margin-bottom: 0px;
        position: absolute;
        top: -20px;
        background: #f49738;
        color:white;
        width: fit-content;
        padding: 0px 10px;
        border: 1px solid #f49738;
        color: white;
        border-radius: 10px;;
    }
    .coupontextp{
        margin-bottom: 0px;
        line-height: 60px;
        font-size: 30px;
    }

    .couponamt{
        margin: 0;
        line-height: 35px;
        font-size: 13px;
        line-height: 35px!important
    }

    .couponamt b{
        font-size: 17px;
        float: right;
    }

    form label{
        margin-top: 20px;
    }


</style>


<main ng-controller="couponController" style="background: url(<?php echo base_url(); ?>assets/theme2/images/onview-bg.jpg);background-size: cover;">
    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="    padding: 30px 0 30px;">

        <div class="container">
            <h3>Loyalty program</h3>
            <h3 style="font-size: 25px;line-height: 25px;"> </h3>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid no-padding welcome-section2">
        <!-- Container -->
        <div class="container">

            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="row clearfix" style="    width: fit-content;background: white;">
                        <div class="col-lg-5" style="background-color: #FFF; ">

                            <div class="p-5rounded bg-white" style="  padding: 15px;background: #fff;">
                                <h3 class="font-secondary text-white" style="font-size: 30px;color:red;font-family: 'Kaushan Script', cursive!important;">
                                    Join Our Loyalty program</h3>

                                <div class=" mt-4 mt-lg-0" data-loader="button">
                                    <?php
                                    if ($join_status == '100') {

                                        echo " <div class='alert alert-danger'>$join_msg</div>";
                                    }
                                    ?>

                                    <form class="mb-0 row"   action="#" method="post" >


                                        <div class="col-sm-12">
                                            <label >Name</label>
                                            <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                        </div>
                                        <div class="col-sm-12 ">
                                            <label >Contact No.</label>
                                            <input type="text" id="template-contactform-phone" name="contact_no" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                        </div>


                                        <div class="col-sm-12">
                                            <label >Email</label>
                                            <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                        </div>
                                        <div class="col-sm-12">
                                            <label >Retype Email</label>
                                            <input type="email" id="template-contactform-email" name="reemail" value="" class="required email form-control border-form-control" placeholder="Retype Email Address" required="">
                                        </div>

                                        <div class="clear"></div>
                                        <hr/>
                                        <div class="col-sm-12 mb-3" style="margin-top: 20px;">
                                            <button class="button btn btn-lg btn btn-danger button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit"  name="submit" value="submit">Join Now</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 clearfix" style="background:url()">
                            <div id="food-menu-carousel" class="menu-carousel owl-carousel image-carousel food-menu-carousel custom-js owl-loaded">

                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="padding:0">
                                        <div class="owl-item active">
                                            <div class="oc-item">
                                                <div class="food-content clearfix">
                                                    <div class="heading-block nobottomborder nobottommargin" style="font-size:40px;color:black;font-family: 'Kaushan Script', cursive!important;text-align: center">
                                                        <h1 class="font-secondary nott">Welcome to the Hello India Loyalty program </h1>
                                                        <p style="    font-size: 15px;
                                                           text-transform: uppercase;" >Join our customer loyalty program and earn cash vouchers based on numbers of visits to Hello India !</p>
                                                    <div style="text-align: center"><img src="<?php echo base_url(); ?>assets/images/hlqr.png" style="height: 300px;width: 300px;display: inline;"/></div>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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

