<?php
include("includes/variables.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Header</title>
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
		<!-- Color Swithcer CSS
		============================================ -->
        <link rel="stylesheet" href="css/color-switcher.css">
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        
        <!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- Plugins CSS
		============================================ -->
        <link rel="stylesheet" href="css/plugins.css">
        
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="css/color.css">
        
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		<!-- Modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	    
        <!-- Color Css Files
		============================================ -->	
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-one.css" title="color-one" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-two.css" title="color-two" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-three.css" title="color-three" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-four.css" title="color-four" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-five.css" title="color-five" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-six.css" title="color-six" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-seven.css" title="color-seven" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-eight.css" title="color-eight" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-nine.css" title="color-nine" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-ten.css" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-ten.css" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/pattren1.css" title="pattren1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/pattren2.css" title="pattren2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/pattren3.css" title="pattren3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/pattren4.css" title="pattren4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/pattren5.css" title="pattren5" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/background1.css" title="background1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/background2.css" title="background2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/background3.css" title="background3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/background4.css" title="background4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/background5.css" title="background5" media="screen" />
    </head>
<body>
<header>
                    <div class="header-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-5 d-none d-lg-block d-md-block">
                                    <span>Have any question? <?php echo constant("Phone") ?></span>
                                </div>
                                <div class="col-lg-5 col-md-7 col-12">
                                    <div class="header-top-right">
                                        <div class="content"><a href="admin/index.php"><i class="zmdi zmdi-account"></i>Admin Login | For Office Use Only</a>
                                            <!-- <ul class="account-dropdown">
                                                <li><a href='login-register.php'>My Account</a></li>
                                                <li><a href='login-register.php'>Log In</a></li>
                                                <li><a href='login-register.php'>Register</a></li>
                                                <li><a href='latest-news.php'>Blog</a></li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="content"><a href="#"><i class="zmdi zmdi-favorite"></i> Wishlist</a></div> -->
                                        <!-- <div class="content"><a href="#"><i class="zmdi zmdi-shopping-basket"></i> Chechout</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-logo-menu sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <div class="logo">
                                        <a href='index.php'><img src="img/logo/Little Souls.png" width="200" height="40" alt="Little Souls"></a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="mainmenu-area pull-right">
                                        <div class="mainmenu d-none d-lg-block">
                                            <nav>
                                                <ul id="nav">
                                                    <li class="current"><a href='index.php'>Home</a>
                                                       
                                                    </li>
                                                    <li><a href='about.php'>About</a></li>
                                                    <li><a href='courses.php'>Courses</a>
                                                    </li>
                                                    <li><a href='image-gallery.php'>Gallery</a>
                                                    </li>
                                                    <li><a href='event.php'>Events</a>
                                                    </li>
                                                    <li><a href='latest-news.php'>Blogs</a>
                                                    </li>
                                                    <li><a href='contact.php'>Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <ul class="header-search">
                                            <li class="search-menu">
                                                <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                            </li>
                                        </ul>
                                        <!--Search Form-->
                                        <div class="search">
                                            <div class="search-form">
                                                <form id="search-form" action="#">
                                                    <input type="search" placeholder="Search here..." name="search" />
                                                    <button type="submit">
                                                        <span><i class="fa fa-search"></i></span>
                                                    </button>
                                                </form>                                
                                            </div>
                                        </div>
                                        <!--End of Search Form-->
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container clearfix">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href='index.php'>HOME</a>
                                                    <ul>
                                                        <li><a href='index.php'>Slider Style 1</a></li>
                                                        <li><a href='index-2.php'>Slider Style 2</a></li>
                                                        <li><a href='index-3.php'>Background Image</a></li>
                                                        <li><a href='index-4.php'>Image Overlay Light</a></li>
                                                        <li><a href='index-5.php'>Image Overlay Dark</a></li>
                                                        <li><a href='index-6.php'>Menu With Slider</a></li>
                                                        <li><a href='index-7.php'>Menu With Image</a></li>
                                                        <li><a href='index-8.php'>Menu With Overlay</a></li>
                                                        <li><a href='index-9.php'>Video Background</a></li>
                                                        <li><a href='index-10.php'>Fixed Image</a></li>
                                                        <li><a href='index-11.php'>Overlay Fixed Image</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='about.php'>About Us</a></li>
                                                <li><a href='courses.php'>Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href='courses-details.php'>Courses Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='shop-grid.php'>Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href='product-details.php'>Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='event.php'>Event</a>
                                                    <ul class="sub-menu">
                                                        <li><a href='event-details.php'>Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='index.php'>Shortcode</a>
                                                    <ul class="sub-menu">
                                                        <li><a href='shortcode-course.php'>Courses</a></li>
                                                        <li><a href='shortcode-event.php'>Event</a></li>
                                                        <li><a href='shortcode-latest-news.php'>Latest News</a></li>
                                                        <li><a href='shortcode-product.php'>Product</a></li>
                                                        <li><a href='shortcode-testimonial.php'>Testimonial</a></li>
                                                        <li><a href='shortcode-contact-form.php'>Contact Form</a></li>
                                                        <li><a href='shortcode-map.php'>Map</a></li>
                                                        <li><a href='shortcode-facts.php'>Facts</a></li>
                                                        <li><a href='image-gallery.php'>Image Gallery</a></li>
                                                        <li><a href='video-gallery.php'>Video Gallery</a></li>
                                                        <li><a href='shortcode-alerts.php'>Alerts</a></li>
                                                        <li><a href='shortcode-button.php'>Button</a></li>
                                                        <li><a href='shortcode-breadcrumbs.php'>Breadcrumb</a></li>
                                                        <li><a href='shortcode-dropdown.php'>Dropdown</a></li>
                                                        <li><a href='shortcode-pagination.php'>Pagination</a></li>
                                                        <li><a href='shortcode-progressbar.php'>Progressbar</a></li>
                                                        <li><a href='text-animation-1.php'>Text Animation 1</a></li>
                                                        <li><a href='text-animation-2.php'>Text Animation 2</a></li>
                                                        <li><a href='text-animation-3.php'>Text Animation 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='latest-news.php'>Latest News</a>
                                                    <ul class="sub-menu">
                                                        <li><a href='news-details.php'>News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='index.php'>Features</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Sliders</a>
                                                            <ul>
                                                                <li><a href='slider-style-1.php'>Slider Style 1</a></li>
                                                                <li><a href='slider-style-2.php'>Slider Style 2</a></li>
                                                                <li><a href='slider-style-3.php'>Slider Style 3</a></li>
                                                                <li><a href='background-image.php'>Image Background </a></li>
                                                                <li><a href='image-overlay-light.php'>Overlay Light </a></li>
                                                                <li><a href='image-overlay-dark.php'>Overlay Dark </a></li>
                                                                <li><a href='video-background.php'>Video Background </a></li>
                                                                <li><a href='fixed-image.php'>Fixed Image</a></li>
                                                                <li><a href='overlay-fixed-image.php'>Overlay Fixed Image</a></li>
                                                                <li><a href='text-animation-1.php'>Text Animation 1 </a></li>
                                                                <li><a href='text-animation-2.php'>Text Animation 2 </a></li>
                                                                <li><a href='text-animation-3.php'>Text Animation 3 </a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Menu Style</a>
                                                            <ul>
                                                                <li><a href='theme-menu-1.php'>Theme Menu 1</a></li>
                                                                <li><a href='theme-menu-2.php'>Theme Menu 2</a></li>
                                                                <li><a href='theme-menu-3.php'>Theme Menu 3</a></li>
                                                                <li><a href='without-top-bar.php'>Without Top Bar</a></li>
                                                                <li><a href='menu-center.php'>Menu Center</a></li>
                                                                <li><a href='menu-transparent.php'>Transparent</a></li>
                                                                <li><a href='menu-semi-transparent.php'>Semi Transparent</a></li>
                                                                <li><a href='menu-dark.php'>Menu Dark</a></li>
                                                                <li><a href='borderd-menu.php'>Menu Border</a></li>
                                                                <li><a href='menu-top-border.php'>Top Border Hover</a></li>
                                                                <li><a href='menu-sticky.php'>Menu Sticky</a></li>
                                                                <li><a href='menu-non-sticky.php'>Menu Non Sticky</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Page Title</a>
                                                            <ul>
                                                                <li><a href='breadcrumb-dark.php'>Title Dark</a></li>
                                                                <li><a href='breadcrumb-fixed.php'>Title Fixed</a></li>
                                                                <li><a href='breadcrumb-image.php'>Title Image</a></li>
                                                                <li><a href='breadcrumb-transparent.php'>Title Transparent</a></li>
                                                                <li><a href='breadcrumb-left.php'>Title Left</a></li>
                                                                <li><a href='breadcrumb-right.php'>Title Right</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Footer Style</a>
                                                            <ul>
                                                                <li><a href='footer-style-1.php'>Footer Style 1</a></li>
                                                                <li><a href='footer-style-2.php'>Footer Style 2</a></li>
                                                                <li><a href='footer-style-3.php'>Footer Style 3</a></li>
                                                                <li><a href="footer-style-4.php">Footer Style 4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href='login-register.php'>Login Register</a></li>
                                                <li><a href='contact.php'>Contact us</a></li>
                                            </ul>
                                        </nav>
                                    </div>					
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->    
                </header>
</body>
</html>