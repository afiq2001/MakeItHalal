<?php
session_start();

// Check if the user is logged in, redirect to user_login if not
if (!isset($_SESSION['user_id'])) {
    header("Location: user_login.php");
    exit();
}

// Include the database connection code here
require_once 'database/db_connection.php';

// Check if the application ID is provided in the URL
if (isset($_GET['application_id'])) {
    $applicationID = $_GET['application_id'];

    // Delete the application from the database
    $stmt = $pdo->prepare("DELETE FROM user_incentive WHERE incentive_ID = ?");
    $stmt->execute([$applicationID]);

    // Redirect the user back to the incentive status page
    header("Location: user_incentive_status.php");
    exit();
}
?>
