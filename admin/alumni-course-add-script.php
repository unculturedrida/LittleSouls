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
    $NewsDetails = mysqli_real_escape_string($conn, $_POST['TxtNewsDetails']);
    $PostBy = mysqli_real_escape_string($conn, $_POST['TxtPostBy']);
    $Link = mysqli_real_escape_string($conn, $_POST['TxtLink']);
    
    $FileInfoOne = PATHINFO($_FILES["ImgOne"]["name"]);
    $NewFileNameOne = $FileInfoOne['filename'] ."_". time() . "." . $FileInfoOne['extension'];
    move_uploaded_file($_FILES["ImgOne"]["tmp_name"], "uploads/" . $NewFileNameOne);
    $LocationOne = "uploads/" . $NewFileNameOne;
        
    $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
    $TokenKey = str_shuffle($TokenKey);
    $TokenKey = substr($TokenKey, 0, 32);

    $MySqlCommand = "SELECT MAX(id) FROM courses";
    $Result = mysqli_query($conn, $MySqlCommand);
    $MaxID = mysqli_fetch_array($Result);
    $ID = $MaxID['0'];
    $ID = $ID + 1;
    $TodayDate = date("Ymd");
    $NewsDate = date("d-m-Y");
    $Reference =  $TodayDate . "_" . str_pad($ID, 6, "0", STR_PAD_LEFT);
    $Status = 1;
    $LastModified = date("l jS F Y h:i:s A");
     $Query = "INSERT INTO courses(id, reference, newstitle, newsdesc, ".
     " newspostby, link, newsdate, image, newsstatus, lastedit, token) ".
     " VALUES($ID, '$Reference', '$Title', '$NewsDetails', '$PostBy', '$Link', ".
     " '$NewsDate', '$LocationOne', '$Status', '$LastModified', '$TokenKey')";
    //   echo $Query; die;
   $Result = mysqli_query($conn, $Query);
   if ($Result) {
?>
   <script>
       alert('Course Added Successfully');
       window.location.href='alumni-courses.php?success';
   </script>
<?php
   } else {
?>
   <script>
       alert('Exception Found While Adding This Event');
       window.location.href='alumni-course-add.php?error';
   </script>
<?php
   }
}

?>