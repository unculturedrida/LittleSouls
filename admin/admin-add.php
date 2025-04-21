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
        <title>Admin Template</title>
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="assets/css/main.css" id="stylesheet">
        
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
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                                <div class="left-part">
                                    <h2 class="text-dark">Admins</h2>
                                    <p class="text-gray mb-0"><?php echo constant("HeadTitle"); ?></p>
                                </div>
                                <div class="card-header py-3">
                            <a href="admin-add.php"><button class="btn btn-primary">Add New Admin</button></a></a>
						</div>
                            </div>

                           
                            
                        </div>

                        <div class="col-xxl-8">
                            <div class="card border-0">
                            <div class="card-body">
                            <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold d-sm-inline-block  text-primary">User Update </h6>
                        <a href="admins.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Admins List</a>
                        </div>
							<form method="post" action="admin-add-script.php">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">First Name</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="TxtFirstName" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <label for="inputLastName">Last Name</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="TxtLastName" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputEmail">Email Address</label>
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="TxtEmail"/>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputContact">Contact Number</label>
                                            <input class="form-control" id="inputContact" type="tel" placeholder="+923451234567" name="TxtContact" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="TxtPassword" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                            <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="TxtConfirmPassword" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                    <input class="btn btn-primary btn-block" type="submit" value="Create Account" name="BtnSubmit">
                                </div>
                            </form>
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