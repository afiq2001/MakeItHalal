<?php
session_start();

// Check if the user is logged in, redirect to user_login if not
if (!isset($_SESSION['user_id'])) {
    header("Location: user_login.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get the input values from the form
    $occupation = $_POST['occupation'];
    $negeri = $_POST['negeri'];
    $othersNegeri = $_POST['others_negeri'];
    $incentiveDate = $_POST['incentive_app_date'];

    // Get the file content
    $icDocumentContent = file_get_contents($_FILES['ic_document']['tmp_name']);
    $bankStatementContent = file_get_contents($_FILES['bank_statement']['tmp_name']);
    $nikahContent = file_get_contents($_FILES['nikah']['tmp_name']);
    $incentiveFormContent = file_get_contents($_FILES['incentive_form']['tmp_name']);
    $employerDocumentContent = file_get_contents($_FILES['employer_document']['tmp_name']);

    // Insert the data into the database
    $stmt = $pdo->prepare("INSERT INTO user_incentive (user_ID, occupation, negeri, others_negeri, ic_document, bank_statement, nikah, incentive_form, employer_document, incentive_app_date, incentive_status) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $userID);
    $stmt->bindParam(2, $occupation);
    $stmt->bindParam(3, $negeri);
    $stmt->bindParam(4, $othersNegeri);
    $stmt->bindParam(5, $icDocumentContent, PDO::PARAM_LOB);
    $stmt->bindParam(6, $bankStatementContent, PDO::PARAM_LOB);
    $stmt->bindParam(7, $nikahContent, PDO::PARAM_LOB);
    $stmt->bindParam(8, $incentiveFormContent, PDO::PARAM_LOB);
    $stmt->bindParam(9, $employerDocumentContent, PDO::PARAM_LOB);
    $stmt->bindParam(10, $incentiveDate);
    $stmt->bindValue(11, "Waiting for approval");
    $stmt->execute();

    // Redirect the user after a successful upload
    header("Location: user_incentive_status.php");
    exit();
}
?>
