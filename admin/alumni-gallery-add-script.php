<!--
************************************************************************************************
                        Government College Sahiwal Alumni Portal
                        Developer Name : Muhammad Jamil
                        Development Date   : 28-07-2022
************************************************************************************************
-->
<?php
include("includes/DatabaseHelper.php");
if(isset($_REQUEST['BtnSubmit']))
{
    $Title = mysqli_real_escape_string($conn, $_POST['TxtTitle']);
    
    // Start Image Upoloading Module
    $FileInfoOne = PATHINFO($_FILES["ImgOne"]["name"]);
    $NewFileNameOne = $FileInfoOne['filename'] ."_". time() . "." . $FileInfoOne['extension'];
    move_uploaded_file($_FILES["ImgOne"]["tmp_name"],"uploads/" . $NewFileNameOne);
    $LocationOne = "uploads/" . $NewFileNameOne;
    // End Image Upoloading Module
    //Max ID Finding
    $MySqlCommand = "SELECT MAX(id) FROM gallery";
    $Result = mysqli_query($conn, $MySqlCommand);
    $MaxID = mysqli_fetch_array($Result);
    $ID = $MaxID['0'];
    $ID = $ID + 1;
    $TodayDate = date("Ymd");
    $Reference =  $TodayDate . "_" . str_pad($ID, 6, "0", STR_PAD_LEFT);
    $Status = 1;
    $LastModified = date("l jS F Y h:i:s A");
     $Query = "INSERT INTO gallery (id, reference, name,  status, source, lastedit) ".
     " VALUES($ID, '$Reference', '$Title', '$Status', '$LocationOne', '$LastModified')";
   //   echo $Query; die;
   $Result = mysqli_query($conn, $Query);
   if ($Result) {
?>
   <script>
       alert('Success');
       window.location.href='alumni-gallery.php?success';
   </script>
<?php
   } else {
?>
   <script>
       alert('Failed');
       window.location.href='alumni-gallery-add.php?error';
   </script>
<?php
   }
}

?>