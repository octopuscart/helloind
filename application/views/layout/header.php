<!doctype html>
<html class="no-js" lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        meta_tags();
        ?>


        <!---- Library - Google Font Familys-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|PT+Serif:400,400i,700,700i|Poppins:300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 


        <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/revolution/css/settings.css">

        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/revolution/css/navigation.css">


        <!-- Library - Bootstrap v3.3.5 -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/libraries/lib.css">

        <!-- Custom - Theme CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/css/plugins.css">			
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/css/navigation-menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/css/shortcode.css">

        <!--[if lt IE 9]>
                <script src="js/html5/respond.min.js"></script>
    <![endif]-->

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.css">

        <script src="<?php echo base_url(); ?>assets/theme2/angular/angular.min.js"></script>

        <link href="<?php echo base_url(); ?>assets/theme2/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/customstyle.css">

        <style>
            /* Page Loader CSS */
            .css3-spinner:before,.pizza .slice:after,.pizza .slice:before{content:''}.css3-spinner{height:100vh;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:#FFF}.css3-spinner:before{position:absolute;top:50%;left:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);width:15vmin;height:2vmin;background:#DDD;margin-top:17.5vmin;-webkit-filter:blur(10px);filter:blur(10px);border-radius:100%}.pizza{height:20vmin;width:20vmin;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background:0 0;position:relative;-webkit-animation:rotate 13s linear infinite;animation:rotate 13s linear infinite}@-webkit-keyframes rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.pizza .slice{z-index:-1;overflow:visible;position:absolute;width:0;height:0;border-style:solid;border-width:10vmin 2.75vmin 0;border-color:#ffdc73 transparent transparent;left:7.5vmin;top:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:rotate(0);transform:rotate(0);-webkit-animation:loading 1.8125s ease-in-out infinite;animation:loading 1.8125s ease-in-out infinite}@-webkit-keyframes loading{0%,100%,49%{opacity:1}50%,99%{opacity:0}}@keyframes loading{0%,100%,49%{opacity:1}50%,99%{opacity:0}}.pizza .slice:nth-of-type(2n):after{box-shadow:.5vmin 2.5vmin 0 #cc333f}.pizza .slice:nth-of-type(4n):after{box-shadow:.5vmin 2.5vmin 0 #cc333f,1.5vmin 5vmin 0 #cc333f}.pizza .slice:nth-of-type(1){-webkit-transform:rotate(-27.75deg);transform:rotate(-27.75deg);-webkit-animation-delay:-62.5ms;animation-delay:-62.5ms}.pizza .slice:nth-of-type(2){-webkit-transform:rotate(-55.5deg);transform:rotate(-55.5deg);-webkit-animation-delay:-125ms;animation-delay:-125ms}.pizza .slice:nth-of-type(3){-webkit-transform:rotate(-83.25deg);transform:rotate(-83.25deg);-webkit-animation-delay:-.1875s;animation-delay:-.1875s}.pizza .slice:nth-of-type(4){-webkit-transform:rotate(-111deg);transform:rotate(-111deg);-webkit-animation-delay:-.25s;animation-delay:-.25s}.pizza .slice:nth-of-type(5){-webkit-transform:rotate(-138.75deg);transform:rotate(-138.75deg);-webkit-animation-delay:-.3125s;animation-delay:-.3125s}.pizza .slice:nth-of-type(6){-webkit-transform:rotate(-166.5deg);transform:rotate(-166.5deg);-webkit-animation-delay:-375ms;animation-delay:-375ms}.pizza .slice:nth-of-type(7){-webkit-transform:rotate(-194.25deg);transform:rotate(-194.25deg);-webkit-animation-delay:-.4375s;animation-delay:-.4375s}.pizza .slice:nth-of-type(8){-webkit-transform:rotate(-222deg);transform:rotate(-222deg);-webkit-animation-delay:-.5s;animation-delay:-.5s}.pizza .slice:nth-of-type(9){-webkit-transform:rotate(-249.75deg);transform:rotate(-249.75deg);-webkit-animation-delay:-.5625s;animation-delay:-.5625s}.pizza .slice:nth-of-type(10){-webkit-transform:rotate(-277.5deg);transform:rotate(-277.5deg);-webkit-animation-delay:-625ms;animation-delay:-625ms}.pizza .slice:nth-of-type(11){-webkit-transform:rotate(-305.25deg);transform:rotate(-305.25deg);-webkit-animation-delay:-.6875s;animation-delay:-.6875s}.pizza .slice:nth-of-type(12){-webkit-transform:rotate(-333deg);transform:rotate(-333deg);-webkit-animation-delay:-.75s;animation-delay:-.75s}.pizza .slice:before{position:absolute;height:1.5vmin;width:6vmin;background:#bbb083;top:-10.5vmin;left:-3vmin;border-radius:100vmin 100vmin .5vmin .5vmin/50vmin}.pizza .slice:after{border-radius:100%;position:absolute;width:1.25vmin;height:1.25vmin;background:#cc333f;left:-1vmin;top:-7vmin;z-index:2}
        </style>

        <!-- Facebook Pixel Code -->
        <script>
            !function(f, b, e, v, n, t, s)
            {if (f.fbq)return; n = f.fbq = function(){n.callMethod?
                    n.callMethod.apply(n, arguments):n.queue.push(arguments)};
            if (!f._fbq)f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)}(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '3333631616861831');
            fbq('track', 'PageView');
        </script>
        <noscript>
    <img height="1" width="1" 
         src="https://www.facebook.com/tr?id=3333631616861831&ev=PageView
         &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<style>
    .cart-budget{
        margin-top: -8px;
    position: absolute;
    background: red;
    color: white;
    width: 20px;
    text-align: center;
    border-radius: 50%;
    font-size: 10px;
    height: 20px;
    }
</style>

<body ng-app="App" class="stretched sticky-footer" data-offset="200" data-spy="scroll" data-target=".ow-navigation">



    <div class="main-container" ng-controller="ShopController" id="ShopController">
        <!-- Loader -->
        <div id="site-loader" class="load-complete">
            <div class="loader">
                <div class="loader-inner ball-clip-rotate">
                    <div></div>
                </div>
            </div>
        </div><!-- Loader /- -->

        <script>


            var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
            //$interpolateProvider.startSymbol('{$');
            //$interpolateProvider.endSymbol('$}');
            $httpProvider.defaults.headers.common = {};
            $httpProvider.defaults.headers.post = {};
            });
            var baseurl = "<?php echo site_url(); ?>";
            var imageurlg = "<?php echo PRODUCTIMAGELINK; ?>";
            var globlecurrency = "<?php echo globle_currency; ?>";
            var avaiblecredits = 0;</script>



        <header id="header" class="header-section container-fluid no-padding">
            <!-- Top Header -->
            <div class="top-header container-fluid no-padding">
                <div class="col-md-4 col-sm-12 col-xs-12 ">

                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 top-content no-padding">
                    <a href="tel:+852 2367 7489"><i class="fa fa-phone"></i><b>+(852) 2367 7489</b></a>

                    <div class="top-icons">

                        <h5><span>OPENING HOURS:</span> MONDAY - SUNDAY: 12:00PM TO 03.00PM & 06:00PM TO 11:00PM</h5>
                    </div>
                </div>

            </div>

            <!-- Top Header /- -->
            <!-- Container -->
            <div class="container">		
                <!-- nav -->
                <nav class="navbar navbar-default ow-navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo site_url("/"); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" /></a>
                    </div>
                    <!-- Menu Icon -->
                    <div class="menu-icon">

                    </div><!-- Menu Icon /- -->
                    <div class="navbar-collapse collapse navbar-right" id="navbar">
                        <ul class="nav navbar-nav">

                            <li><a href="<?php echo site_url("about-us"); ?>" title="About">INSIGHTS</a></li>
                            <li><a href="<?php echo site_url("gallery"); ?>" title="Gallery">GALLERY</a></li>

                            <li class="dropdown">
                                <a href="" title="EVENTS" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">MEMBERSHIP</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">				
                                    <li><a href="" title="Club Member">CLUB MEMBER</a></li>
                                    <li><a href="" title="About">LOYALTY PROGRAM </a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url("menu/0/0"); ?>" title="Order Now">ORDER NOW</a></li>
                            <li><a href="<?php echo site_url("book-now"); ?>" title="Book Now">BOOK NOW</a></li>
                            <li><a href="<?php echo site_url("book-cake"); ?>" title="Book Now">BOOK CAKE</a></li>
                            <li><a href="<?php echo site_url("contact"); ?>" title="Contact Us">CONTACT US</a></li>
                            <li>
                                <a href="<?php echo site_url("cart") ?>" class="cartheadericon">
                                    <i class="fa fa-shopping-cart" style="    font-size: 20px;"></i><span class="cart-budget">{{globleCartData.total_quantity}}</span>
                                </a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav><!-- nav /- -->
                <!-- Search Box -->
                <div class="search-box">
                    <span><i class="icon_close"></i></span>
                    <form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
                </div><!-- Search Box /- -->
            </div><!-- Container /- -->		
        </header><!-- Header Section /- -->





