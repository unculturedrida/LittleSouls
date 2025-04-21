<?php include("includes/DatabaseHelper.php"); ?>
<?php // include("include/session.php"); ?>
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
    $SqlCommand = "DELETE FROM news WHERE id = $ID ";
    // echo $SqlCommand;
    // die;
    $result = mysqli_query($conn, $SqlCommand);
    if($result)
    {
    ?>
        <script>
            alert("News Record Successfully Deleted");
            window.location.href= "alumni-news.php";
        </script>
    <?php 
    }
    else
    {
    ?>
        <script>
            alert("Failed");
            window.location.href= "alumni-news.php?failed";
        </script>
    <?php 
    }
    		
?>