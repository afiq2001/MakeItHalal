<?php
    include '../../../config.php';

// Check if the form is submitted with user details
if (isset($_POST['user_ID']) && isset($_POST['user_name']) && isset($_POST['user_email'])) {
    $user_ID = $_POST['user_ID'];
    $user_name = $_POST["user_name"];
    $user_ic = $_POST["user_ic"];
    $user_phone = $_POST["user_phone"];
    $user_city = $_POST["user_city"];
    $user_gender = $_POST["user_gender"];
    $user_email = $_POST["user_email"];
    $user_type = $_POST["user_type"];
    $user_password = $_POST["user_password"];

    // Update the user information in the database
    $query = "UPDATE user_profile SET user_name = '$user_name', user_email = '$user_email', user_ic = '$user_ic', 
    user_phone = '$user_phone', user_city = '$user_city', user_gender = '$user_gender',
    user_type = '$user_type', user_password = '$user_password' WHERE user_ID = $user_ID";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('User information updated successfully.'); window.location.href = '../../../App/ManageAccountView/AdminPageView.php';</script>";
    } else {
        echo "<script>alert('Error updating user information: ' + mysqli_error($conn));</script>";
    } 
} else {
    echo "<script>alert('Invalid request.');</script>";
}

mysqli_close($conn);
?>
