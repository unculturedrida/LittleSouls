<?php
//include("includes/database-helper.php");

    if(isset($_REQUEST['BtnSubmit'])){
       
        $Email = $_REQUEST['TxtEmail'];
        $TodayDate = date("Ymd");
        $Status = 1;
        $Query = "SELECT MAX(id) FROM newsletter";
        // echo $Query; die;
        $Result = mysqli_query($conn, $Query);
        $MaxID = mysqli_fetch_array($Result);
        $UserID = $MaxID['0'];
        $ID = $UserID + 1;
        // echo $ID; die;
        $InsertQuery = "INSERT INTO newsletter ".
            " (id, emailaddress, subscriptiondate, status) ".
            " VALUES ($ID,'$Email', ".
            " '$TodayDate', '$Status')";
            mysqli_query($conn, $InsertQuery);
            // echo "Thanks for your kind feedback!";
        // echo $Query; die;

    
}

// ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Footer || Educat</title>
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
<div class="newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="newsletter-form angle">
                                    <form action="#" method="post"  class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="emailaddress" type="email" name="TxtEmail" placeholder="Enter your email address...">
                                            <button id="signup" name="BtnSubmit" type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>
</html>