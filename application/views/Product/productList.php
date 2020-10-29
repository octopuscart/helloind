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

    .productelement .btn-warning{
        background: #d20404;
        border-radius: 10px;
    }
    .iportfolio{
        padding: 10px;
        background: #fff;
        border-radius: 15px;
    }

    .iportfolio .producttitle{
        font-size: 16px; 
        margin-bottom: 13px;
        float: left;
        width: 100%;
        color: #ff9800;
    }

</style>

<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner" style="background-position: center;">
        <!-- Container -->
        <div class="container">
            <h3>ORDER NOW</h3>
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
                            foreach ($categories as $catkey => $catvalue) {
                                ?>
                                <li role="presentation" class="menuitem <?php echo $catkey == 0 ? 'active' : '' ?>"><a class="stylefont-Merienda" href="#hellomenu<?php echo $catkey; ?>" role="tab" data-toggle="tab" aria-controls="hellomenu<?php echo $catkey; ?>" ><?php echo $catvalue['category_name']; ?><br/>
                                        <small><?php echo $catvalue['description']; ?></small></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-9 menumarginpadding0 menucontainer">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?php
                            foreach ($categories as $catkey => $catvalue) {
                                ?>

                                <div role="tabpanel" class="tab-pane <?php echo $catkey == 0 ? 'active' : '' ?>" id="hellomenu<?php echo $catkey; ?>">
                                    <h2 class="stylefont-Kaushan whilecolor" style='margin: 20px;
                                        text-align: center;'>
                                        <?php echo $catvalue['category_name']; ?><br/>
                                        <?php echo $catvalue['description']; ?>
                                    </h2>
                                    <?php
                                    $categoryproducts = $productlist[$catvalue['id']];
                                    foreach ($categoryproducts as $prkey => $prvalue) {
                                        ?>

                                        <div class="col-lg-4 col-md-6 productelement"  style="padding: 10px">
                                            <div class="iportfolio mb-4 clearfix" style="">

                                                <a href="#"  class="portfolio-image12">
                                                    <img src="<?php echo PRODUCTIMAGELINK . "default.png"; ?>" style="background: url(<?php echo PRODUCTIMAGELINK . $prvalue['file_name']; ?>);    background-size: cover;
                                                         background-position: center;
                                                         border-radius: 15px;" alt="1" class="rounded product-image-back">
                                                </a>

                                                <div class="portfolio-desc pt-2">
                                                    <h4 class="mb-1" style="    height: 99px;">
                                                        <a href="#" class="stylefont-Merienda producttitle" 
                                                           style=""><?php echo $prvalue['title']; ?></a><br/><?php echo $prvalue['short_description']; ?></h4>
                                                    <div class="item-price stylefont-Merienda">{{<?php echo $prvalue['price']; ?>|currency:"<?php echo globle_currency; ?> "}}</div>
                                                </div>
                                                <div class="" style="    margin-top: 12px;">
                                                    <button class="button btn btn-warning" ng-click="addToCart(<?php echo $prvalue['id']; ?>, 1)">
                                                        Add To Cart
                                                    </button>

                                                    <button  class="button btn btn-warning " ng-click="addToBuy(<?php echo $prvalue['id']; ?>, 1)" style="    float: right;">
                                                        Buy Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>


                                </div>

                                <?php
                            }
                            ?>
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
                            <h3 class="menutext"><?php echo $gkey; ?></h3>
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