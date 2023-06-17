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

// Get the user profile based on the user ID stored in the session
$stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_ID = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Retrieve the user's incentive applications from the database
$stmt = $pdo->prepare("SELECT * FROM user_incentive WHERE user_ID = ?");
$stmt->execute([$userID]);
$applications = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Incentive Status</title>
    <link rel="stylesheet" type="text/css" href="../../Public/style/user_style.css">
    <link rel="stylesheet" type="text/css" href="../../Public/style/user_incentive.css">
    <link rel="stylesheet" type="text/css" href="../../Public/style/user_incentive_status.css">
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
                <a class="active" href="user_incentive_status.php">Status</a>
            </div>
        </div>
        <a class="logout" href="user_logout.php">Logout</a>
    </div>
    <h1>User Incentive Status</h1>

    <?php if (empty($applications)): ?>
        <p>No applications found.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($applications as $application): ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $application['incentive_app_date']; ?></td>
                        <td><?php echo $application['incentive_status']; ?></td>
                        <td>
                            <a class="edit-button" href="user_incentive_edit.php?application_id=<?php echo $application['incentive_ID']; ?>">Edit</a>
                            <a class="delete-button" href="user_incentive_delete.php?application_id=<?php echo $application['incentive_ID']; ?>" onclick="return confirm('Are you sure you want to delete this application?')">Delete</a>
                        </td>
                    </tr>
                    <?php $counter++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <br>
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved. CB21110</p>
    </footer>
</body>
</html>
