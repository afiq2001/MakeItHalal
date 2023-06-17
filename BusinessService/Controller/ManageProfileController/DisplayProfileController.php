<?php
    include '../../../config.php';
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>

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
                    $user_ID = $user['user_ID'];
                    $user_name = $user['user_name'];
                    $user_IC = $user['user_IC'];
                    $user_phoneNum = $user['user_phoneNum'];
                    $user_city = $user['user_city'];
                    $user_gender = $user['user_gender'];
                    $user_email = $user['user_email'];
                    $user_type = $user['user_type'];
                    $user_password = $user['user_password'];
                    

                    echo "<div class='user-details'>";
                    echo "<h2>User Details</h2>";
                    echo "<table>";
                    echo "<style='margin-bottom: 10px;'><tr><th>Name:</th><td>$user_name</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>Email:</th><td>$user_email</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>IC_Number:</th><td>$user_IC</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>Mobile_Number:</th><td>$user_phoneNum</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>City:</th><td>$user_city</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>Gender:</th><td>$user_gender</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>roleSelect:</th><td>$user_type</td></tr>";
                    echo "<style='margin-bottom: 10px;'><tr><th>Password:</th><td>$user_password</td></tr>";
                    echo "</table>";
                    echo "</div>";
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
            background-color: #f5f5dc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center; /* Added */
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
