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

// Get the application ID from the form submission
$applicationID = $_POST['application_id'];

// Retrieve the application data from the database
$stmt = $pdo->prepare("SELECT * FROM user_incentive WHERE user_ID = ? AND incentive_ID = ?");
$stmt->execute([$userID, $applicationID]);
$application = $stmt->fetch(PDO::FETCH_ASSOC);

// Redirect if the application doesn't belong to the user or doesn't exist
if (!$application) {
    header("Location: user_incentive.php");
    exit();
}

// Get the updated values from the form submission
$occupation = $_POST['occupation'];
$negeri = $_POST['negeri'];
$incentive_app_date = $_POST['incentiveDate'];

// Update the application in the database
$stmt = $pdo->prepare("UPDATE user_incentive SET occupation = ?, negeri = ?, incentive_app_date = ? WHERE user_ID = ? AND incentive_ID = ?");
$stmt->execute([$occupation, $negeri, $incentive_app_date, $userID, $applicationID ]);

// Redirect the user back to the incentives application page
header("Location: ../../../App/ManageIncentive/user_incentive_status.php");
exit();
?>
