<?php
include 'C:\xampp\xam\htdocs\MakeItHalal\Register_check.php';

if (isset($_POST["Submit"])) {
    // Retrieve user input from the form
    $user_name = $_POST["user_name"];
    $user_IC = $_POST["user_IC"];
    $user_phoneNum = $_POST["user_phoneNum"];
    $user_city = $_POST["user_city"];
    $user_gender = $_POST["user_gender"];
    $user_email = $_POST["user_email"];
    $user_type = $_POST["user_type"];
    $user_password = $_POST["user_password"];

    if ($user_type == "User" || $user_type == "Staff") {
        // Prepare the SQL statement

        $insert = mysqli_query($conn, "INSERT INTO user_profile (user_name, user_ic, user_phone, user_city, user_gender, user_email, user_type, user_password)
        VALUES ('$user_name', '$user_IC', '$user_phoneNum', '$user_city', '$user_gender', '$user_email', '$user_type', '$user_password')");

            if ($insert) {
                echo "<script>alert('Your Registration has been created successfully');</script>";
                header('Location: MainLoginView.php');
            } else {
                echo "<script>alert('Error: " . $insert . "\\n" . $conn->error . "');</script>";
            }

    } else if ($user_type == "Admin") {
        // Prepare the SQL statement
        $insert = mysqli_query($conn, "INSERT INTO user_profile (user_name, user_ic, user_phone, user_city, user_gender, user_email, user_type, user_password)
        VALUES ('$user_name', '$user_IC', '$user_phoneNum', '$user_city', '$user_gender', '$user_email', '$user_type', '$user_password')");

        if ($insert) {
            echo "<script>alert('Your Registration has been created successfully');</script>";
            header('Location: AdminLoginView.php');

        } else {
            echo "<script>alert('Error: " . $insert . "\\n" . $conn->error . "');</script>";
        }
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../../Public/style/Regs.css">
    </head>

    <script>
        // Function to check if passwords match
        function checkPassword() {
            var user_password = document.getElementById("user_password").value;
            var confirmPassword = document.getElementById("Confirm_Password").value;

            if (user_password !== confirmPassword) {
                document.getElementById("passwordMismatch").style.display = "block";
                return false;
            } else {
                document.getElementById("passwordMismatch").style.display = "none";
                return true;
            }
        }

        // Function to validate the form
        function validateForm() {
            var user_name = document.getElementById("user_name").value;
            var user_IC = document.getElementById("user_IC").value;
            var user_phoneNum = document.getElementById("user_phoneNum").value;
            var user_city = document.getElementById("user_city").value;
            var user_email = document.getElementById("user_email").value;
            var user_type = document.getElementById("user_type").value;
            var user_password = document.getElementById("user_password").value;
            var confirmPassword = document.getElementById("Confirm_Password").value;

            if (user_name === "" || user_IC === "" || user_phoneNum === "" || user_city === "" ||
                user_email === "" || user_type === "" || user_password === "" || confirmPassword === "") {
                alert("Please fill in all fields.");
                return false;
            }

            return checkPassword();
        }
    </script>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="../../Public/images/logo_jaip.png" alt="logo" />
                <h3>Welcome</h3>
                <p>To our E-Munakahat system</p>
                <a href="MainLoginView.php"><input type="submit" name="" value="Login" /></a><br />
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">New Family</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form method="POST" action="" onsubmit="return validateForm();">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_name" id="user_name"
                                            placeholder="Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_ic" id="user_ic"
                                            placeholder="IC Number" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_phone"
                                            id="user_phone" placeholder="Mobile Number" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_city" id="user_city"
                                            placeholder="City" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="user_gender" id="user_gender" value="male"
                                                    checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="user_gender" id="user_gender" value="female">
                                                <span> Female </span>
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="user_email" id="user_email"
                                        placeholder="Email ID" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="user_type" id="user_type">
                                        <option class="hidden" selected disabled>Please select your Role</option>
                                        <option>Admin</option>
                                        <option>Staff</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" minlength="6" name="user_password" class="form-control"
                                        id="user_password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        id="Confirm_Password" />
                                    <small id="passwordMismatch" style="color: red; display: none;">
                                        Your passwords do not match!
                                    </small>
                                </div>
                                <input type="Submit" id="Submit" class="btnRegister" value="Register"
                                    name="Submit" />
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
