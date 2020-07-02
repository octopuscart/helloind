<?php
$this->load->view('layout/header');
?>
<main>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner">
        <!-- Container -->
        <div class="container">
            <h3>gallery</h3>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Portfolio Section -->
    <div class="container-fluid no-padding portfolio-section">
        <!-- Container -->
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding portfolio-categories">
                <ul id="filters">
                    <li><a data-filter="*" class="active" href="#">ALL</a></li>
                    <li><a data-filter=".modern" href="#">MODERN ART</a></li>
                    <li><a data-filter=".vintage" href="#">VINTAGE ART</a></li>
                    <li><a data-filter=".statue" href="#">ANCIENT STATUE</a></li>
                    <li><a data-filter=".others" href="#">OTHERS</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
        <div class="portfolio-list">
            <div class="portfolio-box col-md-6 col-sm-6 no-padding modern statue">
                <a href="images/portfolio-1.jpg">
                    <img src="images/portfolio-1.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding vintage">
                <a href="images/portfolio-2.jpg">
                    <img src="images/portfolio-2.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding statue others">
                <a href="images/portfolio-3.jpg">
                    <img src="images/portfolio-3.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding others">
                <a href="images/portfolio-4.jpg">
                    <img src="images/portfolio-4.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding modern">
                <a href="images/portfolio-5.jpg">
                    <img src="images/portfolio-5.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-6 col-sm-6 no-padding vintage modern">
                <a href="images/portfolio-6.jpg">
                    <img src="images/portfolio-6.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding vintage">
                <a href="images/portfolio-7.jpg">
                    <img src="images/portfolio-7.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding statue others">
                <a href="images/portfolio-8.jpg">
                    <img src="images/portfolio-8.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding others">
                <a href="images/portfolio-9.jpg">
                    <img src="images/portfolio-9.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-box col-md-3 col-sm-3 no-padding modern">
                <a href="images/portfolio-10.jpg">
                    <img src="images/portfolio-10.jpg" alt="Portfolio" />
                    <div class="portfolio-content">
                        <i class="icon icon-Search"></i>
                        <h3>spral cloud</h3>
                        <span>Photography</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="padding-80"></div>
       
    </div><!-- Portfolio Section /- -->
    <div class="section-padding"></div>
</main>


<?php
$this->load->view('layout/footer');
?>