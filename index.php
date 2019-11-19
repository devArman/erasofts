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
            <h2>IT Development Services and Skills for Your Needs</h2>
        </div>
        <h2 class="text-center">Our Services</h2>
        <p class="text-center">It is a long established fact that a reader will be distracted
            by the readable content of</p>
        <div class="row">
            <div class="col-sm">
                <div class="h100 d-flex">
                    <div class="img-cont">
                        <img src="<?=url() ?>assets/images/development.svg"  alt="Development & Support">
                    </div>
                    <div>
                        <h3>Development & Support</h3>
                        <p>
                            We provide both back-end and front-end development. Our teams build web applications powewordpress by bulletproof code, with stunning interfaces based on responsive web design.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-sm">
                <div class="h100 d-flex">
                    <div class="img-cont">
                        <img src="<?=url() ?>assets/images/testing.svg"  alt="QA & Testing">
                    </div>
                    <div>
                        <h3>QA & Testing</h3>
                        <p>
                            We provide both back-end and front-end development. Our teams build web applications powewordpress by bulletproof code, with stunning interfaces based on responsive web design.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-sm">
                <div class="h100 d-flex">
                    <div class="img-cont">
                        <img src="<?=url() ?>assets/images/marketing.svg"  alt="Marketing">
                    </div>
                    <div>
                        <h3>Marketing</h3>
                        <p>
                            We provide both back-end and front-end development. Our teams build web applications powewordpress by bulletproof code, with stunning interfaces based on responsive web design.
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
    <!--            <li><a href="javascript:void (0)" data-filter=".magento, .laravel">magento and laravel</a></li>-->
            </ul>
            <div id="container">
                <div class="item wordpress webdesign">
                    <div class="item-content">
                        <div class="project-website" style="background-image: url('<?=url() ?>assets/images/mikeRegina.png')"></div>
<!--                        <img src="--><?//=url() ?><!--assets/images/mikeRegina.png" alt="mikeRegina">-->
                        <div class="item-overlay">
                            <h2>Mike Regina</h2>
                            <a href="https://www.mikeregina.io/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/mustangcpu.png" alt="Mustang CPU">-->
                        <div class="item-overlay">
                            <h2>Mustang CPU</h2>
                            <a href="https://www.mustangcpu.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/4x4.png" alt="av4x4">-->
                        <div class="item-overlay">
                            <h2>av4x4</h2>
                            <a href="http://av4x4.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/bravethewoods.png" alt="bravethewoods">-->
                        <div class="item-overlay">
                            <h2>Brave the woods</h2>
                            <a href="http://bravethewoods.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/valenzano-vine.png" alt="mikeRegina">-->
                        <div class="item-overlay">
                            <h2>Valenzano Wine</h2>
                            <a href="http://158.106.138.242/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/gooshoreca.png" alt="gooshoreca">-->
                        <div class="item-overlay">
                            <h2>Gooshoreca</h2>
                            <a href="https://www.gooshoreca.nl/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/big-sky.png" alt="mikeRegina">-->
                        <div class="item-overlay">
                            <h2>Big Sky LLC</h2>
                            <a href="https://bigskyllc.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/drunensruiterhuis.png" alt="drunensruiterhuis">-->
                        <div class="item-overlay">
                            <h2>Drunens Ruiterhuis</h2>
                            <a href="https://www.drunensruiterhuis.nl/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/usbpi.png" alt="usbpi">-->
                        <div class="item-overlay">
                            <h2>U.S. Business P.I.</h2>
                            <a href="https://usbpi.com" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/horecaworld.png" alt="horecaworld">-->
                        <div class="item-overlay">
                            <h2>Horeca World</h2>
                            <a href="https://www.horecaworld.biz/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/iba.png" alt="iba">-->
                        <div class="item-overlay">
                            <h2>IBA</h2>
                            <a href="https://ibagroup.io/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/tutella.png" alt="tutella">-->
                        <div class="item-overlay">
                            <h2>Tutella</h2>
                            <a href="http://tutella.io/index.html" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/epabinc.png" alt="epabinc">-->
                        <div class="item-overlay">
                            <h2>Epabinc</h2>
                            <a href="https://epabinc.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/cfpc.png" alt="cross fit">-->
                        <div class="item-overlay">
                           <h2>Crossfit Portchester</h2>
                            <a href="https://crossfitportchester.com/personal-training/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/ecoact.png" alt="Ecology Action">-->
                        <div class="item-overlay">
                            <h2>Ecology Action</h2>
                            <a href="https://ecoact.org/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/gastrosteel.png" alt="gastrosteel">-->
                        <div class="item-overlay">
                            <h2>Gastrosteel</h2>
                            <a href="https://www.gastrosteel.nl/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/drcomfort.png" alt="drcomfort">-->
                        <div class="item-overlay">
                            <h2>Dr.Comfort</h2>
                            <a href="https://www.drcomfort.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/contornobelts.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Contorno Belts</h2>
                            <a href="https://contornobelts.com/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/livingproof.png" alt="livingproof">-->
                        <div class="item-overlay">
                            <h2>Living proof</h2>
                            <a href="https://www.livingproof.com/home" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/lindsayletters.png" alt="lindsayletters">-->
                        <div class="item-overlay">
                            <h2>Lindsay Letters</h2>
                            <a href="https://lindsayletters.co/" target="_blank" class="view-website">Visit Website</a>
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
<!--                        <img src="--><?//=url() ?><!--assets/images/concrete-matter.png" alt="contornobelts">-->
                        <div class="item-overlay">
                            <h2>Concrete matter</h2>
                            <a href="https://www.concrete-matter.com/" target="_blank" class="view-website">Visit Website</a>
                            <div class="project-tags">
                                <span>#Shopify</span>
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
                    <div class="col-md-4">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="development" />
                            <label for="development">Development & Support</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="testing" />
                            <label for="testing">QA & Testing</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="checkbox-content">
                            <input type="checkbox" class="checkbox" id="marketing" />
                            <label for="marketing">QA & Testing</label>
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