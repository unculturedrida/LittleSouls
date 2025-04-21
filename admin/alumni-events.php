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
                                    <h2 class="text-dark">Events</h2>
                                    <p class="text-gray mb-0"><?php echo constant("HeadTitle"); ?></p>
                                </div>
                                <div class="card-header py-3">
                            <a href="alumni-events-add.php"><button class="btn btn-primary">Add Events</button></a></a>
						</div>
                            </div>

                           
                            
                        </div>

                        <div class="col-xxl-8">
                         
                        <div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Heading</th>
										<th>Posted By</th>
										<th>News Details</th>
										<th>Image</th>
										<th width="160px">Actions</th>
									</tr>
								</thead>
								<tbody>
							<?php
								$query = "SELECT * FROM events";
								$result = mysqli_query($conn, $query);
								if ($result->num_rows > 0) {            
									while($row = mysqli_fetch_array($result))
									{
							?>    
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['newstitle']; ?></td>
											<td><?php echo $row['newspostby']; ?></td>
											<td>
                                                <?php $NewsDetails = $row['newsdesc'];
                                                    if(strlen($NewsDetails)>100){
                                                        $newDetails = substr($NewsDetails,0,100).' ...';
                                                    } else {
														$newDetails = $row['newsdesc'];
													}
													echo $newDetails;
                                                ?>
                                            </td>
											<td><img src="<?php echo $row['image'];?>" height="80px" width="80px"></td>
											<td>
                                                <!-- <a href="alumni-events-edit.php?id=<?php //echo $row['id'];?>"><button class="btn btn-success">Edit</button></a> -->
                                                <a href="alumni-events-delete.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete"><button class="btn btn-danger">Delete</button></a>
                                            </td>
											
									    </tr>
                                    <?php
											}
										}
										else
										{
											echo "No Result Found";
										}
									?>	
								</tbody>
							 </table>
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