<?php
$this->load->view('layout/header');
?>


<style>
    .order_box{
        padding: 10px;
        padding-bottom: 11px!important;
        height: 110px;
    }
    .order_box li{
        line-height: 19px!important;
        padding: 7px!important;
        border: none!important;
    }

    .order_box li i{
        float: left!important;
        line-height: 19px!important;
        margin-right: 13px!important;
    }

   
</style>

<style>

</style> 
<div class="container-fluid no-padding page-banner" style="background-position: center;">
    <!-- Container -->
    <div class="container">
        <h3>My Account</h3>
    </div><!-- Container /- -->
</div><!-- Page Banner /- -->

<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />

<!-- Content -->
<div id="content" class="my-account-page-area"> 

    <!-- Blog -->
    <section class="new-main blog-posts " >
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9">
                        <?php
                        foreach ($orderslist as $key => $value) {
                            ?>
                            <div class="row  "> 

                                    <article class="order_box blockcontainer" style="padding: 10px;width: 100%;">
                                        <div class="col-md-12">
                                            <h6>
                                                Order No. #<?php echo $value->order_no; ?>
                                                <span style="float: right;margin: 0px">
                                                    <i class="fa fa-calendar"></i>&nbsp;<?php echo $value->order_date; ?>  <?php echo $value->order_time; ?>
                                                </span>
                                            </h6>
                                        </div>
                                        <div class="col-md-4 colleft ">
                                            Total Amount: {{<?php echo $value->total_price; ?>|currency:"<?php echo globle_currency; ?> "}}
                                            <br/>
                                            Total Products: {{<?php echo $value->total_quantity; ?>}}
                                        </div>
                                        <div class="col-md-4 colleft">
                                            Status: <?php echo $value->status; ?>

                                        </div>
                                        <div class="col-md-4 colleft">
                                            <a href="<?php echo site_url('order/orderdetails/' . $value->order_key); ?>" class="btn btn-default btn-small  button button-circle button-large text-white ml-0 mt-3 colordarkgreen listbuttons" style="margin: 0px;    float: right;">View Order</a>
                                        </div>
                                    </article>

                            </div>
                            <?php
                        }
                        ?>
                    </div>



                </div>
                </section>
            </div>
            <!-- End Content --> 



            <?php
            $this->load->view('layout/footer');
            ?>

            <script>
                $(function () {
                    $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
                    $(".orderlist_page").addClass("active");
                })
            </script>