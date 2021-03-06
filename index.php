<?php

function url(){

    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',

        $_SERVER['HTTP_HOST'],
        $_SERVER['REQUEST_URI']
    );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erasofts</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?=url() ?>assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?=url() ?>assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?=url() ?>assets/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="<?=url() ?>assets/css/fonts.css">
    <link type="text/css" rel="stylesheet" href="<?=url() ?>assets/css/slick.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?=url() ?>assets/images/apple-touch-icon-114x114.png">
    <link rel="shortcut icon" href="<?=url() ?>assets/images/apple-touch-icon-114x114.png" type="image/png">

</head>
<body>



<div class="top-section">
    <header>
        <div class="wrapper">
            <div class="row justify-content-between align-items-center no-gutters">
                <div class="header-blocks">
                    <img src="<?=url() ?>assets/images/LOGO-white.svg" alt="Erasofts" class="header-logo" >
                </div>
                <div class="header-blocks">
                    <ul class="list-unstyled list-group list-group-horizontal top-menu justify-content-end">
                        <li >
                            <a href="#our-services">Our Services</a>
                        </li>
                        <li>
                            <a href="#recent-projects">Recent Projects</a>
                        </li>
                        <li>
                            <a href="#contact-us">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div>
        <div class="wrapper">
            <div class="top-slider">
                <div>
                    <div class="text-cont">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <h2 class="4_text">
                                    <span class="single" style="transition-delay: 0.4s;">W</span>
                                    <span class="single" style="transition-delay: 0.45s;">e</span>
                                    <span class="single" style="transition-delay: 0.5s;margin-right: 30px">b</span>
                                    <span class="single" style="transition-delay: 0.55s;">D</span>
                                    <span class="single" style="transition-delay: 0.6s;">e</span>
                                    <span class="single" style="transition-delay: 0.65s;">v</span>
                                    <span class="single" style="transition-delay: 0.7s;">e</span>
                                    <span class="single" style="transition-delay: 0.75s;">l</span>
                                    <span class="single" style="transition-delay: 0.8s;">o</span>
                                    <span class="single" style="transition-delay: 0.85s;">p</span>
                                    <span class="single" style="transition-delay: 0.9s;">m</span>
                                    <span class="single" style="transition-delay: 0.95s;">e</span>
                                    <span class="single" style="transition-delay: 1s;">n</span>
                                    <span class="single" style="transition-delay: 1.05s;">t</span>
                                </h2>
                                <p>
                                    Inquest for strong-minded development team?<br>
                                    Here you are! We are willing to provide the development and unstoppable support for your website.<br>
                                    Our team provides invulnerable code with stunning interface and incredible mobile experience.
                                </p>
                                <a href="#contact-us" class="get-in-touch-btn">Get in touch</a>
                            </div>
                            <div class="col-md-7 col-sm-6"></div>
                        </div>
                    </div>

                    <div class="fp-section">
                        <div>
                            <div class="row ">
                                <div class="col-md-5 col-sm-6"></div>
                                <div class="col-md-7 col-sm-6">
                                    <img src="<?=url() ?>assets/images/topslide-2.png" alt="web development">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div>
                    <div class="text-cont">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <h2 class="4_text">
                                    <span class="single" style="transition-delay: 0.4s;">Q</span>
                                    <span class="single" style="transition-delay: 0.45s;margin-right: 30px">A</span>
                                    <span class="single" style="transition-delay: 0.5s;margin-right: 30px">&</span>
                                    <span class="single" style="transition-delay: 0.55s;">T</span>
                                    <span class="single" style="transition-delay: 0.6s;">e</span>
                                    <span class="single" style="transition-delay: 0.65s;">s</span>
                                    <span class="single" style="transition-delay: 0.7s;">t</span>
                                    <span class="single" style="transition-delay: 0.75s;">i</span>
                                    <span class="single" style="transition-delay: 0.8s;">n</span>
                                    <span class="single" style="transition-delay: 0.85s;">g</span>
                                </h2>
                                <p>
                                    Eager to be confident in the tech quality of your website? Keep in mind!
                                    Our QA group detects even the smallest and tiniest issues on your website. No drawback can be left unnoticeable.
                                </p>
                                <a href="#contact-us" class="get-in-touch-btn">Get in touch</a>
                            </div>
                            <div class="col-md-7 col-sm-6"></div>
                        </div>
                    </div>

                    <div class="fp-section">
                        <div>
                            <div class="row ">
                                <div class="col-md-5 col-sm-6"></div>
                                <div class="col-md-7 col-sm-6">
                                    <img src="<?=url() ?>assets/images/top-web-dev.png" alt="web development">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div>
                    <div class="text-cont">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <h2 class="4_text">
                                    <span class="single" style="transition-delay: 0.4s;">M</span>
                                    <span class="single" style="transition-delay: 0.45s;">a</span>
                                    <span class="single" style="transition-delay: 0.5s;">r</span>
                                    <span class="single" style="transition-delay: 0.55s;">k</span>
                                    <span class="single" style="transition-delay: 0.6s;">e</span>
                                    <span class="single" style="transition-delay: 0.65s;">t</span>
                                    <span class="single" style="transition-delay: 0.7s;">i</span>
                                    <span class="single" style="transition-delay: 0.75s;">n</span>
                                    <span class="single" style="transition-delay: 0.8s;">g</span>
                                </h2>
                                <p>
                                    We provide both back-end and front-end development. Our teams build web applications powewordpress by bulletproof code, with stunning interfaces based on responsive web design.
                                </p>
                                <a href="#contact-us" class="get-in-touch-btn">Get in touch</a>
                            </div>
                            <div class="col-md-7 col-sm-6"></div>
                        </div>
                    </div>

                    <div class="fp-section">
                        <div>
                            <div class="row ">
                                <div class="col-md-5 col-sm-6"></div>
                                <div class="col-md-7 col-sm-6">
                                    <img src="<?=url() ?>assets/images/topslide-3.png" alt="web development">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-section" id="our-services">
    <div class="wrapper">
        <div class="white-banner">
            <h2>Your Software to the new Era</h2>
        </div>
        <h2 class="text-center">Our Services</h2>
        <p class="text-center">It is a long established fact that a reader will be distracted
            by the readable content of</p>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="h100">
                    <div class="img-cont">
                        <img src="<?=url() ?>assets/images/development.svg"  alt="Development & Support">
                    </div>
                    <div>
                        <h3>Development & Support</h3>
                        <p>
                            Inquest for strong-minded development team?<br>
                            Here you are! We are willing to provide the development and unstoppable support for your website.<br>
                            Our team provides invulnerable code with stunning interface and incredible mobile experience.

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-12">
                <div class="h100">
                    <div class="img-cont">
                        <img src="<?=url() ?>assets/images/testing.svg"  alt="QA & Testing">
                    </div>
                    <div>
                        <h3>QA & Testing</h3>
                        <p>
                            Eager to be confident in the tech quality of your website? Keep in mind!
                            Our QA group detects even the smallest and tiniest issues on your website. No drawback can be left unnoticeable.

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-12">
                <div class="h100">
                    <div class="img-cont">
                        <img src="<?=url() ?>assets/images/marketing.svg"  alt="Marketing">
                    </div>
                    <div>
                        <h3>Marketing</h3>
                        <p>
                            Eager to be confident in the tech quality of your website? Keep in mind!
                            Our QA group detects even the smallest and tiniest issues on your website. No drawback can be left unnoticeable.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="recent-projects" id="recent-projects">
    <div class="wrapper">
        <h2 class="text-center">Recent Projects</h2>
        <div class="filter-content">
            <ul id="filters" class="list-unstyled d-flex">
                <li><a href="javascript:void (0)" data-filter="*" class="all-projects selected">All projects</a></li>
                <li><a href="javascript:void (0)" data-filter=".wordpress" >#wordpress</a></li>
                <li><a href="javascript:void (0)" data-filter=".magento">#magento</a></li>
                <li><a href="javascript:void (0)" data-filter=".laravel">#laravel</a></li>
                <li><a href="javascript:void (0)" data-filter=".shopify">#shopify</a></li>
                <li><a href="javascript:void (0)" data-filter=".webdesign">#webdesign</a></li>
                <li><a href="javascript:void (0)" data-filter=".codeigniter">#codeigniter</a></li>
                <li><a href="javascript:void (0)" data-filter=".drupal">#drupal</a></li>
                <li><a href="javascript:void (0)" data-filter=".joomla">#joomla</a></li>
                <li><a href="javascript:void (0)" data-filter=".opencart">#opencart</a></li>
                <li><a href="javascript:void (0)" data-filter=".prestashop">#prestashop</a></li>
                <li><a href="javascript:void (0)" data-filter=".woocommerce">#woocommerce</a></li>
                <li><a href="javascript:void (0)" data-filter=".nodejs">#nodejs</a></li>
                <li><a href="javascript:void (0)" data-filter=".reactjs">#reactjs</a></li>
                <li><a href="javascript:void (0)" data-filter=".vuejs">#vuejs</a></li>
                <li><a href="javascript:void (0)" data-filter=".angular">#angular</a></li>
    <!--            <li><a href="javascript:void (0)" data-filter=".magento, .laravel">magento and laravel</a></li>-->
            </ul>
            <div id="container">
                <div class="item wordpress webdesign">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/mikeRegina.png')"></div>
                        <div class="item-overlay">
                            <h2>Mike Regina</h2>
<!--                            <a href="https://www.mikeregina.io/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item laravel webdesign">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/mustangcpu.png')"></div>
                        <div class="item-overlay">
                            <h2>Mustang CPU</h2>
<!--                            <a href="https://www.mustangcpu.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Laravel</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/4x4.png')"></div>
                        <div class="item-overlay">
                            <h2>av4x4</h2>
<!--                            <a href="http://av4x4.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/bravethewoods.png')"></div>
                        <div class="item-overlay">
                            <h2>Brave the woods</h2>
<!--                            <a href="http://bravethewoods.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item laravel webdesign">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/valenzano-vine.png')"></div>
                        <div class="item-overlay">
                            <h2>Valenzano Wine</h2>
<!--                            <a href="http://158.106.138.242/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Laravel</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item magento">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/gooshoreca.png')"></div>
                        <div class="item-overlay">
                            <h2>Gooshoreca</h2>
<!--                            <a href="https://www.gooshoreca.nl/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Magento</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/big-sky.png')"></div>
                        <div class="item-overlay">
                            <h2>Big Sky LLC</h2>
<!--                            <a href="https://bigskyllc.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item magento">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/drunensruiterhuis.png')"></div>
                        <div class="item-overlay">
                            <h2>Drunens Ruiterhuis</h2>
<!--                            <a href="https://www.drunensruiterhuis.nl/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Magento</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item laravel webdesign">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/usbpi.png')"></div>
                        <div class="item-overlay">
                            <h2>U.S. Business P.I.</h2>
<!--                            <a href="https://usbpi.com" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Laravel</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item magento">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/horecaworld.png')"></div>
                        <div class="item-overlay">
                            <h2>Horeca World</h2>
<!--                            <a href="https://www.horecaworld.biz/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Magento</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/iba.png')"></div>
                        <div class="item-overlay">
                            <h2>IBA</h2>
<!--                            <a href="https://ibagroup.io/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item laravel">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/tutella.png')"></div>
                        <div class="item-overlay">
                            <h2>Tutella</h2>
<!--                            <a href="http://tutella.io/index.html" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Laravel</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress webdesign">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/epabinc.png')"></div>
                        <div class="item-overlay">
                            <h2>Epabinc</h2>
<!--                            <a href="https://epabinc.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/cfpc.png')"></div>
                        <div class="item-overlay">
                           <h2>Crossfit Portchester</h2>
<!--                            <a href="https://crossfitportchester.com/personal-training/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item wordpress">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/ecoact.png')"></div>
                        <div class="item-overlay">
                            <h2>Ecology Action</h2>
<!--                            <a href="https://ecoact.org/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Wordpress</span>
                                <span>#WebDesign</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item magento">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/gastrosteel.png')"></div>
                        <div class="item-overlay">
                            <h2>Gastrosteel</h2>
<!--                            <a href="https://www.gastrosteel.nl/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Magento</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item magento">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/drcomfort.png')"></div>
                        <div class="item-overlay">
                            <h2>Dr.Comfort</h2>
<!--                            <a href="https://www.drcomfort.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Magento</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item shopify">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/contornobelts.png')"></div>
                        <div class="item-overlay">
                            <h2>Contorno Belts</h2>
<!--                            <a href="https://contornobelts.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Shopify</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item magento">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/livingproof.png')"></div>
                        <div class="item-overlay">
                            <h2>Living proof</h2>
<!--                            <a href="https://www.livingproof.com/home" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Magento</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item shopify">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/lindsayletters.png')"></div>
                        <div class="item-overlay">
                            <h2>Lindsay Letters</h2>
<!--                            <a href="https://lindsayletters.co/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Shopify</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item shopify">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/concrete-matter.png')"></div>
                        <div class="item-overlay">
                            <h2>Concrete matter</h2>
<!--                            <a href="https://www.concrete-matter.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Shopify</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item codeigniter">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/HumHub.png')"></div>
                        <div class="item-overlay">
                            <h2>HumHub</h2>
<!--                            <a href="http://www.humhub.org/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Codeigniter</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item codeigniter">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/stay.png')"></div>
                        <div class="item-overlay">
                            <h2>Stay</h2>
<!--                            <a href="http://www.stay.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Codeigniter</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item drupal">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/campagnacenter.png')"></div>
                        <div class="item-overlay">
                            <h2>The Campagna Center</h2>
<!--                            <a href="http://www.campagnacenter.org/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Drupal</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item drupal">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/chathamhouse.png')"></div>
                        <div class="item-overlay">
                            <h2>Chatham House</h2>
<!--                            <a href="https://www.chathamhouse.org/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Drupal</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item drupal">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/crs.png')"></div>
                        <div class="item-overlay">
                            <h2>CRS</h2>
<!--                            <a href="https://crs.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Drupal</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item drupal">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/edukame.png')"></div>
                        <div class="item-overlay">
                            <h2>Edukame</h2>
<!--                            <a href="http://edukame.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Drupal</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item drupal">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/peer1.png')"></div>
                        <div class="item-overlay">
                            <h2>Aptum</h2>
<!--                            <a href="http://peer1.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Drupal</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="item joomla">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/joomla/guggenheim.png')"></div>
                        <div class="item-overlay">
                            <h2>Guggenheim</h2>
<!--                            <a href="http://www.guggenheim.org/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Joomla</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item joomla">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/joomla/thefashionspot.png')"></div>
                        <div class="item-overlay">
                            <h2>TFS</h2>
<!--                            <a href="http://www.thefashionspot.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Joomla</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item joomla">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/joomla/unric.png')"></div>
                        <div class="item-overlay">
                            <h2>UNRIC</h2>
<!--                            <a href="http://www.unric.org/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#Joomla</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item opencart">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/opencart/bocage.png')"></div>
                        <div class="item-overlay">
                            <h2>Bocage</h2>
<!--                            <a href="http://www.bocage.fr/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#OpenCart</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item opencart">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/opencart/calicocottage.png')"></div>
                        <div class="item-overlay">
                            <h2>Calico Cottage</h2>
<!--                            <a href="https://www.calicocottage.com/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#OpenCart</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item opencart">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/opencart/lumz.png')"></div>
                        <div class="item-overlay">
                            <h2>Lumz</h2>
<!--                            <a href="https://www.lumz.nl/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#OpenCart</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item opencart">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/opencart/t-shirtbox.png')"></div>
                        <div class="item-overlay">
                            <h2>T-shirtbox</h2>
<!--                            <a href="http://t-shirtbox.it/" target="_blank" class="view-website">Visit Website</a>-->
                            <div class="project-tags">
                                <span>#OpenCart</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item prestashop">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/prestashop/shoes.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Shoes</h2>
                            <a href="http://www.shoes.ma/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#PrestaShop</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item prestashop">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/prestashop/abiessence.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Abiessence</h2>
                            <a href="http://www.abiessence.com//" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#PrestaShop</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item prestashop">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/prestashop/kinousses.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Kinousses</h2>
                            <a href="http://www.kinousses.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#PrestaShop</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item prestashop">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/prestashop/snkrs.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Snkrs</h2>
                            <a href="http://www.snkrs.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#PrestaShop</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item prestashop">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/prestashop/timefy.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>timefy</h2>
                            <a href="http://www.timefy.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#PrestaShop</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item woocommerce">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/woocommerce/cupcake.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Cupcake Studio</h2>
                            <a href="http://cupcake.com.ua/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#WooCommerce</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item woocommerce">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/woocommerce/dineamic.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Dineamic</h2>
                            <a href="http://www.dineamic.com.au/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#WooCommerce</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item woocommerce">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/woocommerce/jhornig.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>J. Hornig</h2>
                            <a href="http://www.jhornig.at/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#WooCommerce</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item woocommerce">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/woocommerce/pickybars.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>PickyBars</h2>
                            <a href="http://pickybars.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#WooCommerce</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item woocommerce">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/woocommerce/porterandyork.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Porter & York</h2>
                            <a href="http://porterandyork.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#WooCommerce</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/1x.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>1x</h2>
                            <a href="https://1x.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/arlenerutenberg.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Arlene Rutenberg</h2>
                            <a href="https://www.arlenerutenberg.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/firusas.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Firusas</h2>
                            <a href="https://firusas.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/hiltonhyland.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Hilton & Hyland</h2>
                            <a href="https://www.hiltonhyland.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/jonathanradford.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Jonathan P. Radford</h2>
                            <a href="https://jonathanradford.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/metaview.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Metaview</h2>
                            <a href="https://metaview.eu/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/moscatello.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Moscatello</h2>
                            <a href="https://moscatello.it/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/node-nzbcloud.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>NZB Cloud</h2>
                            <a href="http://node.nzbcloud.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/oand3.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>O & 3</h2>
                            <a href="https://www.oand3.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/radiomilwaukee.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Radio Milwaukee</h2>
                            <a href="https://radiomilwaukee.org/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/soapmedia.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Soap Media</h2>
                            <a href="https://www.soapmedia.co.uk/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/staak.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Staak</h2>
                            <a href="https://www.staak.co.uk/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/tagpic.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Tagpic</h2>
                            <a href="https://tagpic.jp/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item nodejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/nodejs/yousign.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Yousign</h2>
                            <a href="https://yousign.com/en-uk" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#NodeJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/ab-finance.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>AB Finance</h2>
                            <a href="https://ab.finance/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/bang-olufsen.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Bang & Olufsen</h2>
                            <a href="https://www.bang-olufsen.com/en" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/boonsupply.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Boon Supply</h2>
                            <a href="https://www.boonsupply.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/camiloalvarez.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Camilo Alvarez</h2>
                            <a href="http://www.camiloalvarez.com/en/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/chobani.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Chobani</h2>
                            <a href="https://www.chobani.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/clearmotion.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Clear Motion</h2>
                            <a href="http://www.clearmotion.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/insideasiatours.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Inside Asia Tours</h2>
                            <a href="https://www.insideasiatours.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/invisionapp.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>InVision</h2>
                            <a href="https://www.invisionapp.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/lebonnet.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Le Bonnet</h2>
                            <a href="https://lebonnet.nl/en" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/makespacegroup.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>makespace</h2>
                            <a href="https://makespacegroup.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/moxy-studio.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Moxy Studio</h2>
                            <a href="https://moxy.studio/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/noodle.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Noodle</h2>
                            <a href="https://noodle.ai/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/sabcomeed.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Sabcomeed</h2>
                            <a href="https://sabcomeed.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item reactjs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/react/uber-design.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Uber</h2>
                            <a href="https://www.uber.design/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#ReactJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/alprimecapital.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Alprime</h2>
                            <a href="https://www.alprimecapital.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/amsterdam.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2> Baas Amsterdam</h2>
                            <a href="https://baas.amsterdam/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/anotherescape.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Another Escape</h2>
                            <a href="https://anotherescape.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/everyday-needs.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Everyday needs</h2>
                            <a href="https://www.everyday-needs.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/icetea.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Icetea</h2>
                            <a href="https://icetea.ge/en" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/jiaszeto.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Jia Szeto</h2>
                            <a href="http://jiaszeto.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/meandem.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>ME + EM</h2>
                            <a href="https://www.meandem.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/melonfashion.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Melon Fashion</h2>
                            <a href="http://office.melonfashion.ru/en/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs" >
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/oliviapalermo.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Olivia Palermo</h2>
                            <a href="https://oliviapalermo.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/polugar.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Polugar</h2>
                            <a href="https://polugar.club/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/prodotti-id.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Prodotti</h2>
                            <a href="http://www.prodotti-id.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/signifly.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Signifly</h2>
                            <a href="https://signifly.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/wallimage.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Wallimage</h2>
                            <a href="https://www.wallimage.be/fr" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item vuejs">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/vuejs/winchestercollege.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Winchester College</h2>
                            <a href="https://www.winchestercollege.org/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#VueJS</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/aclens.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>ACLens</h2>
                            <a href="http://www.aclens.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/barri.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Barri</h2>
                            <a href="http://www.barri.com.ar/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/danielgreen.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Daniel Green</h2>
                            <a href="http://www.danielgreen.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/duotix.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Duotix</h2>
                            <a href="https://www.duotix.be/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/expressbank.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Express Bank</h2>
                            <a href="https://www.expressbank.dk/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/femmefatale.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Femme Fatale</h2>
                            <a href="https://www.femmefatale.paris/en" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/fournier-pere-fils.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Fournier Pere & Fils</h2>
                            <a href="https://fournier-pere-fils.com/home" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/g-uld.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>g-uld</h2>
                            <a href="https://www.g-uld.dk/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/generalmills.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>General Mills</h2>
                            <a href="http://www.generalmills.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/lepetitcambodge.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Lepetit Cambodge</h2>
                            <a href="https://lepetitcambodge.fr/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/maestrobcn.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Maestro</h2>
                            <a href="http://www.maestrobcn.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/move-matise.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Move Matise</h2>
                            <a href="https://move.matise.amsterdam/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/mrleight.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Mr. Leight</h2>
                            <a href="https://mrleight.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/orchids.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Orchids & So</h2>
                            <a href="https://www.orchids-and-so.nl/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/samsaraubud.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Samsara Ubud</h2>
                            <a href="https://www.samsaraubud.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/standrews.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>St Andrews</h2>
                            <a href="https://www.standrews.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item angular">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/angular/tasteatlas.png')"></div>
                        <!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Taste Atlas</h2>
                            <a href="https://www.tasteatlas.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Angular</span>
                                <span>#WebDevelopment</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="#" id="loadMore">Load More</a>
            </div>

        </div>
    </div>
</div>
<div class="contact-us" id="contact-us">
    <div class="wrapper">
       <h2 class="text-center">Get In Touch</h2>
        <p class="text-center">It is a long established fact that a reader will be distracted </p>
        <div class="contact-form-box">
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 20px;">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="development" />
                            <label for="development">Development & Support</label>
                        </div>

                    </div>
                    <div class="col-md-6" style="margin-bottom: 20px;">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="testing" />
                            <label for="testing">QA & Testing</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="marketing" />
                            <label for="marketing">Marketing & SEO</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="design" />
                            <label for="design">Design</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name=""   class="form-control" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="container text-center">
        <img src="<?=url() ?>assets/images/LOGO.svg" alt="Erasofts" width="120px">
        <p>© 2019 Erasofts</p>
    </div>
</footer>
    <script src="<?=url() ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?=url() ?>assets/js/slick.min.js"></script>
    <script src="<?=url() ?>assets/js/jquery.isotope.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.top-slider').slick({
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots:true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        });
        $('.top-menu a,.get-in-touch-btn').click(function(){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top+50
            }, 1000);
            return false;
        });
        $(function () {
            $(".item").slice(0, 12).show();
            $("#loadMore").on('click', function (e) {
                e.preventDefault();
                $(".item:hidden").slice(0, 4).slideDown();
                if ($(".item:hidden").length == 0) {
                    $("#load").fadeOut('slow');
                }
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 1500);
            });
        });
        $(document).ready(function(){
            if ( $('#filters .selected').hasClass( "all-projects" ) ) {
                $('.all-projects.selected').parents('.recent-projects').find('.filter-content').addClass("all-items");
            }
            var item_height = $('.item').height();
            var total_height = (item_height * 4);
            console.log(total_height);

        });
        $(function(){

            var $container = $('#container'),
                $filterLinks = $('#filters a');

            $container.isotope({
                itemSelector: '.item',
                filter: '*'
            });

            $filterLinks.click(function(){
                var $this = $(this);

                // don't proceed if already selected
                if ( $this.hasClass('selected') ) {
                    return;
                }

                $filterLinks.filter('.selected').removeClass('selected');
                $this.addClass('selected');

                // get selector from data-filter attribute
                selector = $this.data('filter');

                $container.isotope({
                    filter: selector
                });
            });

        });
        $( window ).resize(function() {
            var $container = $('#container'),
                $filterLinks = $('#filters a');

            $container.isotope({
                itemSelector: '.item',
                filter: '*'
            });

            $filterLinks.click(function(){
                var $this = $(this);

                // don't proceed if already selected
                if ( $this.hasClass('selected') ) {
                    return;
                }

                $filterLinks.filter('.selected').removeClass('selected');
                $this.addClass('selected');

                // get selector from data-filter attribute
                selector = $this.data('filter');

                $container.isotope({
                    filter: selector
                });
            });
        });
        $( "#filters li a" ).on('click', function() {
            if ( $(this).hasClass( "all-projects" ) ) {
                $(this).parents('.recent-projects').find('.filter-content').addClass("all-items");
                $(this).parents('.recent-projects').find('#loadMore').css("display","block");
            }else{
                $(this).parents('.recent-projects').find('.filter-content').removeClass("all-items");
                $(this).parents('.recent-projects').find('#loadMore').css("display","none")
            }
        });
        $( "#loadMore" ).on('click', function() {
            $(this).parents('.recent-projects').find('.filter-content').removeClass("all-items");
        });
    </script>
</body>
</html>