<?php 
session_start();
if(!(isset($_SESSION['username'])))
{
    header("location: login.php");
    exit();
}

?>
<?php
include("includes/variables.php");
?>
<?php
include("includes/DatabaseHelper.php");
?>

<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Kleon Admin Template">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Page Title -->
        <title>Admin | Little Souls</title>
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="assets/css/main.css" id="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
    </head>


    <body class="bg-light">
        
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-inner">
                <div class="spinner"></div>
                <div class="logo"><img src="assets/img/logo-icon.png" alt="img"></div>
            </div>
        </div>

        <!-- Default Nav -->
   <?php
    include("includes/navbar.php");
   ?>

        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                        <div class="left-part">
                            <h2 class="text-dark">Dashboard</h2>
                            <p class="text-gray mb-0"><?php echo constant("HeadDescription") ;?></p>
                        </div>
                        <div class="right-part">
                            <form class="search-form w-auto" action="https://wpthemebooster.com/demo/themeforest/html/kleon/search.php">
                                <input type="text" name="search" class=" bg-white form-control" placeholder="Search">
                                <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                    <?php
                $TotalAdmins = "SELECT COUNT(*) AS TotalAdmins FROM admin_table";
                $rstRow = mysqli_query($conn, $TotalAdmins);
                $objRow = mysqli_fetch_object($rstRow);
            ?>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card border-0">
                                <div class="card-body py-0 d-flex align-items-center gap-2 gap-lg-5 flex-wrap">
                                    <div> 
                                       <!-- <img src="assets/img/mail-notification.png" alt="">  -->  
                                    </div> 
                                    <div> 
                                        <h2 class="fs-38"><?php echo ($objRow->TotalAdmins);?></h2>
                                        <h5 class="fw-semibold text-gray mb-0">Total Admins</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                $Totalc = "SELECT COUNT(*) AS Totalc FROM courses";
                $rstRow = mysqli_query($conn, $Totalc);
                $objRow = mysqli_fetch_object($rstRow);
            ?>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card border-0">
                                <div class="card-body py-0 d-flex align-items-center gap-2 gap-lg-5 flex-wrap">
                                    <div> 
                                       <!-- <img src="assets/img/mail-notification.png" alt="">  -->  
                                    </div> 
                                    <div> 
                                        <h2 class="fs-38"><?php echo ($objRow->Totalc);?></h2>
                                        <h5 class="fw-semibold text-gray mb-0">Total Courses</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                $Totale = "SELECT COUNT(*) AS Totale FROM events";
                $rstRow = mysqli_query($conn, $Totale);
                $objRow = mysqli_fetch_object($rstRow);
            ?>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center gap-2 gap-lg-5 flex-wrap">
                                    <div> 
                                        <!-- <img src="assets/img/mail-notification.png" alt="">  -->
                                    </div> 
                                    <div> 
                                        <h2 class="fs-38"><?php echo ($objRow->Totale);?></h2>
                                        <h5 class="fw-semibold text-gray mb-0">Total Events</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                $Totalsub = "SELECT COUNT(*) AS Totalsub FROM newsletter";
                $rstRow = mysqli_query($conn, $Totalsub);
                $objRow = mysqli_fetch_object($rstRow);
            ?>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center gap-2 gap-lg-5 flex-wrap">
                                    <div> 
                                        <!-- <img src="assets/img/mail-notification.png" alt="">  -->
                                    </div> 
                                    <div> 
                                        <h2 class="fs-38"><?php echo ($objRow->Totalsub);?></h2>
                                        <h5 class="fw-semibold text-gray mb-0">Total Newsletter Subscribers</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                     <?php   $Totalfd = "SELECT COUNT(*) AS Totalfd FROM feedback";
                $rstRow = mysqli_query($conn, $Totalfd);
                $objRow = mysqli_fetch_object($rstRow);
            ?>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center gap-2 gap-lg-5 flex-wrap">
                                    <div> 
                                        <!-- <img src="assets/img/mail-notification.png" alt="">  -->
                                    </div> 
                                    <div> 
                                        <h2 class="fs-38"><?php echo ($objRow->Totalfd);?></h2>
                                        <h5 class="fw-semibold text-gray mb-0">Total Feedbacks</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>




                   

                </div>
            </div>
        </main>



        <!-- Core JS -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery UI Kit -->
        <script src="plugins/jquery_ui/jquery-ui.1.12.1.min.js"></script>

        <!-- ApexChart -->
        <script src="plugins/apexchart/apexcharts.min.js"></script>
        <script src="plugins/apexchart/apexchart-inits/apexcharts-general.js"></script>

        <!-- Peity  -->
        <script src="plugins/peity/jquery.peity.min.js"></script>
        <script src="plugins/peity/piety-init.js"></script>

        <!-- Select 2 -->
        <script src="plugins/select2/js/select2.min.js"></script>

        <!-- Datatables -->
        <script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/js/datatables.init.js"></script>

        

        <!-- Date Picker -->
        <script src="plugins/flatpickr/flatpickr.min.js"></script>

        <!-- Dropzone -->
        <script src="plugins/dropzone/dropzone.min.js"></script>
        <script src="plugins/dropzone/dropzone_custom.js"></script>

        <!-- TinyMCE -->
        <script src="plugins/tinymce/tinymce.min.js"></script>
        <script src="plugins/prism/prism.js"></script>
        <script src="plugins/jquery-repeater/jquery.repeater.js"></script>

        

        

        <!-- Sweet Alert -->
        <script src="plugins/sweetalert/sweetalert2.min.js"></script>
        <script src="plugins/sweetalert/sweetalert2-init.js"></script>
        <script src="plugins/nicescroll/jquery.nicescroll.min.js"></script>

        <!-- Snippets JS -->
        <script src="assets/js/snippets.js"></script>

        <!-- Theme Custom JS -->
        <script src="assets/js/theme.js"></script>

    </body>


</html>