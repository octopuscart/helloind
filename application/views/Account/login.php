<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
    
    .login-registration-field{
        background: #fff;
        padding: 5px 25px 20px;
    border-radius: 20px;
    }
</style>    

<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background-position: center;">
        <!-- Container -->
        <div class="container">
            <h3>User Login</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Portfolio Section -->
    <div class="container-fluid no-padding portfolio-section" style="padding: 0px;background:url(<?php echo base_url(); ?>assets/theme2/images/page-banner-bg.jpg)">
        <!-- Container -->
        <div class="container"


             <!-- Login Registration Page Area Start Here -->
             <div class="login-registration-page-area" style="padding: 20px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            if ($next_link === 'checkoutInit') {
                                ?>
                                <h5  class="text-center">
                                    <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="btn  btn btn-danger button button-circle btn btn-lg text-white ml-0 mt-3 colordarkgreenborder-form-control tleft required" style="    width: 302px;
                                       display: inline-block;background: red;">
                                        <i class=" fa fa-user"></i> Checkout As Guest <i class="fa fa-arrow-right"></i>
                                    </a>
                                </h5>
                                <h3  class="text-center">Or</h3>
                                <?php
                            }
                            ?>
                            <h5 class="text-center">  By creating an account with our store, you will be able to move through
                                the checkout process faster, store multiple shipping addresses,
                                view and track your orders in your account and more.
                            </h5>
                        </div>
                        <?php
                        if ($msg) {
                            ?>
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                                    <i class="fa fa-exclamation-triangle "></i> <?php echo $msg; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="login-registration-field">
                                <h2 class="cart-area-title font-secondary " style="font-size:30px;">Login</h2>
                                <form method="post" action="#">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control border-form-control tleft required" name="email" placeholder="Email " required=""/>
                                    <label>Password *</label>
                                    <input type="password" class="form-control border-form-control tleft required" name="password" placeholder="Password *" required=""/>
                                    <div style="clear: both"></div>
                                    <br/>
                                    <button class="btn-send-message button button-circle btn btn-lg text-white ml-0 mt-3 colordarkgreen form-control1 border-form-control tleft required" name="signIn" type="submit" value="signIn">Login</button>
                                    <!--<span><input type="checkbox" name="remember"/>Remember Me</span>-->
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="login-registration-field">
                                <h2 class="cart-area-title font-secondary " style="font-size: 30px;">Register</h2>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Last Name *</label>
                                            <input type="text" name="last_name" class="form-control border-form-control tleft required" placeholder="Last Name *" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>First Name *</label>
                                            <input type="text" name="first_name" class="form-control border-form-control tleft required" placeholder="First Name *" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email address *</label>
                                            <input type="email" name="email" class="form-control border-form-control tleft required" placeholder="Email *" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Contact No. *</label>
                                            <input type="text" name="contact_no" class="form-control border-form-control tleft required" placeholder="Contact No. *" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Password *</label>
                                            <input type="password" class="pass form-control border-form-control tleft required" name="password" placeholder="Password" required="">

                                        </div>
                                        <div class="col-md-6">
                                            <label>Confirm Password *</label>
                                            <input type="password" class="con_pass form-control border-form-control tleft required" name="con_password" placeholder="Confirm Password" required>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender *</label>
                                            <select name="gender" id="gender"  class="form-control border-form-control tleft required"  required >
                                                <option value="Male" >Male</option>
                                                <option value="Female" >Female</option>
                                            </select>


                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" class="form-control border-form-control tleft required" name="birth_date" id="birth_date" value="{{birth_month}}-{{date_birth}}"> 
                                            <label>Date Of Birth *</label>

                                            <div class="row" style="    margin: 0px;">
                                                <select id="birth_month" ng-model="birth_month" name="birth_month" class="r_corners bg_light w_full border_none bith_date_select form-control border-form-control tleft required" required  style="    width: 40%!important;float: left;margin-right: 10px;">
                                                    <option value="" >-MM-</option>
                                                    <?php
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        $mmdate = $i < 10 ? "0" . $i : $i;
                                                        echo "<option value='$mmdate'>$mmdate</option>";
                                                    }
                                                    ?>
                                                </select> 

                                                <select id="birth_date" name="date_birth" ng-model="date_birth" class="r_corners bg_light w_full border_none bith_date_select form-control border-form-control tleft required"  required  style="    width: 40%!important;">
                                                    <option value="" >-DD-</option>
                                                    <?php
                                                    for ($i = 1; $i <= 31; $i++) {
                                                        $dddate = $i < 10 ? "0" . $i : $i;
                                                        echo "<option value='$dddate'>$dddate</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <div style="clear: both"></div>





                                    <br/>


                                    <button name = "registration" class="btn-send-message disabled button button-circle btn btn-lg text-white ml-0 mt-3 colordarkgreen" type="submit" value="Login">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Registration Page Area End Here -->
        </div>
    </div>
</main>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>