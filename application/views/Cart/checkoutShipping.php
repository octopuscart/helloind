<?php
$this->load->view('layout/header');

$timeslotarray = array(
    "13" => "01:00 PM",
    "14" => "02:00 PM",
    "15" => "03:00 PM",
    "16" => "04:00 PM",
    "17" => "05:00 PM",
    "18" => "06:00 PM",
    "19" => "07:00 PM",
    "20" => "08:00 PM",
    "21" => "09:00 PM",
);

$timeslot = [];
foreach ($timeslotarray as $key => $value) {
    array_push($timeslot, $key);
}

$f_dtime = $timeslot[0];
$l_dtime = $timeslot[count($timeslot) - 1];

$ctime = date('H');
//$ctime = "13";
$timeindex = array_search($ctime, $timeslot);
$delivery_date = date('Y-m-d');
$nextday = date('Y-m-d', strtotime(' +1 day'));



$selectTimeSlot = $timeslotarray;
switch ($ctime) {
    case isset($timeslotarray[$ctime]):
        $selectTimeSlot = array();
        $timeindex = array_search($ctime, $timeslot);
        for ($dt = $timeindex + 1; $dt < count($timeslot); $dt++) {
            $temptime = $timeslot[$dt];
            $selectTimeSlot[$temptime] = $timeslotarray[$temptime];
        }
        if (!$selectTimeSlot) {
            $delivery_date = $nextday;
            $selectTimeSlot = $timeslotarray;
        }
        break;
    case ($ctime < $f_dtime):

        $selectTimeSlot = $timeslotarray;
        break;
    case $ctime > $l_dtime:
        $delivery_date = $nextday;
        $selectTimeSlot = $timeslotarray;
        break;
    default:
        $selectTimeSlot = $timeslotarray;
}

$delivery_time = current($selectTimeSlot);


$delivery_date = $delivery_details ? $delivery_details['delivery_date'] : $delivery_date;
$delivery_time = $delivery_details ? $delivery_details['delivery_time'] : $delivery_time;
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
        height: 200px;


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

    .freeshippingnote{
        color:red;
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

<div ng-controller="ShippingController">
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



                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a href="#delivery" class="nav-link active" data-toggle="tab" aria-expanded="false" style="font-size: 27px">Delivery<p class='discountnotetab change-color-gradiant2'></p></a></li>
                                        <li class="nav-item"><a href="#pickup" class="nav-link " data-toggle="tab" aria-expanded="false"  style="font-size: 27px">Pickup
                                                <!--<p class='discountnotetab change-color-gradiant2'>30% Discount On Pickup</p>-->
                                                <p class='discountnotetab change-color-gradiant2'></p>
                                            </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade  active in" id="delivery" role="tab" >

                                            <div class="card card-default">
                                                <div class="card-heading" role="tab" id="headingOne">
                                                    <h4 class="card-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-map-marker fa-stack-1x"></i>
                                                                <i class="ion-bag fa-stack-1x "></i>
                                                            </span>   Delivery Address
                                                            <span style="float: right; line-height: 29px;" class="ng-binding">
                                                                <button class="btn btn-danger" data-toggle="modal" data-target="#changeAddress" style="margin-left: 20px;padding: 5px 11px;color:white;"><i class="fa fa-plus"></i> Add New</button>
                                                            </span> 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <!-- Address Details -->
                                                <div class="card-body">
                                                    <div class="order-sheet" style="margin-top: 30px">


                                                        <div class="row" >  
                                                            <div class="col-md-12">

                                                                <?php
                                                                if (count($user_address_details)) {
                                                                    ?>
                                                                    <?php
                                                                    foreach ($user_address_details as $key => $value) {
                                                                        ?>
                                                                        <div class="col-md-6">
                                                                            <?php if ($value['status'] == 'default') { ?> 
                                                                                <div class="checkcart <?php echo $value['status']; ?> ">
                                                                                    <i class="fa fa-check fa-2x"></i>
                                                                                </div>
                                                                            <?php } ?> 
                                                                            <div class=" address_block <?php echo $value['status']; ?> ">
                                                                                <p>
                                                                                    <?php echo $value['address1']; ?>,<br/>
                                                                                    <?php echo $value['address2']; ?>,<br/>
                                                                                    <?php echo $value['city']; ?><br/>
                                                                                    <br/>
                                                                                    <?php if ($value['status'] != 'default') { ?> 
                                                                                        <a href="<?php echo site_url("Cart/checkoutShipping/?setAddress=" . $value['id']); ?>" class="btn-send-message address_button btn-small " style="    padding: 0px 10px;
                                                                                           color: white!important;">Select Address</a>
                                                                                       <?php } ?> 
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                } else {
                                                                    ?>
                                                                    <h4 class="text-center "  style="color: red"><i class="fa fa-warning"></i> Please Add Shipping Address</h4>

                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>                            

                                                        </div>
                                                        <input type="hidden" name="delivery_time" class="form-control" ng-model="shippingInit.delivery_time">
                                                        <input type="hidden" name="delivery_date" class="form-control" ng-model="shippingInit.delivery_date">

                                                        <div class="cart-page-top table-responsive">
                                                            <table class="table table-hover">
                                                                <tbody id="quantity-holder">
                                                                    <tr>
                                                                        <td colspan="3" style="width:50%;vertical-align: middle;">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h3 style="line-height: 4px;">
                                                                                        Select Pickup Time
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select class="form-control" name="delivery_time">
                                                                                        <?php
                                                                                        foreach ($deliverytimelist as $key => $value) {
                                                                                            if (time() < strtotime($value)) {
                                                                                                ?>
                                                                                                <option value="<?php echo $value; ?>"><?php echo $value ?></option>
                                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>

                                                                            </div>   
                                                                            <input type="hidden" name="delivery_date" value="<?php echo date("Y-m-d"); ?>"/>

                                                                        </td>
                                                                        <td colspan="4" class="text_right">

                                                                            <div class="proceed-button pull-right ">
                                                                                <!--<a href=" <?php echo site_url("Cart/checkoutPayment"); ?>" class="btn-apply-coupon checkout_button_next disabled" >Choose Payment Method <i class="fa fa-arrow-right"></i></a>-->
                                                                                <form action="#" method="post">
                                                                                    <?php
                                                                                    if (count($user_address_details)) {
                                                                                        ?>
                                                                                        <input type="hidden" name="delivery_date" value="{{shippingInit.delivery_date}}"/>

                                                                                        <input type="hidden" name="delivery_time" value="{{shippingInit.delivery_time}}"/>

                        <!--                                                                        <a href=" <?php echo site_url("CartGuest/checkoutPayment"); ?>" class="btn-apply-coupon checkout_button_next disabled" >Choose Payment Method <i class="fa fa-arrow-right"></i></a>-->
                                                                                        <button type="submit" class="btn-apply-coupon checkout_button_next " name="processtopayment">Choose Payment Method <i class="fa fa-arrow-right"></i></button>
                                                                                        <?php
                                                                                    }
                                                                                    ?>
                                                                                </form>

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
                                        <div class="tab-pane fade " id="pickup" role="tab" >
                                            <form action="#" method="post" style="margin-bottom: 0;">
                                                <div class="card card-default">
                                                    <div class="card-body">

                                                        <h3>
                                                            <?php
                                                            echo "Your order will be ready in 45 minute, Expected time is " . date("h:i a", strtotime("+45 minute"));
                                                            ?>
                                                        </h3>
                                                        <div class="cart-page-top table-responsive">
                                                            <table class="table table-hover">
                                                                <tbody id="quantity-holder">
                                                                    <tr>
                                                                        <td colspan="3" style="width:50%;vertical-align: middle;">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h3 style="line-height: 4px;">
                                                                                        Select Pickup Time
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select class="form-control" name="delivery_time">
                                                                                        <?php
                                                                                        foreach ($deliverytimelist as $key => $value) {
                                                                                            if (time() < strtotime($value)) {
                                                                                                ?>
                                                                                                <option value="<?php echo $value; ?>"><?php echo $value ?></option>
                                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>

                                                                            </div>   
                                                                            <input type="hidden" name="delivery_date" value="<?php echo date("Y-m-d"); ?>"/>

                                                                        </td>
                                                                        <td colspan="4" class="text_right">

                                                                            <div class="proceed-button pull-right ">


                                                                                <input type="hidden" name="delivery_date" value="<?php echo date("Y-m-d"); ?>"/>


                                                                                <button type="submit" class="btn-apply-coupon checkout_button_next " name="processtopaymentpickup">Choose Payment Method <i class="fa fa-arrow-right"></i></button>


                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>


                                    <?php
                                    $this->load->view('Cart/itemblock', array('vtype' => 'payment'));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- Modal -->
    <div class="modal  fade" id="changeAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
        <div class="modal-dialog " role="document">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Add New Address</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body checkout-form">

                        <table class="table">
                            <tbody>

                                <tr>
                                    <td style="line-height: 25px;">
                                        <span for="name" class=""><b>Address Line 1</b></span>
                                    </td>
                                    <td>
                                        <input type="text" required="" name="address1" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                    </td>
                                </tr>

                                <tr>
                                    <td style="line-height: 25px;">
                                        <span for="name" class=""><b>Address Line 2</b></span>
                                    </td>
                                    <td>
                                        <input type="text" required="" name="address2" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" required="" style="height: 10%;">

                                        <input type="hidden" required="" name="state" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">




                                        <input type="hidden" required="" name="country" class="form-control" value="" style="height: 10%;">


                                        <input type="hidden" required="" name="city" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                    </td>
                                </tr>

                                <tr>
                                    <td style="line-height: 25px;">
                                        <span for="name" class=""><b>Area</b></span>
                                    </td>
                                    <td>
                                        <select name="zipcode" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;    font-size: 12px;">
                                            <option value="Tsim Sha Tsui">Tsim Sha Tsui</option>
                                        </select>

                                        <input type="hidden" name="delivery_date" value="{{shippingInit.delivery_date}}"/>

                                        <input type="hidden" name="delivery_time" value="{{shippingInit.delivery_time}}"/>

                                    </td>
                                </tr>



                            </tbody>
                        </table>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_address" class="btn btn-primary btn-small" style="color: white">Add Address</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





</div>



<?php
$this->load->view('Cart/noproduct');
?>








<script>
    var avaiblecredits = 0;
    var delivery_date = "<?php echo $delivery_date; ?>";
    var delivery_time = "<?php echo $delivery_time; ?>";</script>


<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme2/angular/productController.js"></script>


<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>