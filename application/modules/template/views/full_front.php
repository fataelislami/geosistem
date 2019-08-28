<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?= base_url()?>assets-front/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets-front/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Geosistem</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="<?= base_url()?>assets-front/js/html5shiv.min.js"></script>
        <script src="<?= base_url()?>assets-front/js/respond.min.js"></script>
	<![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/fontawesome/css/font-awesome.min.css" />


    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/owl.carousel.min.css">

    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/magnific-popup.min.css">

    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/loader.min.css">

    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/flaticon.min.css">

    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/style.css">

    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="<?= base_url()?>assets-front/css/skin/skin-1.css">

    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/css/switcher.css">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/plugins/revolution/revolution/css/settings.css">

    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets-front/plugins/revolution/revolution/css/navigation.css">
    <?php if(isset($css)){$this->load->view($css);} ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body>

	<div class="page-wraper">
        <!-- HEADER START -->
        <?php if(isset($landing)){ ?>
        <header class="site-header header-style-2">
			<!-- Search Form -->
            <div class="header-middle bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="<?= base_url()?>assets-front/index.html">
                            <img src="<?= base_url()?>xfile/log-geo.png" width="60px" alt="" />
                        </a>
                    </div>
                    <!-- <div class="header-info">
                        <ul>
                        	<li>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>Surabaya, INDONESIA</strong>
                                    <span>Wisma SIER,1st Floor Rungkut Industri Raya No 10</span>
                                </div>
                            </li>
                            <li>

                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="fa fa-phone"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>+62 31 8475062</strong>
                                    <span>Mon - Friday: 9.00 to 18.00</span>
                                </div>

                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>

			<!-- Search Form -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-secondry">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="<?= base_url()?>assets-front/#search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="extra-cell">
                                <a href="<?= base_url()?>assets-front/#" class="contact-slide-show"><i class="fa fa-angle-left arrow-animation"></i></a>
                            </div>
                        </div>
                        <!-- ETRA Nav -->

                        <!-- Contact Nav -->
                        <div class="contact-slide-hide " style="background-image:url(<?= base_url()?>assets-front/images/background/bg-5.png)">
                            <div class="contact-nav">
                                 <a href="<?= base_url()?>assets-front/javascript:void(0)" class="contact_close">&times;</a>
                                 <div class="contact-nav-form p-a30">
                                    <div class="contact-info   m-b30">

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Phone number</h5>
                                                <p>(075) 123-7654</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Email address</h5>
                                                <p>info@geosistem.co.id</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Address info</h5>
                                                <p>Wisma SIER,1st Floor Rungkut Industri Raya No 10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="full-social-bg">
                                          <ul>
                                                <li><a href="<?= base_url()?>assets-front/#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="<?= base_url()?>assets-front/#" class="google"><i class="fa fa-google"></i></a></li>
                                                <li><a href="<?= base_url()?>assets-front/#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="<?= base_url()?>assets-front/#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a href="<?= base_url()?>assets-front/#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="<?= base_url()?>assets-front/#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                          </ul>
                                    </div>
                                    <div class="text-center">
                                        <h4 class="font-weight-600">&copy;  2019 Geosistem</h4>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <!-- SITE Search -->
                        <div id="search">
                                <span class="close"></span>
                                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                    <div class="input-group">
                                        <input value="" name="q" type="search" placeholder="Type to search"/>
                                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>
                                    </div>
                                </form>
                            </div>

                        <!-- MAIN Nav -->
                        <div class="header-nav navbar-collapse collapse">
                                <ul class=" nav navbar-nav">
                                    <li class="active">
                                        <a href="<?= base_url()?>">Home</a>

                                    </li>

                                    <li>
                                        <a href="<?= base_url()?>about-us">About us</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>product">Product</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>front/services">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Experiences</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= base_url()?>assets-front/javascript:;">Blog</a>
                                                <ul class="sub-menu has-child">
                                                    <li><a href="<?= base_url()?>assets-front/blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="<?= base_url()?>assets-front/blog-listing.html">Blog Listing</a></li>
                                                    <li><a href="<?= base_url()?>assets-front/blog-masonry.html">Blog Masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Customers</a>
                                            </li>
                                            <li>
                                                <a href="#">Publications</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url()?>assets-front/contact-1.html">News and Events</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>front/contact_us">Contact</a>

                                    </li>


                                </ul>
                            </div>
                    </div>
                </div>
            </div>

        </header>
      <?php }else{ ?>
        <header class="site-header header-style-1">
            <div class="top-bar bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="mt-topbar-left clearfix">
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i> info@geosistem.co.id</li>
                                <li><i class="fa fa-phone"></i>(075) 123-7654</li>
                                <li><i class="fa fa-clock-o"></i>Sun-Sat 9.45 am</li>
                            </ul>
                        </div>
                        <div class="mt-topbar-right clearfix">
                            <!-- <div class="appint-btn"><a href="#" class="site-button" style="color:#FFFFFF">Make an Appointment</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                    <img src="<?= base_url() ?>xfile/log-geo.png" alt="" width="60px"/>
                                </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                            <!-- ETRA Nav -->
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <a href="#search">
                                    	<i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="extra-cell">
                                    <a href="#" class="contact-slide-show"><i class="fa fa-angle-left arrow-animation"></i></a>
                                </div>
                            </div>
                            <!-- ETRA Nav -->

                            <!-- Contact Nav -->
                         	<div class="contact-slide-hide " style="background-image:url(images/background/bg-5.png)">
                                <div class="contact-nav">
                                     <a href="javascript:void(0)" class="contact_close">&times;</a>
                                     <div class="contact-nav-form p-a30">
                            			<div class="contact-info   m-b30">

                                            <div class="mt-icon-box-wraper center p-b30">
                                                <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                                <div class="icon-content">
                                                    <h5 class="m-t0 font-weight-500">Phone number</h5>
                                                    <p>(075) 123-7654</p>
                                                </div>
                                            </div>

                                            <div class="mt-icon-box-wraper center p-b30">
                                                <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                                <div class="icon-content">
                                                    <h5 class="m-t0 font-weight-500">Email address</h5>
                                                    <p>info@geosistem.co.id</p>
                                                </div>
                                            </div>

                                            <div class="mt-icon-box-wraper center p-b30">
                                                <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                                <div class="icon-content">
                                                    <h5 class="m-t0 font-weight-500">Address info</h5>
                                                    <p>201 Liverpool Street, Suite 721, London</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="full-social-bg">
                                              <ul>
                                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
                                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                              </ul>
                                        </div>
                                        <div class="text-center">
                                            <h4 class="font-weight-600">&copy;  2019 Geosistem</h4>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <!-- SITE Search -->
                            <div id="search">
                                <span class="close"></span>
                                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                    <div class="input-group">
                                        <input value="" name="q" type="search" placeholder="Type to search"/>
                                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>
                                    </div>
                                </form>
                            </div>
                            <!-- MAIN Vav -->
                            <div class="header-nav navbar-collapse collapse">
                                <ul class=" nav navbar-nav">
                                  <li class="active">
                                      <a href="<?= base_url()?>">Home</a>
                                  </li>

                                  <li>
                                      <a href="<?= base_url()?>about-us">About us</a>
                                  </li>
                                  <li>
                                      <a href="<?= base_url()?>product">Product</a>
                                  </li>
                                  <li>
                                      <a href="<?= base_url()?>front/services">Services</a>
                                  </li>
                                  <li>
                                      <a href="#">Experiences</a>
                                  </li>
                                  <li>
                                      <a href="<?= base_url()?>front/contact">Contact</a>
                                  </li>
                                  <li>
                                      <a href="#">Publications</a>
                                  </li>
                                  <li>
                                      <a href="<?= base_url() ?>front/news">News and Events</a>
                                  </li>
                                </ul>
                            </div>

                    </div>
                </div>
            </div>
        </header>
      <?php } ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">
          <?php if(isset($content)){$this->load->view($content);} ?>
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-light	footer-wide">
            <!-- <div class="container call-to-action-wrap bg-no-repeat bg-center" style="background-image:url(<?= base_url()?>assets-front/images/background/bg-site.png);">
                <div class="p-a30  bg-primary">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left text-black" style="color:#FFFFFF">
                                <h4 class="text-uppercase m-b10 m-t0" style="color:#FFFFFF">Subscribe to our newsletter!</h4>
                                <span>Never Miss Anything From Geosistem By Signing Up To Our Newsletter.</span>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="call-to-action-right">
                                <div class="widget_newsletter">
                                    <div class="newsletter-bx">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div> -->
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                    <a href="<?= base_url()?>assets-front/index.html"><img src="<?= base_url()?>xfile/log-geo.png" width="80px" alt=""></a>
                                </div>
								<p class="max-w400">PT.Teknikindo Geosistem Superior offers a comprehensive range of services that include site investigation, the proposed project design, implementation of soil remediation work,application of geosynthetics, geotechnical and monitoring instrumentation.</p>

                                <ul class="social-icons  mt-social-links">
                                    <li><a href="<?= base_url()?>assets-front/javascript:void(0);" class="fa fa-google"></a></li>
                                    <li><a href="<?= base_url()?>assets-front/javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="<?= base_url()?>assets-front/javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="<?= base_url()?>assets-front/javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="<?= base_url()?>assets-front/javascript:void(0);" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- RESENT POST -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="widget widget_services inline-links">
                              <h4 class="widget-title">Navigation</h4>
                              <ul>
                                  <li><a href="<?= base_url()?>about-us">About Us</a></li>
                                  <li><a href="<?= base_url()?>product">Product</a></li>
                                  <li><a href="<?= base_url()?>front/services">Services</a></li>
                                  <li><a href="#">Experiences</a></li>
                                  <li><a href="<?= base_url()?>front/contact">Contact</a></li>
                              </ul>
                          </div>
                        </div>

                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="<?= base_url()?>assets-front/about-1.html">About</a></li>
                                    <li><a href="<?= base_url()?>assets-front/project-grid.html">Projects</a></li>
                                    <li><a href="<?= base_url()?>assets-front/blog-grid.html">Blog</a></li>
                                    <li><a href="<?= base_url()?>assets-front/contact-1.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- TAGS -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="widget widget_address_outer">
                              <h4 class="widget-title">Contact Us</h4>
                              <ul class="widget_address">
                                  <li>Wisma SIER,1st Floor Rungkut Industri Raya No 10 Surabaya 60293 Indonesia</li>
                                  <li>info@geosistem.co.id</li>
                                  <li>(+62) 8475062</li>
                              </ul>

                          </div>
                        </div>
                        <!-- NEWSLETTER -->

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="mt-footer-bot-center">
                            <span class="copyrights-text">© 2019 Geosistem. Redesigned By Kostlab.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->


        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


    </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader" style="color:#0c733a">Geosistem</div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="<?= base_url()?>assets-front/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="<?= base_url()?>assets-front/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script  src="<?= base_url()?>assets-front/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script  src="<?= base_url()?>assets-front/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="<?= base_url()?>assets-front/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="<?= base_url()?>assets-front/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script  src="<?= base_url()?>assets-front/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script  src="<?= base_url()?>assets-front/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="<?= base_url()?>assets-front/js/jquery.owl-filter.js"></script>

<script  src="<?= base_url()?>assets-front/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->



<script  src="<?= base_url()?>assets-front/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="<?= base_url()?>assets-front/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script  src="<?= base_url()?>assets-front/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script src="<?= base_url()?>assets-front/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<!-- REVOLUTION JS FILES -->

<script  src="<?= base_url()?>assets-front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="<?= base_url()?>assets-front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="<?= base_url()?>assets-front/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="<?= base_url()?>assets-front/js/rev-script-2.js"></script>



<script  src="<?= base_url()?>assets-front/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="<?= base_url()?>assets-front/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqwdZHU6gzIhPBEB2VNbIydp4coZmNPy0&callback=initMap"  ></script><!-- GOOGLE MAP -->
<script  src="<?= base_url()?>assets-front/js/map.script.js"></script><!-- MAP FUCTIONS [ this file use with google map]  -->
<script  src="<?= base_url()?>assets-front/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script src="<?= base_url()?>assets-front/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<?php if(isset($js)){$this->load->view($js);} ?>

<!-- STYLE SWITCHER  ======= -->
<!-- <div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>

    <div class="styleswitcher-inner">

        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="<?= base_url()?>assets-front/?theme=css/skin/skin-1" title="default Theme"></a></li>
            <li><a class="theme-skin skin-2" href="<?= base_url()?>assets-front/?theme=css/skin/skin-2" title="pink Theme"></a></li>
            <li><a class="theme-skin skin-3" href="<?= base_url()?>assets-front/?theme=css/skin/skin-3" title="sky Theme"></a></li>
            <li><a class="theme-skin skin-4" href="<?= base_url()?>assets-front/?theme=css/skin/skin-4" title="green Theme"></a></li>
            <li><a class="theme-skin skin-5" href="<?= base_url()?>assets-front/?theme=css/skin/skin-5" title="red Theme"></a></li>
            <li><a class="theme-skin skin-6" href="<?= base_url()?>assets-front/?theme=css/skin/skin-6" title="orange Theme"></a></li>
            <li><a class="theme-skin skin-7" href="<?= base_url()?>assets-front/?theme=css/skin/skin-7" title="purple Theme"></a></li>
            <li><a class="theme-skin skin-8" href="<?= base_url()?>assets-front/?theme=css/skin/skin-8" title="blue Theme"></a></li>
        </ul>

    </div>
</div> -->
<!-- STYLE SWITCHER END ==== -->

</body>

</html>
