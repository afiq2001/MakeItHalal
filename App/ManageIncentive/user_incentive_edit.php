<?php
session_start();

// Check if the user is logged in, redirect to user_login if not
if (!isset($_SESSION['user_id'])) {
    header("Location: user_login.php");
    exit();
}

// Define the file names to check
$file1 = 'C:\xampp\htdocs\MakeItHalal\BusinessService\Model\db_connection.php';
$file2 = 'C:\xampp\htdocs\MakeItHalal\BusinessService\Model\db_conn.php';

// Check if the first file is available
if (file_exists($file1)) {
    require_once $file1;
} elseif (file_exists($file2)) { // If the first file is not available, check the second file
    require_once $file2;
} else { // If neither file is available, handle the error or provide an appropriate fallback
    echo 'No database connection file available.';
    // You can handle the error or provide a fallback solution here
}

// Get the user ID from the session or wherever you store it
$userID = $_SESSION['user_id'];

// Get the application ID from the query parameters
$applicationID = $_GET['application_id'];

// Get the user profile based on the user ID stored in the session
$stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_ID = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Retrieve the application data from the database
$stmt = $pdo->prepare("SELECT * FROM user_incentive WHERE user_ID = ? AND incentive_ID = ?");
$stmt->execute([$userID, $applicationID]);
$application = $stmt->fetch(PDO::FETCH_ASSOC);

// Redirect if the application doesn't belong to the user or doesn't exist
if (!$application) {
    header("Location: user_incentive.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Incentive Application</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/user_style.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Style/user_incentive.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="../../Public/images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">               
                <h1>Sistem Maklumat Perkahwinan Islam Pahang</h1>
                <!-- Display user information -->
                <?php
                    echo "<p>Hello, " . $user['user_username'] . " !</p>";
                ?>   
            </div>
            <div class="right-logo-container">
            <img src="../../Public/images/logo_make_it_halal.png" alt="Logo" class="right-logo">
            </div>
        </div>
    </header>
  
    <!-- navigation bar start here -->
    <div class="navbar">
        <a href="">Home</a>
        <a href="#">User Management</a>
        <a href="../ManageUserPreparationCourse/Courseapplication.php">Kursus Kahwin</a>
        <a href="">list</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <div class="dropdown active-button">
            <button class="dropbtn ">Incentives
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="user_incentive_dashboard.php">Incentive</a>
                <a href="user_incentive_application.php">Incentives Application</a>
                <a href="user_incentive_status.php">Status</a>
            </div>
        </div>
        <a class="logout" href="user_logout.php">Logout</a>
    </div>

    <h1>Edit Incentive Application</h1>

    <!-- Display the form with pre-filled values -->
    <form action="../../BusinessService/Model/ManageIncentiveModel/user_incentive_update.php" method="POST">
    <label for="details">Applicant IC:</label>
            <input type="text" id="details" name="details" value="<?php echo $user['user_IC']; ?>" disabled>

            <label for="details">Applicant name:</label>
            <input type="text" id="details" name="details" value="<?php echo $user['user_name']; ?>" disabled>
        <input type="hidden" name="application_id" value="<?php echo $application['incentive_ID']; ?>">
        <div class="form-group">
            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" value="<?php echo $application['occupation']; ?>">
        </div>
        <div class="form-group">
            <label for="negeri">State:</label>
            <input type="text" id="negeri" name="negeri" value="<?php echo $application['negeri']; ?>">
        </div>
        <!-- hidden input -->
        <input type="hidden" id="incentiveDate" name="incentiveDate" value="<?php echo date('Y-m-d H:i:s'); ?>">


        <button type="submit">Update</button>
    </form>
</body>
</html>
