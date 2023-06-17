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

// Get the user profile based on the user ID stored in the session
$stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_ID = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Retrieve all incentive applications from the database
$stmt = $pdo->prepare("SELECT * FROM user_incentive");
$stmt->execute();
$applications = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Function to update the incentive status
function updateStatus($applicationID, $status) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE user_incentive SET incentive_status = ? WHERE incentive_ID = ?");
    $stmt->execute([$status, $applicationID]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="../../Public/Images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">               
                <h1>Sistem Maklumat Perkahwinan Islam Pahang</h1>
                <!-- Display user information -->
                <?php
                    echo "<p>Hello, " . $user['user_username'] . " !</p>";
                ?>   
            </div>
            <div class="right-logo-container">
                <img src="../../Public/Images/logo_make_it_halal.png" alt="Logo" class="right-logo">
            </div>
        </div>
    </header>
  
    <div class="admin-navbar navbar">
        <a href="#">Home</a>
        <a href="#">User Management</a>
        <a href="staff_incentive_approval.php" class="active">Incentive</a>
        <a class="logout" href="user_logout.php">Logout</a>
    </div>
  
    <div class="container">
        <section id="Content">
            <h2>Incentive Applications</h2>
            <?php if (empty($applications)): ?>
                <p>No applications found.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Table Number</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>IC Document</th> <!-- New column for IC Document -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($applications as $application): ?>
                            <tr>
                                <td>1</td> <!-- Replace '1' with the desired static table number -->
                                <td><?php echo $application['incentive_app_date']; ?></td>
                                <td><?php echo $application['incentive_status']; ?></td>
                                <!-- Display IC Document -->
                                <td><?php 
                                // echo $application['ic_document']; 
                                ?></td> 
                                <td>
                                    <form action="update_status.php" method="POST">
                                        <input type="hidden" name="application_id" value="<?php echo $application['incentive_ID']; ?>">
                                        <select name="status">
                                            <option value="Pending">Pending</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Disapproved">Disapproved</option>
                                        </select>
                                        <button type="submit">Update</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </div>
  
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.CB21110</p>
    </footer>
</body>
</html>
