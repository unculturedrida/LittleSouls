<?php include("includes/DatabaseHelper.php"); ?>

<!--
************************************************************************************************
                        Facile Solutions (UK)
                        Development Date : 14-11-2017
                        Development Date   : 28-07-2022
************************************************************************************************
-->
<?php
    $ID = $_GET['id'];
    // echo $ID;
    $SqlCommand = "DELETE FROM admin_table WHERE id = '$ID' ";
    // echo $SqlCommand;
    // die;
    $result = mysqli_query($conn, $SqlCommand);
    if($result)
    {
    ?>
        <script>
            alert("Successfully Deleted");
            window.location.href= "admins.php";
        </script>
    <?php 
    }
    else
    {
    ?>
        <script>
            alert("Failed");
            window.location.href= "admins.php?failed";
        </script>
    <?php 
    }		
?>