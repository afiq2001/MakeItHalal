<?php
include '../../BusinessService/Model/Register_check.php';
session_start();

 if(isset($_POST['submit'])){

    $username = $_POST['user_IC'];  
    $password = $_POST['user_password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from user_profile where user_IC = '$username' and user_password = '$password'";  
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
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="../../Public/style/admin_login.css">
</head>
<body>
  <div class="container">
    <img src="../image/logo_jaip.png" alt="Logo" class="logo">
    <h1 class="title">Admin Login</h1>
    <form>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>

      <div class="text-center text-lg-start mt-4 pt-2">

          <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #c8ad7f;">Login</button>
          <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="RegistrationView.php" class="link-danger">Register</a></p> -->
          <p class="small fw-bold mt-2 pt-1 mb-0">Are you an admin? <a href="AdminLoginView.php" class="link-danger">Click me</a></p>
        </div>
        
    </form>
  </div>

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

