<!--media links-->
<div class="clearfix " style="background:url(<?php echo base_url(); ?>assets/theme2/res/images/vegbackground.jpg);background-size: contain;">


    <div class=" clearfix" >
        <div class="medialinkdesing">

            <div class="medialinkdesing-slider">
                <div id="oc-clients" class="owl-carousel " data-margin="0" data-loop="true" data-nav="true" data-autoplay="5000" data-pagi="false"  data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

                    <?php
                    $querymedialink = $this->db->get("media_link");
                    $querymedialinkresult = $querymedialink->result_array();


                    $medialink = $querymedialinkresult;

                    foreach ($medialink as $key => $value) {
                        ?>
                        <div class="oc-item ">
                            <div class="media-item-block">
                                <p><?php echo $value['text']; ?></p>
                                <h3 class="" >
                                    <?php echo $value['source']; ?>
                                </h3>
                                <a class="" href="<?php echo $value['link']; ?>" target="_blank">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Footer Section -->
<footer class="footer-main container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <!-- Widget About -->
                <aside class="ftr-widget widget_about">
                    <a title="Logo" href="index.html" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/images/logo.png" style="height: 90px" alt="logo" /></a>
                    <p>Indian cuisine consists of a variety of regional and traditional cuisines native to the Indian subcontinent.</p>
                    <ul>
                        <li><a href="#" title="Facebbok"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </aside><!-- Widget About /- -->	
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <!-- Widget Link -->
                <aside class="ftr-widget widget_link">
                    <h3 class="widget-title">INFORMATION</h3>
                    <ul>
                        <li class="col-md-6 col-sm-6 col-xs-6"><a href="<?php echo site_url("about-us"); ?>" title="INSIGHTS">INSIGHTS</a></li>
                        <li class="col-md-6 col-sm-6 col-xs-6"><a href="#" title="GALLERY">GALLERY</a></li>
                        <li class="col-md-6 col-sm-6 col-xs-6"><a href="#" title="LOYALTY PROGRAM">MEMBERSHIP</a></li>
                        <li class="col-md-6 col-sm-6 col-xs-6"><a href="#" title="ORDER NOW">ORDER NOW</a></li>
                        <li class="col-md-6 col-sm-6 col-xs-6"><a href="<?php echo site_url("contact"); ?>" title="CONTACT US">CONTACT US</a></li>
                    </ul>
                </aside><!-- Widget Link /- -->
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <!-- Widget Link -->
                <aside class="ftr-widget widget_link">
                    <h3 class="widget-title">resources</h3>
                    <ul>
                        <li><a href="#" title="Terms of Use">TERMS OF USE</a></li>
                        <li><a href="#" title="Privacy Policy">PRIVACY POLICY</a></li>
                        <li><a href="#" title="Sitemaps">SITEMAPS</a></li>
                    </ul>
                </aside><!-- Widget Link /- -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <!-- Widget Link -->
                <aside class="ftr-widget widget_subscribe">
                    <h3 class="widget-title">newsletter</h3>
                    <input type="text" class="form-control" placeholder="Your Email id">
                    <button type="button" title="Subcribe" class="btn btn-default">Subcribe</button>
                </aside><!-- Widget Link /- -->
            </div>
        </div>
    </div><!-- Container /- -->

    <!-- Copyright -->
    <div class="container-fluid no-padding copyright">
        <p>copyrights <i class="fa fa-copyright"></i> <?php echo date("Y"); ?>. all rights reserved</p>
    </div><!-- Copyright /- -->
</footer><!-- Footer Section /- -->

</div>

<!-- JQuery v1.12.4 -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery-1.12.4.min.js"></script>

<!-- Library - Js -->
<script src="<?php echo base_url(); ?>assets/theme2/libraries/lib.js"></script>

<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme2/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme2/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme2/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme2/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme2/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme2/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<!-- Library - Theme JS -->
<script src="<?php echo base_url(); ?>assets/theme2/js/functions.js"></script>
<script src="<?php echo base_url(); ?>assets/theme2/angular/shopController.js"></script>
<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>assets/theme2/OwlCarousel2-2.3.4/owl.carousel.min.js" type="text/javascript"></script>

</body>
<script type="text/javascript">
    (function () {

        $('#oc-clients').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: 1,
            autoplayTimeout: 3000,
  responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
        });

        var options = {
            whatsapp: "85292407071", // WhatsApp number
            call_to_action: "Contact Us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>-
</html>