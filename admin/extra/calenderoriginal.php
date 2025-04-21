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
        <title>Admin Template</title>
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="assets/css/main.css" id="stylesheet">
        
    </head>


    <body class="bg-light">
        
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-inner">
                <div class="spinner"></div>
                <div class="logo"><img src="assets/img/logo-icon.svg" alt="img"></div>
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
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                                <div class="left-part">
                                    <h2 class="text-dark">Calendar</h2>
                                    <p class="text-gray mb-0"><?php echo constant("HeadTitle"); ?></p>
                                </div>
                            </div>

                           
                            
                        </div>

                        <div class="col-xxl-8">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div id="calendar" class="kleon-fullcalendar"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Add New Event -->
                        <div class="modal fade" id="add-event">
                            <div class="modal-dialog modal-xl">

                                <div class="modal-content rounded-2 p-0 p-sm-5">
                                    <div class="modal-header">
                                        <h2 class="modal-title fw-bold">Add New Event</h2>
                                        <button type="button" class="btn-close p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Start Date</label>
                                                        <input type="text" class="flatpickr form-control" name="calendar" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">End Date</label>
                                                        <input type="text" class="flatpickr form-control" name="calendar" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Start Time</label>
                                                        <input type="time" class="form-control" name="calendar" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">End Time</label>
                                                        <input type="time" class="form-control" name="calendar" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Event Name</label>
                                                        <input type="text" class="form-control" name="event_name" value="National Envato Meetup With Kleon Team" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Description</label>
                                                        <textarea class="form-control" name="textarea" placeholder="Enter Text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                                <div id="dpz-multiple-files" class="dropzone file-upload btn btn-info text-white fs-18 text-uppercase mx-0"><i class="bi bi-paperclip me-2"></i> Add Attachment</div>
                                                <button type="submit" class="btn btn-primary fs-18 text-uppercase mx-0"><i class="bi bi-send me-2"></i> Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Event Details -->
                        <div class="modal fade" id="event-details">
                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                <div class="modal-content rounded-2 p-0 p-sm-5">
                                    <div class="modal-header">
                                        <h3 class="modal-title fw-bold">Event Details</h3>
                                        <button type="button" class="btn-close p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-start gap-5">
                                                <div class="bg-info p-3 rounded-2 ">
                                                    <img src="assets/img/calendar-icon.png" alt="">
                                                </div>
                                                <div>
                                                    <h4 class="event-title fs-20 text-dark mb-3">Weekly Meeting Projects</h4>
                                                    <p class="fs-14 lh-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>

                                                    <div class="d-flex justify-content-between align-items-center gap-4 flex-wrap">
                                                        <!-- Avatar Group -->
                                                        <div class="avatar-group">
                                                            <span class="avatar rounded-circle bg-gray-200">
                                                                <img class="avatar-img rounded-circle" src="assets/img/1.jpg">
                                                            </span>
                                                            <span class="avatar rounded-circle bg-gray-200">
                                                                <span class="avatar-initials rounded-circle">A</span>
                                                            </span>
                                                            <span class="avatar rounded-circle bg-gray-200">
                                                                <img class="avatar-img rounded-circle" src="assets/img/2.jpg">
                                                            </span>
                                                            <span class="avatar rounded-circle bg-gray-200">
                                                                <img class="avatar-img rounded-circle" src="assets/img/3.jpg">
                                                            </span>
                                                            <span class="avatar rounded-circle bg-gray-200">
                                                                <span class="avatar-initials rounded-circle text-white bg-primary">5+</span>
                                                            </span>
                                                        </div>
                                
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="fs-20 text-primary">
                                                                <i class="bi bi-clock-fill"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Monday, 10:24 AM</p>
                                                                <p class="mb-0 fw-semibold">October 31th 2023</p>
                                                            </div>
                                                        </div>
                                
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="fs-20 text-primary">
                                                                <i class="bi bi-geo-alt-fill"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Corner Rounded St</p>
                                                                <p class="mb-0 fw-semibold">London, United Kingdom</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu p-0">
                                                    <div class="btn-group">
                                                        <button class="btn border-0 p-1 px-2 fs-30 rounded-2 text-danger" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" data-bs-custom-class="tooltip-primary">
                                                            <i class="bi bi-x"></i> 
                                                        </button>
                                                        <button class="btn border-0 p-1 px-2 fs-30 rounded-2 text-success" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply" data-bs-custom-class="tooltip-primary">
                                                            <i class="bi bi-check"></i> 
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </div>
                                        
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
        
        
        <!-- Peity  -->
        <script src="plugins/peity/jquery.peity.min.js"></script>
        <script src="plugins/peity/piety-init.js"></script>

        <!-- Select 2 -->
        <script src="plugins/select2/js/select2.min.js"></script>

        <!-- Datatables -->
        <script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/js/datatables.init.js"></script>
        
        <!-- Full Calendar -->
        <script src="plugins/fullcalendar/fullcalendar.js"></script>
        <script src="plugins/fullcalendar/fullcalendar-init.js"></script>
        <script src="plugins/fullcalendar/moment.js"></script>

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