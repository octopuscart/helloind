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
        position: relative;
        top: -20px;
        background: #fff;
        width: fit-content;
        padding: 0px 10px;
        border: 1px solid #fcb316;
    }



</style>

<main ng-controller="cakeController" style="background: url(<?php echo base_url(); ?>assets/theme2/images/onview-bg.jpg);background-size: cover;">
    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="    padding: 30px 0 30px;">

        <div class="container">
            <h3>Thank you</h3>
            <h3 style="font-size: 25px;line-height: 25px;"> </h3>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid no-padding welcome-section2" style="background: #fff;">
        <!-- Container -->
        <div class="container">

            <div class="row clearfix">
                    <div  style="    width: 100%;text-align: center;">


                        <h3 class="font-secondary text-white text-center    " style="font-size: 30px;font-family: 'Kaushan Script', cursive!important;">
                            Thanks you for purchasing Cash Voucher, your Cash Voucher code has been sent to your email.
                        </h3> 
                        <img src="<?php echo $couponimage; ?>" style="height: 300px;margin-top: 20px;">



                    </div>
                </div>

        </div>
    </div>
</main>






    <?php
    $this->load->view('layout/footer');
    ?>