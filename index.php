<?php
include("includes/database-helper.php");
?>
<!doctype html>
<html class="no-js" lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Little Souls</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon1.ico">
		
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
             <?php
             include("includes/header.php");
             ?>
                <!--End of Header Area-->
                <!--Slider Area Start-->
            <?php
            include("includes/slider.php");
            ?>
                <!--End of Slider Area-->
                <!--About Area Start--> 
                <div class="about-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="about-container">
                                    <h3>WHY LITTLE SOULS?</h3>
                                    <p><?php echo constant("HeadDescription") ?></p>
                                    <a class="button-default" href="about.php">Learn Now</a>	      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of About Area-->
                <!--Course Area Start-->
                <div class="course-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>POPULAR COURSES</h3>
                                        <p><?php echo constant("abtl3") ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php
                 $Query = "SELECT * FROM courses WHERE 1 ORDER BY id ASC";
                 $Result = mysqli_query($conn, $Query);
                 if ($Result->num_rows >= 0)
                   while ($row = mysqli_fetch_array($Result)) {
                ?>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="admin/<?php echo $row['image'] ?>" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#"><?php echo $row['newstitle'] ?></a></h4>
                                        <div class="single-item-text-info">
                                            <span>By: <span><?php echo $row['newspostby'] ?></span></span>
                                            <span>Date: <span><?php echo $row['newsdate'] ?></span></span>
                                        </div>
                                        <p><?php echo $row['newsdesc'] ?></p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } else
            echo "not found";
          ?>
                            <div class="col-md-12 col-sm-12 text-center">
                                <a href="courses.php" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Course Area can also add funfactor here-->
                <!--Latest News Area Start--> 
                <div class="latest-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Latest News</h3>
                                        <p><?php echo constant("abtl3") ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php
                 $Query = "SELECT * FROM news WHERE 1 ORDER BY id ASC";
                 $Result = mysqli_query($conn, $Query);
                 if ($Result->num_rows >= 0)
                   while ($row = mysqli_fetch_array($Result)) {
                ?> 
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="admin/<?php echo $row['image'] ?>" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#"><?php echo $row['newstitle'] ?></a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i><?php echo $row['newsdate'] ?></span>
                                          
                                       </div>
                                       <p><?php echo $row['newsdesc'] ?> </p>
                                      
                                    </div>
                                </div>
                            </div>
                            <?php } else
            echo "not found";
          ?>
                            <div class="col-md-12 col-sm-12 text-center">
                                <a href="courses.php" class="button-default button-large">Browse All News <i class="zmdi zmdi-chevron-right"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--End of Latest News Area can also add online library here or testimonial later-->
                <!--Event Area Start-->
                <div class="event-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>OUR EVENTS</h3>
                                        <p><?php echo constant("abtl3") ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php
                            $Query = "SELECT * FROM events WHERE 1 ORDER BY id ASC";
                            $Result = mysqli_query($conn, $Query);
                            if ($Result->num_rows >= 0)
                           while ($row = mysqli_fetch_array($Result)) {
                           ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="admin/<?php echo $row['image'] ?>" alt="">
                                            <span><?php echo $row['newsdate'] ?></span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#"><?php echo $row['newstitle'] ?></a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i><?php echo $row['link'] ?></span>
                                       </div>
                                       <p><?php echo $row['newsdesc'] ?></p>
                                      
                                    </div>
                                </div>
                            </div>
                            <?php } else
                              echo "not found";
                              ?>
                              <div class="col-md-12 col-sm-12 text-center">
                                <a href="event.php" class="button-default button-large">Browse All Events <i class="zmdi zmdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Event Area-->
                <!--Newsletter Area Start-->
               <?php
               include("includes/newsletter.php");
               ?>
                <!--End of Newsletter Area-->
              <!-- Footer Area Start  -->
              <?php
              include("includes/footer.php");
              ?>
              <!-- Footer Area End  -->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
        <div class="ec-colorswitcher">
            <a class="ec-handle" href="#"><i class="zmdi zmdi-settings"></i></a>
            <h3>Style Switcher</h3>
            <div class="ec-switcherarea">
                <h6>Select Layout</h6>
                <div class="layout-btn">
                    <a href="#" class="ec-boxed"><span>Boxed</span></a>
                    <a href="#" class="ec-wide"><span>Wide</span></a>
                </div>
                <h6>Chose Color</h6>
                <ul class="ec-switcher">
                    <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
                    <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
                    <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
                    <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
                    <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
                    <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
                    <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
                    <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
                    <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
                    <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
                </ul>
                <div class="ec-pattren">
                    <h6>Chose Pattren</h6>
                    <div class="pattren-wrap">
                        <a href="#" data-rel="pattren1" class="styleswitch"><img src="img/ec-pattren/pattren1.jpg" alt=""></a>
                        <a href="#" data-rel="pattren2" class="styleswitch"><img src="img/ec-pattren/pattren2.jpg" alt=""></a>
                        <a href="#" data-rel="pattren3" class="styleswitch"><img src="img/ec-pattren/pattren3.jpg" alt=""></a>
                        <a href="#" data-rel="pattren4" class="styleswitch"><img src="img/ec-pattren/pattren4.jpg" alt=""></a>
                        <a href="#" data-rel="pattren5" class="styleswitch"><img src="img/ec-pattren/pattren5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="ec-background">
                    <h6>Chose Background</h6>
                    <div class="background-wrap">
                        <a href="#" data-rel="background1" class="styleswitch"><img src="img/ec-background/bg-1.jpg" alt=""></a>
                        <a href="#" data-rel="background2" class="styleswitch"><img src="img/ec-background/bg-2.jpg" alt=""></a>
                        <a href="#" data-rel="background3" class="styleswitch"><img src="img/ec-background/bg-3.jpg" alt=""></a>
                        <a href="#" data-rel="background4" class="styleswitch"><img src="img/ec-background/bg-4.jpg" alt=""></a>
                        <a href="#" data-rel="background5" class="styleswitch"><img src="img/ec-background/bg-5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Color Switcher end -->	
        
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        
		<!-- popper JS
		============================================ -->		
        <script src="js/popper.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
		<!-- AJax Mail JS
		============================================ -->		
        <script src="js/ajax-mail.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- StyleSwitch JS
		============================================ -->	
        <script src="js/styleswitch.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

</html>