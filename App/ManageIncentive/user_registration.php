<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <?php
    session_start();

    // Check if the user is already logged in, redirect to user_dashboard if true
    if (isset($_SESSION['user_id'])) {
        header("Location: user_dashboard.php");
        exit();
    }

    // Include the database connection file
    require_once 'database/db_connection.php';

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the registration form values
        $ic = $_POST['ic'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $phoneNum = $_POST['phoneNum'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $userType = $_POST['userType'];
        $username = $_POST['username'];

        // Check if the username already exists in the database
        $stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_username = ?");
        $stmt->execute([$username]);
        $existingUsername = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the email already exists in the database
        $stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_email = ?");
        $stmt->execute([$email]);
        $existingEmail = $stmt->fetch(PDO::FETCH_ASSOC);

        // Perform validation on submitted data
        // ...

        // Check if the username or email already exists
        if ($existingUsername) {
            $_SESSION['error_message'] = "Username already exists. Please choose a different username.";
            header("Location: user_registration.php");
            exit();
        }

        if ($existingEmail) {
            $_SESSION['error_message'] = "Email already exists. Please choose a different email.";
            header("Location: user_registration.php");
            exit();
        }

        // Check if the password and confirm password match
        if ($password !== $confirmPassword) {
            $_SESSION['error_message'] = "Password and confirm password do not match.";
            header("Location: user_registration.php");
            exit();
        }

        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement to insert user profile data into the database
        $stmt = $pdo->prepare("INSERT INTO user_profile (user_IC, user_name, user_gender, user_phone, user_email, user_password, user_type, user_username) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Execute the prepared statement with the form values
        $stmt->execute([$ic, $name, $gender, $phoneNum, $email, $hashedPassword, $userType, $username]);

        // Set a success message and redirect to user_login page
        $_SESSION['success_message'] = "Registration successful! Please login.";
        header("Location: user_login.php");
        exit();
    }
    ?>

    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<p style="color:red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <td><label for="ic">IC:</label></td>
                <td><input type="text" name="ic" required></td>
            </tr>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td><input type="text" name="gender" required></td>
            </tr>
            <tr>
                <td><label for="phoneNum">Phone Number:</label></td>
                <td><input type="text" name="phoneNum" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="confirmPassword">Confirm Password:</label></td>
                <td><input type="password" name="confirmPassword" required></td>
            </tr>
            <tr>
                <td><label for="userType">User Type:</label></td>
                <td>
                    <select name="userType" required>
                        <option value="Normal User">Normal User</option>
                        <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
        </table>
        <input type="submit" value="Register">
    </form>
</body>
</html>
