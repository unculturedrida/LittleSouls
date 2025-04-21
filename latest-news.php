<?php
include("includes/database-helper.php");
?>
<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Latest News || Little Souls</title>
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
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Latest News</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href='index.html'>Home</a></li>
                                            <li>Latest News</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Latest News Area Start-->
                
                <div class="latest-area section-padding latest-page">
                    <div class="container">
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
                                           <!-- <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span> -->
                                       </div>
                                       <p><?php echo $row['newsdesc'] ?> </p>
                                     
                                    </div>
                                </div>
                                
                                
                            </div>
                            <?php } else
            echo "not found";
          ?>
                        </div>
                        
                    </div>
                </div>
               
                <!--End of Latest News Area-->
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

<!-- Mirrored from htmldemo.hasthemes.com/educat-preview/educat/latest-news by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2023 12:21:25 GMT -->
</html>