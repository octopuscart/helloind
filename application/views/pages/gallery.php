<?php
$this->load->view('layout/header');
?>
<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background-position: center;">
        <!-- Container -->
        <div class="container">
            <h3>gallery</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Portfolio Section -->
    <div class="container-fluid no-padding portfolio-section" style="padding: 0px;">
        <!-- Container -->
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding portfolio-categories" >
                <ul id="filters">
                    <li><a data-filter="*" class="active" href="#">ALL</a></li>
                    <li><a data-filter=".culture" href="#">CULTURE </a></li>
                    <li><a data-filter=".restaurant" href="#">RESTAURANT </a></li>
                    <li><a data-filter=".party" href="#">PARTY</a></li>
                    <li><a data-filter=".others" href="#">OTHERS</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
        <div class="portfolio-list">
            <?php
            $loopgallery = array(
                "culture" => ["1.jpg", "2.jpg", "4.jpg", "8.jpg", "9.jpg", "14.jpg", "16.jpg", "17.jpg",
                    "new/IMG_3429.jpg",
                    "new/IMG_3435.jpg",
                    "new/IMG_3437.jpg",
                    "new/IMG_4170.jpg",
                    "new/IMG_4172.jpg",
                    "new/IMG_4173.jpg",
                    "new/IMG_4174.jpg"
                ],
                "restaurant" => ["5.jpg", "6.jpg", "7.jpg", "10.jpg", "11.jpg", "13.jpg", "15.jpg", "18.jpg",
                    "new/IMG_3393.jpg",
                    "new/IMG_3395.jpg",
                    "new/IMG_3411.jpg",
                    "new/IMG_3426.jpg",
                    "new/IMG_4171.jpg"],
                "party" => ["19.jpg", "20.jpg", "21.jpg", "22.jpg"],
                "others" => ["23.jpg", "24.jpg"],
            );
            foreach ($loopgallery as $gkey => $gvalue) {
                $classg = $gkey;
                foreach ($gvalue as $key => $value) {
                    ?>
                    <div class="portfolio-box col-md-3  col-sm-3 no-padding <?php echo $classg; ?> statue">
                        <a href="<?php echo base_url(); ?>assets/gallery/<?php echo $value; ?>">
                            <img src="<?php echo base_url(); ?>assets/gallery/<?php echo $value; ?>" alt="Portfolio" />
                            <div class="portfolio-content">
                                <i class="icon icon-Search"></i>

                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>



        </div>
        <div class="padding-80"></div>

    </div><!-- Portfolio Section /- -->
    <div class="section-padding"></div>
</main>


<?php
$this->load->view('layout/footer');
?>