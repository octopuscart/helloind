<?php
$this->load->view('layout/header');
?>
<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background: url('<?php echo base_url(); ?>assets/gallery/4.jpg');background-position: center;">
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
                    <li><a data-filter=".hotel" href="#">HOTEL </a></li>
                    <li><a data-filter=".party" href="#">PARTY</a></li>
                    <li><a data-filter=".others" href="#">OTHERS</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
        <div class="portfolio-list">
            <?php
            $loopgallery = array(
                "culture" => [1, 2, 4, 8, 9, 14, 16, 17],
                "hotel" => [5, 6, 7, 10, 11, 13, 15, 18],
                "party" => [19, 20, 21, 22],
                "others" => [23, 24],
            );
            foreach ($loopgallery as $gkey => $gvalue) {
                $classg = $gkey;
                foreach ($gvalue as $key => $value) {
                    ?>
                    <div class="portfolio-box col-md-3  col-sm-3 no-padding <?php echo $classg;?> statue">
                        <a href="<?php echo base_url(); ?>assets/gallery/<?php echo $value;?>.jpg">
                            <img src="<?php echo base_url(); ?>assets/gallery/<?php echo $value;?>.jpg" alt="Portfolio" />
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