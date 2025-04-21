<!--
************************************************************************************************
                        Facile Solutions (UK)
                        Development Date : 14-11-2017
                        Development Date   : 28-07-2022
************************************************************************************************
-->
<?php
include("includes/DatabaseHelper.php");
if(isset($_REQUEST['BtnSubmit']))
{
    $FirstName = mysqli_real_escape_string($conn, $_POST['TxtFirstName']);
    $LastName = mysqli_real_escape_string($conn, $_POST['TxtLastName']);
    $Contact = mysqli_real_escape_string($conn, $_POST['TxtContact']);
    $Email = mysqli_real_escape_string($conn, $_POST['TxtEmail']);
    $Password = mysqli_real_escape_string($conn, $_POST['TxtPassword']);
    $SecurePassword = md5($Password);
    $ConfirmPassword = mysqli_real_escape_string($conn, $_POST['TxtConfirmPassword']);
    $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
    $TokenKey = str_shuffle($TokenKey);
    $TokenKey = substr($TokenKey, 0, 32);
    $MySqlCommand = "SELECT MAX(id) FROM admin_table";
    $Result = mysqli_query($conn, $MySqlCommand);
    $MaxID = mysqli_fetch_array($Result);
    $UserID = $MaxID['0'];
    $UserID = $UserID + 1;
    $TodayDate = date("Ymd"); //231204
    $Reference =  $TodayDate . "_" . str_pad($UserID, 8, "0", STR_PAD_LEFT);
    $Status = 1;
    $IP = $_SERVER['REMOTE_ADDR'];
    $CheckUser = "SELECT * FROM admin_table WHERE username = '$Email'";
    $CheckQuery = mysqli_query($conn, $CheckUser);
    if (mysqli_num_rows($CheckQuery) > 0) {
?>
        <script>
            alert('This Email is Already Registered');
            window.location.href='admin-add.php?error';
        </script>
<?php
 } else {
     $Query = "INSERT INTO admin_table (id, reference, firstname, lastname, username, ".
     " email, securepassword, password, status, accesstoken, ipaddress) ".
     "VALUES($UserID, '$Reference', '$FirstName', '$LastName', '$Email',".
     " '$Contact', '$SecurePassword', '$Password', '$Status', '$TokenKey', '$IP')";
//    echo $Query; die;
   $Result = mysqli_query($conn, $Query);
   if ($Result) {
?>
   <script>
       alert('Admin Registration Success');
       window.location.href='admins.php?success';
   </script>
<?php
   } else {
?>
   <script>
       alert('Admin Registration Failed');
       window.location.href='admin-add.php?error';
   </script>
<?php
   }
}
}
?>