<?php
$this->load->view('layout/header');
?>

<style>




    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;
        height: 150px;


    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;


    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }

</style>






<!-- Inner Page Banner Area Start Here -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/cart.css" type="text/css" />

<!-- Inner Page Banner Area Start Here -->
<div class="container-fluid no-padding page-banner" style="background-position: center;">
    <!-- Container -->
    <div class="container">
        <h3>Shopping Cart</h3>
    </div><!-- Container /- -->
</div><!-- Page Banner /- -->
<!-- Inner Page Banner Area End Here -->

<!-- Content -->

<section id="content" style="overflow: visible;">
    <div class="content-wrap nobottompadding">
        <div class="container clearfix">
            <div class="row clearfix">

                <?php
                $this->load->view('Cart/commanmessage');
                ?>
                <div class="cart-page-area">
                    <div class="container" ng-if="globleCartData.total_quantity">
                        <div class="row">
                            <?php
                            $this->load->view('Cart/itemblock', array('vtype' => 'items'));
                            ?>

                            <?php
                            $this->load->view('Cart/itemblock', array('vtype' => 'shipping'));
                            ?>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card card-default">
                                    <div class="card-heading" role="tab" id="headingOne">
                                        <h4 class="card-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="fa-stack">
                                                    <i class="fa fa-money fa-stack-1x"></i>
                                                    <i class="ion-bag fa-stack-1x "></i>
                                                </span>   Payment Method
                                                <span style="float: right; line-height: 29px;font-size: 12px;" class="ng-binding">
                                                    <?php echo DEFAULT_PAYMENT_MODE; ?>
                                                </span> 
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Address Details -->
                                    <div class="card-body">
                                        <?php
                                        $this->load->view('Cart/carttotal');
                                        ?>
                                        <div class="order-sheet product-details2-area" style="margin-top: 5px;padding:0">
                                            <form action="#" method="post">
                                                <div class="product-details-tab-area" style="margin: 0;">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <ul class="nav nav-tabs" role="tablist">

                                                                <li class="nav-item active"><a href="#cash" class="nav-link" data-toggle="tab" aria-expanded="false">Cash On Delivery</a></li>
                                                                <li class="nav-item"><a href="#alipay" class="nav-link " data-toggle="tab" aria-expanded="false">Alipay</a></li>
                                                                <li class="nav-item"><a href="#wechat" class="nav-link " data-toggle="tab" aria-expanded="false">WeChat</a></li>



                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="tab-content">
                                                                <?php
                                                                if (PAYMENT_MODE_PAYPAL == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'PayPal' ? 'show active' : ''; ?>"  id="paypal">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/paypal.png" style="height: 100px;">                
                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart" . $checkoutmode . "/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Delivery Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">

                                                                                                <a href=" <?php echo site_url("PayPalPayment" . $checkoutmode . "/process"); ?>" class="btn-apply-coupon checkout_button_next disabled"  onclick="confirmOrder()">Place Order <i class="fa fa-arrow-right"></i></a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_BANK == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'Bank Transfer' ? 'show active' : ''; ?>" id="bank">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/bank.png" style="height: 100px;">                
                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Delivery Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">
                                                                                                <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Bank Transfer" onclick="confirmOrder()">
                                                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_COD == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'Cash On Delivery' ? ' active in' : ''; ?>" id="cash">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/cod.png" style="height: 293px;">                

                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Delivery Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">
                                                                                                <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Cash On Delivery">
                                                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                                                </button>                                                                  
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_CHEQUE == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'Cheque On Delivery' ? 'show active' : ''; ?>" id="cheque">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/chod.png" style="height: 100px;">                

                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Delivery Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">
                                                                                                <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Cheque On Delivery">
                                                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                                                </button>                                                                   
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                     <div class="tab-pane fade " id="alipay">

                                                                    <div class='row' style='text-align: center;'>
                                                                        <div class='col-md-12'>
                                                                            <p>
                                                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/alipay.jpg" style="height: 100px;">                

                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="cart-page-top table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tbody id="quantity-holder">
                                                                                <tr>
                                                                                    <td colspan="4" class="text_right">
                                                                                        <div class="proceed-button pull-left " >
                                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Delivery Address</a>
                                                                                        </div>
                                                                                        <div class="proceed-button pull-right ">
                                                                                            <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Alipay">
                                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                                            </button>                                                                   
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade " id="wechat">

                                                                    <div class='row' style='text-align: center;'>
                                                                        <div class='col-md-12'>
                                                                            <p>
                                                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/wechat.jpg" style="height: 100px;">                

                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="cart-page-top table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tbody id="quantity-holder">
                                                                                <tr>
                                                                                    <td colspan="4" class="text_right">
                                                                                        <div class="proceed-button pull-left " >
                                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Delivery Address</a>
                                                                                        </div>
                                                                                        <div class="proceed-button pull-right ">
                                                                                            <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="WeChat">
                                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                                            </button>                                                                   
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                </div>





                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
</section>

<?php
$this->load->view('Cart/noproduct');
?>







<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
                                                                                                    var avaiblecredits = 0;
                                                                                                    function confirmOrder() {
                                                                                                        swal({
                                                                                                            title: 'Processing Order',
                                                                                                            onOpen: function () {
                                                                                                                swal.showLoading()
                                                                                                            }
                                                                                                        });
                                                                                                    }


                                                                                                    function myFunction() {
                                                                                                        /* Get the text field */
                                                                                                        var copyText = document.getElementById("myInput");

                                                                                                        /* Select the text field */
                                                                                                        copyText.select();


                                                                                                        /* Copy the text inside the text field */
                                                                                                        document.execCommand("copy");

                                                                                                        /* Alert the copied text */
                                                                                                        alert("Copied the link: " + copyText.value);
                                                                                                    }
</script>

<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>