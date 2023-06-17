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

?>

<!DOCTYPE html>
<html>
<head>
    <title>Incentive Application - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/user_style.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Style/user_incentive.css">
    <script src="../../Public/Script/user_incentive_application.js"></script>
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
        <a href="#">Home</a>
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
                <a class="active" href="user_incentive.php">Incentives Application</a>
                <a href="user_incentive_status.php">Status</a>
            </div>
        </div>
        <a class="logout" href="user_logout.php">Logout</a>
    </div>

    <div class="container">
        <section id="user-info">     
            <h2>Permohonan Insentif Khas Pasangan Pengantin</h2>
            <h3>User Details</h3>
            <form action="user_incentive_upload.php" method="POST" enctype="multipart/form-data">
            <label for="details">Applicant IC:</label>
            <input type="text" id="details" name="details" value="<?php echo $user['user_IC']; ?>" disabled>

            <label for="details">Applicant name:</label>
            <input type="text" id="details" name="details" value="<?php echo $user['user_name']; ?>" disabled>

            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" value="Angkasawan Negara" required>

            <label for="negeri">Negeri:</label>
            <select id="negeri" name="negeri" required onchange="toggleOthersNegeri()">
                <option value="" disabled selected>Select Negeri</option>
                <option value="Johor">Johor</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Melaka">Melaka</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Pahang">Pahang</option>
                <option value="Perak">Perak</option>
                <option value="Perlis">Perlis</option>
                <option value="Pulau Pinang">Pulau Pinang</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Selangor">Selangor</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                <option value="Others">Others</option>
            </select>
            <br>

            <label for="others_negeri" id="others_negeri_label" style="display: none;">Others Negeri:</label>
            <input type="text" id="others_negeri" name="others_negeri" style="display: none;">

            <br>
            <hr>
            <h3>Additional Documents</h3>

            <label for="ic_document">IC Document:</label>
            <?php if ($user['user_IC_doc']): ?>
                <p>Existing File: <?php echo $user['user_IC_doc']; ?></p>
                <label><input type="checkbox" name="replace_user_IC_doc"> Replace File</label>
            <?php else: ?>
                <p>File not yet uploaded</p>
            <?php endif; ?>
            <input type="file" id="ic_document" name="ic_document" accept=".pdf">

            <label for="bank_statement">Penyata Bank:</label>
            <?php if ($user['user_bank_doc']): ?>
                <p>Existing File: <?php echo $user['user_bank_doc']; ?></p>
                <label><input type="checkbox" name="replace_user_bank_doc"> Replace File</label>
            <?php else: ?>
                <p>File not yet uploaded</p>
            <?php endif; ?>
            <input type="file" id="bank_statement" name="bank_statement" accept=".pdf">

            <label for="nikah">Akad Nikah:</label>
            <?php if ($user['user_nikah_doc']): ?>
                <p>Existing File: <?php echo $user['user_nikah_doc']; ?></p>
                <label><input type="checkbox" name="replace_user_nikah_doc"> Replace File</label>
            <?php else: ?>
                <p>File not yet uploaded</p>
            <?php endif; ?>
            <input type="file" id="nikah" name="nikah" accept=".pdf">

            <label for="incentive_form">Borang Insentif:</label>
            <?php if ($user['user_incentive_doc']): ?>
                <p>Existing File: <?php echo $user['user_incentive_doc']; ?></p>
                <label><input type="checkbox" name="replace_user_incentive_doc"> Replace File</label>
            <?php else: ?>
                <p>File not yet uploaded</p>
            <?php endif; ?>
            <input type="file" id="incentive_form" name="incentive_form" accept=".pdf">

            <label for="employer_document">Majikan:</label>
            <?php if ($user['user_employer_doc']): ?>
                <p>Existing File: <?php echo $user['user_employer_doc']; ?></p>
                <label><input type="checkbox" name="replace_user_employer_doc"> Replace File</label>
            <?php else: ?>
                <p>File not yet uploaded</p>
            <?php endif; ?>
            <input type="file" id="employer_document" name="employer_document" accept=".pdf">

            <!-- hidden input -->
            <input type="hidden" id="incentive_app_date" name="incentive_app_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
            <input type="hidden" id="incentive_app_status" name="incentive_app_status" value="Waiting for approval">

            <!-- submit -->
            <input type="submit" value="Submit Application">
        </form>

        </section>
    </div>
  
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved. CB21110</p>
    </footer>
</body>
</html>
