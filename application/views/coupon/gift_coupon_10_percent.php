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


</style>


<main ng-controller="couponController" style="background: url(<?php echo base_url(); ?>assets/theme2/images/onview-bg.jpg);background-size: cover;">
    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="    padding: 30px 0 30px;">

        <div class="container">
            <h3>Buy Cash Voucher</h3>
            <h3 style="font-size: 25px;line-height: 25px;"> </h3>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid no-padding welcome-section2" style="background: #2a2a2a;">
        <!-- Container -->
        <div class="container">

            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="row clearfix" style="    width: fit-content;">


                        <div class='col-md-4'>
                            <img src="https://manager2.woodlandshk.com/assets/images/coupon100.jpg"/>
                            <h3 class="font-secondary text-white" style="font-size: 20px;color:white;font-family: 'Kaushan Script', cursive!important;">


                                <p class="coupontextp">Get More For Your Bucks!!</p>
                                <p class="coupontextp">Get More | Pay Less</p>
                                <p class="coupontextp">*Discounts upto 20%</p> 

                                <p class="coupontextp" >Group Dining? <br/ >
                                        Get Cash Vouchers</p>
                            </h3> 



                        </div>
                        <div class='col-md-8'>
                            <div class="p-5rounded bg-white" style="  padding: 15px;background: #fff;">
                                <h3 class="font-secondary h1 color"></h3>

                                <div class=" mt-4 mt-lg-0" >
                                    <div class="form-result"></div>
                                    <form class="mb-0 row"  action="#" method="post" >
                                        <div class="form-process"></div>
                                        <div class="col-md-12">
                                            <div class="headerformblock">

                                                <div class="col-sm-6 mb-3 pull-left">
                                                    <label >Name</label>
                                                    <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                                </div>
                                                <div class="col-sm-6 mb-3 pull-left">
                                                    <label >Contact No.</label>
                                                    <input type="text" id="template-contactform-phone" name="contact_no" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                                </div>

                                                <div class="clear"></div>
                                                <div class="col-sm-12 mb-3 pull-left">
                                                    <label >Email</label>
                                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="headerformblock">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="hidden" name="check_receiver" value="{{couponinit.showreceiver}}">
                                                        <input type="checkbox"  ng-model="couponinit.showreceiver">  Tick here, if you want to send cash voucher to someone.
                                                    </label>
                                                </div>

                                                <div ng-if="couponinit.showreceiver == false">
                                                    <input type="hidden" name="name_receiver" value="">
                                                    <input type="hidden" name="contact_no_receiver" value="">
                                                    <input type="hidden" name="email_receiver" value="">
                                                    <input type="hidden" name="message" value="">

                                                </div>

                                                <div ng-if="couponinit.showreceiver">
                                                    <div class="col-sm-6 mb-3 pull-left">
                                                        <label >Name</label>
                                                        <input type="text" id="template-contactform-name1" name="name_receiver" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 pull-left">
                                                        <label >Contact No.</label>
                                                        <input type="text" id="template-contactform-phone1" name="contact_no_receiver" value="" class="form-control border-form-control required" placeholder="Contact No." >
                                                    </div>

                                                    <div class="clear"></div>
                                                    <div class="col-sm-12 mb-3 pull-left">
                                                        <label >Email</label>
                                                        <input type="email" id="template-contactform-email1" name="email_receiver" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                                    </div>
                                                    <div class="col-sm-12  ">
                                                        <label >Message</label>
                                                        <input type="text" id="template-contactform-message" name="message" value="" class="required email form-control border-form-control" placeholder="Type you message here" required="" max="300">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="headerformblock">


                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-secondary"  ng-click="updateCoupon('add')"><i class="fa fa-plus" aria-hidden="true" ></i></button>
                                                    <button type="button" class="btn btn-secondary" style="width:100px;">{{couponinit.quantity}}</button>
                                                    <button type="button" class="btn btn-secondary"  ng-click="updateCoupon('sub')"><i class="fa fa-minus" aria-hidden="true" ></i></button>
                                                </div>
                                                <p class="text-right pull-right couponamt">
                                                    Amount:{{couponinit.amountbase| currency:"<?php echo globle_currency; ?>"}} - {{couponinit.peramount| currency:"<?php echo globle_currency; ?>"}} ({{couponinit.basepercent}}% Off)   Total Amount: &nbsp;<b>{{couponinit.amount| currency:"<?php echo globle_currency; ?>"}}</b>
                                                </p>
                                                <input type="hidden" name="quantity" value="{{couponinit.quantity}}">
                                                <input type="hidden" name="amount" value="{{couponinit.amount}}">
                                                <input type="hidden" name="base_amount" value="{{couponinit.amountbase}}">
                                                <input type="hidden" name="percent" value="{{couponinit.basepercent}}">


                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                        <div class="col-sm-3 mb-3"></div>
                                        <div class="col-sm-6 mb-3">
                                            <p class="text-center" style="    margin-top: 20px;   margin-bottom: 0;">Choose Payment Method</p>
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
                                        <div class="col-sm-3 mb-3"></div>


                                        <div class="clear"></div>
                                        <div class="col-md-12 nobottommargin" style='    text-align: center;margin-top: 20px;'>
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

</div>

</div><!-- Row /- -->
</div><!-- Container /- -->
</div><!-- Welcome Section /- -->
<!-- Client Section -->
</main>

<?php
$this->load->view('layout/footer');
?>

<script>

    App.controller('couponController', function ($scope, $http, $timeout, $interval, $filter) {
        $scope.couponinit = {'quantity': 1, "showreceiver": false, "amount": 100, "amountinit": 100, "basepercent": 10};
        $scope.calculation = function () {
            $scope.couponinit.amountbase = $scope.couponinit.quantity * $scope.couponinit.amountinit;
            $scope.couponinit.basepercent = 10;
            if ($scope.couponinit.quantity > 4 && $scope.couponinit.quantity < 10) {
                $scope.couponinit.basepercent = 15;
            }
            if ($scope.couponinit.quantity > 9) {
                $scope.couponinit.basepercent = 20;
            }


            $scope.couponinit.peramount = ($scope.couponinit.amountbase * $scope.couponinit.basepercent) / 100;
            $scope.couponinit.amount = $scope.couponinit.amountbase - $scope.couponinit.peramount;
        }

        $scope.updateCoupon = function (oper) {

            if (oper == 'sub') {
                if ($scope.couponinit.quantity == 1) {
                } else {
                    $scope.couponinit.quantity = Number($scope.couponinit.quantity) - 1;
                }
            }
            if (oper == 'add') {
                if ($scope.couponinit.quantity > 14) {
                } else {
                    $scope.couponinit.quantity = Number($scope.couponinit.quantity) + 1;
                }
            }
            $scope.calculation();
        }
        $scope.calculation();
    })

</script>