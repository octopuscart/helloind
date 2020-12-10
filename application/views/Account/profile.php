<?php
$this->load->view('layout/header');
?>


<style>
   
    .inlineformmargin{
        margin-bottom: 20px;
    }
</style> 
<div class="container-fluid no-padding page-banner" style="background-position: center;">
        <!-- Container -->
        <div class="container">
            <h3>My Account</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->





<!-- Content -->
<div id="content" class="my-account-page-area"> 

    <!-- Blog -->
    <section class="woocommerce ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9 checkout-form blockcontainer">
                        <?php
                        if ($msg) {
                            ?>
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                                    <i class="fa fa-exclamation-triangle fa-2x"></i><?php echo $msg; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class=" woocommerce-MyAccount-content">  
                            <h6><?php echo $user_details->email; ?> <small>Email (For Login)</small> </h6>
                            <div class="woocommerce-MyAccount-content "> 
                                <header class="row woocommerce-Address-title title">
                                    <h3 class="col-xs-12 metro-title">ACCESS YOUR ACCOUNT</h3>
                                </header>  

                                <form class="create_account_form row woocommerce-EditAccountForm edit-account" method="post" action="#">
                                    <input type="hidden" name="user_id" value="45">
                                    <ul class="row">
                                        <div class="col-sm-6 col-lg-6 inlineformmargin">
                                            <label>
                                                First Name
                                                <input type="text" name="first_name" class="form-control"  value="<?php echo $user_details->first_name; ?>">
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 inlineformmargin">

                                            <label>
                                                Last Name
                                                <input type="text" name="last_name" class="form-control"  value="<?php echo $user_details->last_name; ?>">
                                            </label>
                                        </div>


                                        <div class="col-sm-6 col-lg-6 inlineformmargin">

                                            <label>
                                                Contact No.
                                                <input type="text" name="contact_no" class="form-control"  value="<?php echo $user_details->contact_no; ?>">
                                            </label>
                                        </div>



                                        <div class="col-sm-6 col-lg-6 inlineformmargin">

                                            <label>
                                                Gender
                                                <select name="gender" class="form-control" >
                                                    <option  value="Male" <?php echo $user_details->gender == 'Male' ? "selected" : ""; ?>>Male</option>
                                                    <option  value="Female" <?php echo $user_details->gender == 'Female' ? "selected" : ""; ?>>Female</option>
                                                </select>
                                            </label> 
                                        </div>

                                        <div class="col-sm-6 col-lg-6 inlineformmargin">

                                            <label>
                                                Date of Birth
                                                <input type="date" class="form-control" name="birth_date"  value="<?php echo $user_details->birth_date; ?>">
                                            </label>
                                        </div>


                                        <div class="col-sm-6 col-lg-6" style="padding-top: 20px;">

                                            <button name="update_profile" type="submit" class="btn btn-danger">Update Profile</button>
                                        </div>


                                        <div style="clear: both"></div>

                                    </ul>
                                </form>
                                
                                <div class="col-md-12 -title title">
                                <h3 class="col-xs-12 metro-title">                                
                                    <a href="#." class="changepassword"  data-toggle="modal" data-target="#changePassword" style="    color: #000;
                                       font-size: 13px;
                                       "><i class="fa fa-refresh"></i> Change Password</a>
                                </h3>
                            </div> 
                            </div>


                            <hr/>
                             




                        </div>
                    </div>



                </div>
                </section>
            </div>
            <!-- End Content --> 


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal  fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
                <div class="modal-dialog modal-sm woocommerce" role="document" style="width: 300px">
                    <form action="#" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Change Password</h4>
                            </div>
                            <div class="modal-body checkout-form ">

                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    Old Password
                                    <input type="text" name="old_password"  value="" class=" form-control">
                                </label>

                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    New Password
                                    <input type="text" name="new_password"  value="" class=" form-control">
                                </label>
                                <br/>
                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    Confirm Password
                                    <input type="text" name="re_password"  value="" class=" form-control">
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <?php
            $this->load->view('layout/footer');
            ?>
            <script>
                $(function () {
                    $(".woocommerce-MyAccount-navigation-divnk--dashboard").removeClass("active");
                    $(".profile_page").addClass("active");
                })
            </script>