<?php
include("includes/database-helper.php");
?>
<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Event || Little Souls</title>
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
    
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-eight.css" title="color-eight" media="screen" />
        </head>
    <body>    
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <?php
                include("includes/header.php");
                ?>
                               <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Our Events</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href='index.html'>Home</a></li>
                                            <li>Events</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Event Area Start-->
                
                <div class="event-area section-padding event-page">
                    <div class="container">
                        <div class="row">
                          <?php
                            $Query = "SELECT * FROM events WHERE 1 ORDER BY id ASC";
                            $Result = mysqli_query($conn, $Query);
                            if ($Result->num_rows >= 0)
                           while ($row = mysqli_fetch_array($Result)) {
                           ?>
                            <div class="col-lg-4 col-md-6 col-12">
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
                                           <span><i class="zmdi zmdi-time"></i>8.00 am - 12.00 am</span>
                                           <span><i class="zmdi zmdi-pin"></i><?php echo $row['link'] ?></span>
                                       </div>
                                       <p><?php echo $row['newsdesc'] ?></p>
                                      
                                    </div>
                                </div>
                            </div>
                            <?php } else
                              echo "not found";
                              ?>
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
                <!--Footer Widget Area Start-->
                <?php
                include("includes/footer.php");
                ?>
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        
        
        
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