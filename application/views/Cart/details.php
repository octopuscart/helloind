<?php
$this->load->view('layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/cart.css" type="text/css" />

<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background-position: center;">
        <!-- Container -->
        <div class="container">
            <h3>Shipping Cart</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Portfolio Section -->
    <div class="container-fluid no-padding portfolio-section" style="padding: 0px;background:url(<?php echo base_url(); ?>assets/theme2/images/page-banner-bg.jpg)">
        <!-- Container -->
        <div class="container"

             <div class="content-wrap nobottompadding">
                <div class="container clearfix">
                    <div class="row clearfix">
                        <div class="cart-page-area">
                            <div class="container" ng-if="globleCartData.total_quantity">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cart-page-top table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="cart-form-heading text_center" style="width: 50%" colspan="2">Product</td>
                                                        <td class="cart-form-heading text_center">Price</td>
                                                        <td class="cart-form-heading text_center">Quantity</td>
                                                        <td class="cart-form-heading numbertext" style="width: 150px;">Total</td>
                                                        <td class="cart-form-heading"></td>
                                                    </tr>
                                                </thead>
                                                <tbody id="quantity-holder">
                                                    <tr ng-repeat="product in globleCartData.products">
                                                        <td class="cart-img-holder" style="       width: 80px;
                                                            text-align: center;">
                                                            <a href="#">
                                                                <img  src="{{product.file_name}}" alt=""  alt="cart" class="img-responsive cart_image_block">
                                                            </a>
                                                        </td>
                                                        <td  style="    border-left: 0px;">
                                                            <h3><a href="#">{{product.title}}</a>
                                                                <br/>
                                                                <small style="font-size: 10px">{{product.sku}}</small>
                                                            </h3>

                                                        </td>
                                                        <td class="amount text-center">{{product.price|currency:" "}}</td>
                                                        <td class="quantity">

                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="button" class="btn btn-secondary"  ng-click="updateCart(product, 'add')"><i class="fa fa-plus" aria-hidden="true" ></i></button>
                                                                <button type="button" class="btn btn-secondary">{{product.quantity}}</button>
                                                                <button type="button" class="btn btn-secondary"  ng-click="updateCart(product, 'sub')"><i class="fa fa-minus" aria-hidden="true" ></i></button>
                                                            </div>


                                                        </td>
                                                        <td class="amount numbertext">{{product.total_price|currency:" "}}</td>
                                                        <td class="dismiss"><a href="#"  ng-click="removeCart(product.product_id)"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                    </tr>


                                                    <tr>
                                                        <td colspan="4" class="text_right">
                                                            SUB TOTAL
                                                        </td>
                                                        <td class=" amount numbertext">
                                                            {{globleCartData.sub_total_price|currency:"<?php echo globle_currency; ?>"}}
                                                        </td>
                                                        <td></td>
                                                    </tr>
 <tr>
                                                <td colspan="4" class="text_right">
                                                    <p style="    
                                                       float: left;
                                                       line-height: 11px;
                                                       color: red;
                                                       font-size: 14px;
                                                       font-weight: 800;
                                                       /* padding-top: 12px; */
                                                       /* padding-top: 12px; */
                                                       margin-bottom: 0;

                                                       ">
                                                        {{globleCartData.discount_note}}
                                                    </p>     DISCOUNT
                                                </td>
                                                <td class=" amount numbertext">
                                                    {{globleCartData.discount|currency:"<?php echo globle_currency; ?>"}}
                                                </td>
                                                <td></td>
                                            </tr>
                                                    <tr>
                                                        <td colspan="4" class="text_right">
                                                            <p style="    float: left;
                                                               line-height: 0px;
                                                               color: red;
                                                               font-weight: 800;
                                                               margin-top: 0px;
                                                               padding-top: 12px;">
                                                                 Shipping Only In Tsim Sha Tsui
                                                            </p>  SHIPPING 
                                                        </td>
                                                        <td class=" amount">
                                                            {{globleCartData.shipping_price|currency:"<?php echo globle_currency; ?>"}}
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text_right">
                                                            TOTAL
                                                        </td>
                                                        <td class=" amount">
                                                            {{globleCartData.total_price|currency:"<?php echo globle_currency; ?>"}}
                                                        </td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="6" class="text_right">
                                                            <div class="proceed-button">

                                                                <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-apply-coupon disabled" >Proceed to checkout</a>
                                                            </div> </td>

                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php
                            $this->load->view('Cart/noproduct');
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    <!-- Cart Page Area End Here -->
        <!--angular controllers-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


        <?php
        $this->load->view('layout/footer');
        ?>