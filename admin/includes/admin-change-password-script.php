<?php
include('../../includes/database-helper.php');
if (isset($_POST['BtnSubmit'])) {
    session_start();
    $ID = $_SESSION['id'];
    $currentPassword = mysqli_real_escape_string($conn, $_POST['TxtCurrentPassword']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['TxtNewPassword']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['TxtConfirmPassword']);
    $getAdminQuery = "SELECT * FROM `admin_table` WHERE id = $ID";
    $getAdminResult = mysqli_query($conn, $getAdminQuery);
    $admin = mysqli_fetch_object($getAdminResult);

    if ($currentPassword != $admin->password) {
        ?>
        <script>
            alert("Current password does not match!");
            window.location.href = '../admin-change-password.php'
        </script>
        <?php
    } elseif ($newPassword != $confirmPassword) {
        ?>
        <script>
            alert("Confirm Password does not match!");
            window.location.href = '../admin-change-password.php'
        </script>
        <?php
    } elseif ($newPassword == $currentPassword) {
        ?>
        <script>
            alert("New Password cannot be the same as the old password");
            window.location.href = '../admin-change-password.php'
        </script>
        <?php
    } else {
        $securePassword = md5($newPassword);
        $updatePassQuery = "UPDATE admin_table SET password='$newPassword' , securepassword = '$securePassword' WHERE id=$ID;";

        if (mysqli_query($conn, $updatePassQuery)) {
            ?>
            <script>
                alert('Password Updated Successfully');
                window.location.href = '../admins.php';
            </script>
            <?php
        }
    }
}
?>