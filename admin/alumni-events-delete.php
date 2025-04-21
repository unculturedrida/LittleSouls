<?php include("includes/DatabaseHelper.php"); ?>
<?php// include("include/session.php"); ?>
<!--
************************************************************************************************
                        Government College Sahiwal Alumni Portal
                        Developer Name : Muhammad Jamil
                        Development Date   : 28-07-2022
************************************************************************************************
-->
<?php
    $ID = $_GET['id'];
    //echo $id;
    $SqlCommand = "DELETE FROM events WHERE id = $ID ";
    // echo $SqlCommand;
    // die;
    $result = mysqli_query($conn, $SqlCommand);
    if($result)
    {
    ?>
        <script>
            alert("Record Successfully Deleted");
            window.location.href= "alumni-events.php";
        </script>
    <?php 
    }
    else
    {
    ?>
        <script>
            alert("Failed");
            window.location.href= "alumni-events.php?failed";
        </script>
    <?php 
    }
    		
?>