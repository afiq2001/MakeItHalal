<?php
session_start();

// Check if the user is already logged in, redirect to the appropriate homepage if true
if (isset($_SESSION['user_id'])) {
    $userType = $_SESSION['user_type'];
    if ($userType == 'staff') {
        header("Location: staff_dashboard.php");
    } else {
        header("Location: user_incentive_dashboard.php");
    }
    exit();
}

// Define the file names to check
$file1 = 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\db_connection.php';
$file2 = 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\db_conn.php';

// Check if the first file is available
if (file_exists($file1)) {
    require_once $file1;
} elseif (file_exists($file2)) { // If the first file is not available, check the second file
    require_once $file2;
} else { // If neither file is available, handle the error or provide an appropriate fallback
    echo 'No database connection file available.';
    // You can handle the error or provide a fallback solution here
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the login form values
    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    // Fetch user record based on the provided username or email
    $stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_username = ? OR user_email = ?");
    $stmt->execute([$identifier, $identifier]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password
    if ($user && password_verify($password, $user['user_password'])) {
        // Set the user ID and type in the session
        $_SESSION['user_id'] = $user['user_ID'];
        $_SESSION['user_type'] = $user['user_type'];

        // Redirect to the appropriate homepage based on user type
        if ($user['user_type'] == 'Staff') {
            header("Location: staff_dashboard.php");
        } else {
            header("Location: user_incentive_dashboard.php");
        }
        exit();
    } else {
        // Invalid login credentials
        $_SESSION['error_message'] = "Invalid username or password.";
        header("Location: user_login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<p style="color:red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="identifier">Username or Email:</label>
        <input type="text" name="identifier" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="user_registration.php">Register here</a>.</p>
</body>
</html>
