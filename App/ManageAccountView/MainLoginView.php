<?php
include '../../Register_check.php';
session_start();

 if(isset($_POST['submit'])){

    $username = $_POST['user_ic'];  
    $password = $_POST['user_password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from user_profile where user_ic = '$username' and user_password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
        if($count == 1){
             $user_ID = $row['user_ID'];
             $user_type = $row['user_type'];
            if($user_type == "User"){
                 header("Location: ../ManageAccountView/UserProfileView.php");
            }      elseif($user_type == "Staff"){
              header("Location: ../php/staffPageView.php");
            } elseif($user_type == "Staff"){
              echo "<script>alert('Login failed. Invalid username or password.');</script>";

        }else {  
            echo "<script>alert('Login failed. Invalid username or password.');</script>";
        }     
 }
}

?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
          <link rel="stylesheet" type="text/css" href="../Public/style/admin_login.css">

      </head>

      <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Public/style/admin_login.css">

    <style>
        .register-left {
            margin-right: -70px; /* Adjust this value to move the logo to the right */
        }
    </style>
</head>

<body style="background-image: url('../../Public/images/background_login.jpg'); background-size: cover; padding-top: 50px; padding-bottom: 50px;">

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="register-left">
                    <img src="../../Public/images/logo_jaip.png" style="width: 300px;" alt="logo" class="img-fluid"
                        alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 form-container">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-bold mb-0 me-3">Welcome To The System</p>
                        <div id="clock" style="font-size: 30px; font-weight: bold; text-align: center;"></div>
                    </div>
                    <br>
                    <form action="" method="POST">
                        <!-- IC_Number input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="user_ic" name="user_ic"
                                class="form-control form-control-lg" placeholder="IC Number" required/>
                            <label class="form-label" for="form3Example3"></label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="user_password" name="user_password"
                                class="form-control form-control-lg" placeholder="Password" required/>
                            <label class="form-label" for="form3Example4"></label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="ResetPasswordView.php" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #c8ad7f;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Are you an admin? <a href="AdminLoginView.php"
                                    class="link-danger">Click me</a></p>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="RegistrationView.php"
                                    class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <center><p><strong>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</strong></p></center>
    </footer>

</body>

</html>

<script>
    function updateClock() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();

        // Add leading zeros if necessary
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // Format the time as desired
        var formattedTime = hours + ":" + minutes + ":" + seconds;

        // Update the clock element with the formatted time
        document.getElementById("clock").textContent = formattedTime;
    }

    // Call the updateClock() function every second
    setInterval(updateClock, 1000);
</script>


<style>
    .form-container {
        margin-left: auto;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin-top: -370px; /* Adjust this value to move the form up */
    }

    .form-row {
        margin-bottom: 0; /* Remove the bottom margin of the row */
    }
</style>