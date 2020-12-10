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

    .blog-posts article {
        margin-bottom: 10px;
    }
    .checkbox{
        font-size: 15px;
    }
</style>

<style>
    footer{
        position: inherit!important;
    }
</style> 
<div class="container-fluid no-padding page-banner" style="background-position: center;">
    <!-- Container -->
    <div class="container">
        <h3>My Account</h3>
    </div><!-- Container /- -->
</div><!-- Page Banner /- -->
<!-- Content -->

<!-- Content -->
<div id="content"  class="my-account-page-area"> 

    <!-- Blog -->
    <section class="new-main blog-posts ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9" >
                        <h4>Newsletter Preferences</h4>
                        <hr/>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name=""> Monthly Subscription


                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name=""> Weekly Subscription

                            </label>
                        </div>
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
                    $(".credit_page").addClass("active");
                })
            </script>