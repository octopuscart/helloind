<?php
$this->load->view('layout/header');
$linksimage = array(
    "cul1.jpg" => "https://en.wikipedia.org/wiki/Culture_of_India",
    "cul2.jpg" => "https://en.wikipedia.org/wiki/Culture_of_India",
    "2.jpg" => "https://en.wikipedia.org/wiki/Bollywood",
    "new/IMG_3395.jpg" => "https://en.wikipedia.org/wiki/Bollywood",
    "taj.jpg" => "https://en.wikipedia.org/wiki/Taj_Mahal",
    "bolly1.jpg"=> "https://en.wikipedia.org/wiki/Bollywood",
     "hawa.jpg"=>"https://en.wikipedia.org/wiki/Hawa_Mahal",
     "art1.jpg"=>"https://en.wikipedia.org/wiki/Kathakali",
    "art2.jpg"=>"https://en.wikipedia.org/wiki/Dandiya_Raas",
    "ls1.jpg"=>"https://www.britannica.com/place/India/Daily-life-and-social-customs",
    "ls2.jpg"=>"https://www.britannica.com/place/India/Daily-life-and-social-customs",
);
?>
<style>
    .knowmorebutton{
        background: red;
        color: white;
        width: fit-content;
        padding: 0px 5px;
    }
</style>
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
                    <li><a data-filter=".architecture" href="#">Architecture </a></li>
                    <li><a data-filter=".art_forms" href="#">Art Forms</a></li>
                    <li><a data-filter=".bollywood" href="#">Bollywood</a></li>
                    <li><a data-filter=".culture" href="#">Culture</a></li>
                    <li><a data-filter=".lifesyle" href="#">Lifestyle</a></li>
                    <li><a data-filter=".other" href="#">Other</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
        <div class="portfolio-list">
            <?php
            $loopgallery = array(
                "architecture" => [
                    "taj.jpg",
                    "hawa.jpg",
                    "4.jpg",
                    
                ],
                "art_forms" => [
                    "art1.jpg",
                    "art2.jpg",
                    "14.jpg",
                    "8.jpg",
                    "9.jpg",
                    "new/IMG_3437.jpg",
                    "new/IMG_4173.jpg",
                    "20.jpg",
                ],
                "bollywood" => [
                    "bolly1.jpg",
                    "2.jpg",
                    "new/IMG_3395.jpg",
                ],
                "culture" => [
                    "cul1.jpg",
                    "cul2.jpg",
                ],
                "lifesyle"=>[
                    "ls1.jpg",
                    "ls2.jpg",
                ],
                "other" => [
                    "1.jpg",
                    "16.jpg",
                    "17.jpg",
                    "new/IMG_3429.jpg",
                    "new/IMG_3435.jpg",
                    "new/IMG_4170.jpg",
                    "new/IMG_4172.jpg",
                    "new/IMG_4174.jpg",
                    "5.jpg",
                    "6.jpg",
                    "7.jpg",
                    "10.jpg",
                    "11.jpg",
                    "13.jpg",
                    "15.jpg",
                    "18.jpg",
                    "new/IMG_3393.jpg",
                    "new/IMG_3411.jpg",
                    "new/IMG_3426.jpg",
                    "new/IMG_4171.jpg",
                    "19.jpg", "21.jpg", "22.jpg",
                    "23.jpg", "24.jpg"],
            );
            foreach ($loopgallery as $gkey => $gvalue) {
                $classg = $gkey;
                foreach ($gvalue as $key => $value) {
                    ?>
                    <div class="portfolio-box col-md-3  col-sm-3 no-padding <?php echo $classg; ?> statue" style="padding:10px;">
                        <span href="<?php echo base_url(); ?>assets/gallery/<?php echo $value; ?>">
                            <img src="<?php echo base_url(); ?>assets/gallery/<?php echo $value; ?>" alt="Portfolio" />
                            <div class="portfolio-content">
                                <i class="icon icon-Search"></i>

                            </div>

                        </span>
                        <?php
                        if (isset($linksimage[$value])) {
                            ?>
                            <p>
                                <a class="knowmorebutton" href="<?php echo $linksimage[$value]; ?>" target="_blank">Know More</a></p>
                            <?php
                        } else {
                            echo "<p>&nbsp;</p>";
                        }
                        ?>

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