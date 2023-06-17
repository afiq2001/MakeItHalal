<?php
    include '../../../config.php';
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    
</head>

    
<body>
    <div class="container">
        
        <?php
            // Check if the user ID is provided
            if (isset($_GET['user_ID'])) {
                $user_ID = $_GET['user_ID'];

                // Fetch the user information from the database
                $query = "SELECT * FROM user_profile WHERE user_ID = $user_ID";
                $result = mysqli_query($conn, $query);

                // Check if the user exists
                if (mysqli_num_rows($result) > 0) {
                    $user = mysqli_fetch_assoc($result);
                    $user_name = $user['user_name'];
                    $user_IC = $user['user_IC'];
                    $user_phoneNum = $user['user_phoneNum'];
                    $user_city = $user['user_city'];
                    $user_gender = $user['user_gender'];
                    $user_email = $user['user_email'];
                    $user_type = $user['user_type'];
                    $user_password = $user['user_password'];

                    echo "<form method='post' action='UpdateProfileController.php'>";
                    echo "<div class='form-group'>";
                    echo "<label for='user_name'>Name:</label>";
                    echo "<input type='text' name='user_name' user_ID='user_name' value='$user_name'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_email'>Email:</label>";
                    echo "<input type='text' name='user_email' user_ID='user_email' value='$user_email'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_IC'>IC:</label>";
                    echo "<input type='text' name='user_IC' user_ID='user_IC' value='$user_IC'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_phoneNum'>Mobile Number:</label>";
                    echo "<input type='text' name='user_phoneNum' user_ID='user_phoneNum' value='$user_phoneNum'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_city'>City:</label>";
                    echo "<input type='text' name='user_city' user_ID='user_city' value='$user_city'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_gender'>Gender:</label>";
                    echo "<input type='text' name='user_gender' user_ID='user_gender' value='$user_gender'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_type'>roleSelect:</label>";
                    echo "<input type='text' name='user_type' user_ID='user_type' value='$user_type'>";
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo "<label for='user_password'>Password:</label>";
                    echo "<input type='text' name='user_password' user_ID='user_password' value='$user_password'>";
                    echo "</div>";
                    
                    echo "<input type='hidden' name='user_ID' value='$user_ID'>";
                    echo "<div class='form-group'>";
                    echo "<input type='submit' value='Update' class='btn'>";
                    echo "</div>";
                    echo "</form>";
                } else {
                    echo "<p>User not found.</p>";
                }
            } else {
                echo "<p>Invalid request.</p>";
            }

            mysqli_close($conn);
        ?>
    </div>

    
    <form action="../../../App/ManageAccountView/AdminPageView.php" method="POST">
    <div style="text-align: center;">
            <input type="submit" value="Back">
        </form>
        
</body>




<style>
    body {
        background-color: #f2eee7;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        background-color: beige; /* Updated background color to beige */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #8b4513;
        color: #ffffff;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #a0522d;
    }

    p.error-message {
        color: red;
        margin-top: 10px;
    }
</style>

</html>
