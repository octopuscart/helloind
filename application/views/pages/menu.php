<?php
$this->load->view('layout/header');
?>
<style>
    .col-sm-20{
        width:10%;
        float: left;
    }

    .margin-top-50{
        float:left;
        width: 100%;
        height: 50px;
    }
    
    .menutext{
          font-size: 17px;
    color: white;
    background: #000;
    margin: 0;
    padding: 5px;
  
    text-align: center;
    height: 56px;
    border: 1px solid #424242;
    font-weight: 100!important;

    }
</style>

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
                <div class="row" style='border: 1px solid #ff9800;
                     padding: 10px;
                     border-radius: 25px;'>

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
                                <h2 class="stylefont-Kaushan whilecolor" style='margin: 20px;
                                    text-align: center;'>
                                    <?php echo $activemenuitem['title']; ?>
                                </h2>

                                <div id="<?php echo $activemenu; ?>generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <?php
                                        foreach ($activemenuitem['images'] as $key => $value) {
                                            ?>
                                            <li data-target="#<?php echo $activemenu; ?>generic" data-slide-to="0" class="<?php echo $key == 0 ? 'active' : ''; ?>"></li>
                                            <?php
                                        }
                                        ?>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php
                                        foreach ($activemenuitem['images'] as $key => $value) {
                                            ?>
                                            <div class="item <?php echo $key == 0 ? 'active' : ''; ?> text-center menuimagecontainer" >
                                                <img src="<?php echo base_url(); ?>assets/menu/<?php echo $activemenu . '/' . $value; ?>" alt="...">
                                                <div class="carousel-caption">
                                                    ...
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                    <?php
                                    if (count($activemenuitem['images']) > 1) {
                                        ?>
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#<?php echo $activemenu; ?>generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#<?php echo $activemenu; ?>generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="margin-top-50"></div>
            <?php
            $itemsimages = array(
                'Aloo Gobi' => 'AlooGobi.jpg',
                'Butter Chicken' => 'ButterChicken.jpg',
                'Chicken Tikka' => 'ChickenTikka.jpg',
                'Garlic Naan' => 'GarlicNaan.jpg',
                'Kashmiri Naan' => 'KashmiriNaan.jpg',
                'Lacha Paratha' => 'LachaParatha.jpg',
                'Lamb Chop' => 'LambChop.jpg',
                'Lamb Rogan Josh' => 'LambRoganJosh.jpg',
                'Onion Rings' => 'OnionRings.jpg',
                'Palak Paneer' => 'PalakPaneer.jpg',
                'Paneer Tikka' => 'PaneerTikka.jpg',
                'Pani Puri' => 'PaniPuri.jpg',
                'Prawn Vindaloo' => 'PrawnVindaloo.jpg',
                'Pulav Rice' => 'PulavRice.jpg',
                'Reshmi Kabab' => 'ReshmiKabab.jpg',
                'Sabzi Kadhai' => 'SabziKadhai.jpg',
                'Samosa' => 'Samosa.jpg',
                'Sheekh Kabab' => 'SheekhKabab.jpg',
                'Tandoori Chicken' => 'TandooriChicken.jpg',
                'Tandoori Prawns' => 'TandooriPrawns.jpg'
            );
            ?>

            <div class="portfolio-list2">
                <?php
                foreach ($itemsimages as $gkey => $gvalue) {
                    ?>
                    <div class="portfolio-box col-md-3 col-md-20  col-sm-20 no-padding  statue">
                        <a href="<?php echo base_url(); ?>assets/gallery/food/<?php echo $gvalue; ?>">
                            <img src="<?php echo base_url(); ?>assets/gallery/food/fooddefault.png" alt="Portfolio" style="background: url('<?php echo base_url(); ?>assets/gallery/food/<?php echo $gvalue; ?>');background-size: cover;background-position:center; " />
                            <div class="portfolio-content">
                                <i class="icon icon-Search"></i>

                            </div>
                            <h3 class="menutext"><?php echo $gkey;?></h3>
                        </a>
                    </div>
    <?php
}
?>




            </div><!-- Portfolio Section /- -->
            <div class="section-padding"></div>
            <div class="margin-top-50"></div>
            </main>


<?php
$this->load->view('layout/footer');
?>