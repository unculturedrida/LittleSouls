<?php
session_start();
include("includes/DatabaseHelper.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Kleon Admin Template">
    <meta name="author" content="">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/png">
    <link href="assets/img/apple-touch-icon.php" rel="apple-touch-icon">
    <link href="assets/img/apple-touch-icon-72x72.php" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/img/apple-touch-icon-114x114.php" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/img/apple-touch-icon-144x144.php" rel="apple-touch-icon" sizes="144x144">
    <link rel="stylesheet" href="assets/css/main.css" id="stylesheet">

</head>

<body class="bg-light">
    <?php include("includes/navbar.php"); ?>
    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Change Password</h2>
                    </div>
                </div>
                <div class="card-body p-0">
                    <form action="includes/admin-change-password-script.php" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="currentPassword" class="form-label">Current Password</label>
                            <input type="text" id="currentPassword" class="form-control" name="TxtCurrentPassword"
                                placeholder="Enter Current Password" required>
                        </div>
                        <div class="form-group">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="text" id="newPassword" class="form-control" name="TxtNewPassword"
                                placeholder="Enter New Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="text" id="confirmPassword" class="form-control" name="TxtConfirmPassword"
                                placeholder="Confirm Password" required>
                        </div>
                        <div>
                            <input type="submit"
                                class="btn btn-dark w-100 text-uppercase text-white rounded-2 lh-34 ff-heading fw-bold shadow"
                                name="BtnSubmit" value="Change Password">
                        </div>
                    </form>
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
    <script src="plugins/apexchart/apexchart-inits/apexcharts-analytics-2.js"></script>

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
    <script src="plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Snippets JS -->
    <script src="assets/js/snippets.js"></script>

    <!-- Theme Custom JS -->
    <script src="assets/js/theme.js"></script>

</body>

</html>