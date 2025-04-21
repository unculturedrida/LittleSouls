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
<?php
$ID = $_GET['id'];
if (isset($_POST['BtnSubmit'])) {
$FirstName = mysqli_real_escape_string($conn,$_POST['TxtFirstName']);
$LastName = mysqli_real_escape_string($conn,$_POST['TxtLastName']);
$Contact = mysqli_real_escape_string($conn,$_POST['TxtContact']);

$UpdateQuery = "UPDATE admin_table SET firstname = '$FirstName', ".
" lastname = '$LastName', email = '$Contact' WHERE id = $ID";
$Result = mysqli_query($conn, $UpdateQuery);
if ($Result) {
?>
    <script>
        alert("Successfully Updated");
        window.location.href= "admins.php";

    </script>
<?php 
} else {
        die("Updation Failed");
    }
}
?>
<!--
************************************************************************************************
                        Facile Solutions (UK)
                        Development Date : 14-11-2017
                        Development Date   : 28-07-2022
************************************************************************************************
-->
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
                        <div class="card-body">
                        <?php
                            
                            $Query = "SELECT * FROM admin_table WHERE id = $ID ";
                            $display_run_id = mysqli_query($conn, $Query);
                            if (mysqli_num_rows($display_run_id) > 0) {
                            $row = mysqli_fetch_assoc($display_run_id);
                        ?>
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="p-0">
                                     <form class="user" method="post">
                                        <div class="form-group">
                                            <Label>First Name</Label>
                                            <input type="text" class="form-control form-control-user"
                                            placeholder="Enter  First Name" name="TxtFirstName" required="" value="<?php echo $row['firstname'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <Label>Last Name</Label>    
                                            <input type="text" class="form-control form-control-user"
                                                name="TxtLastName" placeholder="Enter Last Name" required="" value="<?php echo $row['lastname'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <Label>Contact Number</Label>    
                                            <input type="text" class="form-control form-control-user"
                                                name="TxtContact" placeholder="Enter Contact Number" required="" value="<?php echo $row['email'] ?>">
                                        </div>
                                        <input type="submit" name="BtnSubmit" class="btn btn-primary btn-user btn-block" value="Update Admin">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
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

<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/kleon/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Oct 2023 14:14:39 GMT -->
</html>