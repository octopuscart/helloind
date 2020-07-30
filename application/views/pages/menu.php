<?php
$this->load->view('layout/header');
?>
<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background-position: center;">
        <!-- Container -->
        <div class="container">
            <h3>MENU</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Portfolio Section -->
    <div class="container-fluid no-padding portfolio-section" style="padding: 0px;">
        <!-- Container -->
        <div class="container">

            <div class="portfolio-list">
                <div class="row">

                    <div class="col-md-3 menumarginpadding0">

                        <ul class="nav nav-pills menuitem-group" role="tablist">
                            <?php
                            $menuarray = array(
                                "starters" => array("title" => "Starters", "images" => ['starters1.jpg', 'starters2.jpg']),
                                "soups" => array("title" => "Soups", "images" => ['soups.jpg']),
                                "salads-sides" => array("title" => "Salads & Sides", "images" => ['salads-sides.jpg']),
                                "tandoori" => array("title" => "Tandoori", "images" => ['tandoori1.jpg', 'tandoori2.jpg']),
                                "chicken-curries" => array("title" => "Chicken Curries", "images" => ['chicken-curries.jpg']),
                                "lamb-curries" => array("title" => "Lamb Curries", "images" => ['lamb-curries.jpg']),
                                "sea-food-curries" => array("title" => "Sea Food Curries", "images" => ['sea-food-currie.jpg']),
                                "veg-curries" => array("title" => "Veg Curries", "images" => ['veg-curries1.jpg', 'veg-curries2.jpg', 'veg-curries3.jpg']),
                                "egg-curries" => array("title" => "Egg Curries", "images" => ['egg-curries.jpg']),
                                "rice-specialities" => array("title" => "Rice Specialities", "images" => ['rice-specialities1.jpg', 'rice-specialities2.jpg']),
                                "kids-menu" => array("title" => "Kids Menu", "images" => ['kiddmeanu.jpg']),
                                "breads" => array("title" => "Breads", "images" => ['breads1.jpg', 'breads2.jpg']),
                                "desserts" => array("title" => "Desserts", "images" => ['desserts.jpg']),
                                "beverages" => array("title" => "Beverages", "images" => ['beverages.jpg']),
                            );
                            foreach ($menuarray as $key => $value) {
                                ?>
                                <li role="presentation" class="menuitem <?php echo $activemenu == $key ? 'active' : '' ?>"><a class="stylefont-Merienda" href="<?php echo site_url("our-menu/" . $key); ?>" aria-controls="<?php echo $key; ?>" ><?php echo $value['title']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-9 menumarginpadding0 menucontainer">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?php
                            $activemenuitem = $menuarray[$activemenu];
                            ?>

                            <div role="tabpanel" class="tab-pane active" id="<?php echo $activemenu; ?>">
                                <h2 class="stylefont-Kaushan whilecolor">
                                    <?php echo $activemenuitem['title']; ?>
                                </h2>

                                <div id="<?php echo $activemenu; ?>generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <?php
                                        foreach ($activemenuitem['images'] as $key => $value) {
                                            ?>
                                            <li data-target="#<?php echo $activemenu; ?>generic" data-slide-to="0" class="<?php echo $key == 0?'active':'';?>"></li>
                                            <?php
                                        }
                                        ?>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php
                                        foreach ($activemenuitem['images'] as $key => $value) {
                                            ?>
                                        <div class="item <?php echo $key == 0?'active':'';?> text-center menuimagecontainer" >
                                            <img src="<?php echo base_url(); ?>assets/menu/<?php echo $activemenu .'/'.  $value;?>" alt="...">
                                            <div class="carousel-caption">
                                                ...
                                            </div>
                                        </div>
                                         <?php
                                        }
                                        ?>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#<?php echo $activemenu; ?>generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#<?php echo $activemenu; ?>generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="padding-80"></div>

        </div><!-- Portfolio Section /- -->
        <div class="section-padding"></div>
</main>


<?php
$this->load->view('layout/footer');
?>