<?php 
include '../../Register_check.php'; // Including external PHP file
session_start(); // Starting session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../Public/style/user_login.css">
</head>

<body style="background-color: #c8ad7f;">
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="../../Public/images/logo_jaip.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">We are E-Munakahat Team</h4>
                                    </div>

                                    <form method="POST" action="">
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="user_IC" id="user_IC" class="form-control" placeholder="IC Number" required />
                                            <label class="form-label" for="user_IC"></label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required />
                                            <label class="form-label" for="user_password"></label>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="background-color: #c8ad7f;">Login</button>
                                            <p></p>
                                            <a class="text-muted" href="ResetPasswordView.php">Forgot Your password?</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="RegistrationView.php"><button type="button" class="btn btn-outline-danger">Create new account</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                            <div class="col-lg-6 d-flex gradient-custom-2">
                                <div class="overlay">
                                    <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4" style="margin-top: 250px;">We are more than just a company</h4>
                                        <p class="small mb-5">E-Munakahat team (EMS) is a web-based platform in Malaysia that facilitates the management of Islamic marriages, providing online registration, divorce, information access, and support services for Muslim citizens in Pahang state.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <center>   <p> <strong> &copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</strong></p>
    </footer>

</body>
</html>

<?php
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Retrieve the submitted username and password
    $username = $_POST['user_IC'];  
    $password = $_POST['user_password'];  
      
    // To prevent SQL injection, escape special characters
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($conn, $username);  
    $password = mysqli_real_escape_string($conn, $password);  
      
    // Query to check if the username and password are valid
    $sql = "select * from user_profile where user_IC = '$username' and user_password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
            
    if ($count == 1) {
        // Retrieve user details
        $user_ID = $row['user_ID'];
        $user_type = $row['user_type'];
        
        // Check the user type and redirect accordingly
        if ($user_type == "Admin") {
            echo "<script> window.location.href='AdminPageView.php';</script>";
        } else {
            echo "<script>alert('Login failed. Invalid username or password.');</script>";
        }
    } else {
        echo "<script>alert('Login failed. Invalid username or password.');</script>";
    }
}
?>
