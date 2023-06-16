<?php
session_start();

// Check if the user is logged in, redirect to user_login if not
if (!isset($_SESSION['user_id'])) {
    header("Location: user_login.php");
    exit();
}

// Include the database connection file
// require_once 'BusinessService/Model/db_connection.php';
require_once 'C:\xampp\htdocs\MakeItHalal\BusinessService\Model\db_connection.php';

// Get the user profile based on the user ID stored in the session
$stmt = $pdo->prepare("SELECT * FROM user_profile WHERE user_ID = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Incentives - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="Public\Style\user_style.css">
    <link rel="stylesheet" type="text/css" href="Public\Style\user_incentive.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="Public\images\logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">               
                <h1>Sistem Maklumat Perkahwinan Islam Pahang</h1>
                <!-- Display user information -->
                <?php
                    echo "<p>Hello, " . $user['user_username'] . " !</p>";
                ?>   
            </div>
            <div class="right-logo-container">
            <img src="Public\images\logo_make_it_halal.png" alt="Logo" class="right-logo">
            </div>
        </div>
    </header>
  
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">User Profile</a>
        <div class="dropdown">
            <button class="dropbtn">Wedding
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Kebenaran Berkahwin</a>
                <a href="#">Pendaftaran Nikah</a>
                <a href="#">example</a>
        </div>
        </div>
            <div class="dropdown active-button">
            <button class="dropbtn ">Incentives
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="active" href="user_incentive.php">Incentive</a>
                <a href="App/ManageIncentive/user_incentive_application.php">Incentives Application</a>
                <a href="user_incentive_status.php">Status</a>
            </div>
        </div>
        <a class="logout" href="user_logout.php">Logout</a>
    </div>
  
    
    <div class="container">
    <section id="application">
        <h2>Syarat Kelayakan Insentif Khas Pasangan Pengantin yang Berdaftar di Negeri Pahang</h2>
        <p>Insentif ini disediakan untuk pasangan yang pengantin lelakinya berpendapatan RM5000.00 dan ke bawah tertakluk kepada syarat-syarat dan garis panduan yang ditentukan.</p>
        <p>Hanya anak-anak Pahang sahaja yang layak menerima insentif ini. Samada pengantin lelaki atau perempuan mestilah anak kelahiran Negeri Pahang.</p>
        <p>Pasangan pengantin yang mana pengantin lelaki sahaja berpendapatan RM5000.00 dan ke bawah layak menerima insentif.</p>
        <p>Bagi perkahwinan di luar negeri Pahang, pengantin lelaki mestilah anak kelahiran Pahang (Kebenaran Luar Negeri (KBLN)).</p>
        <p>Perkahwinan ini mestilah didaftarkan di Negeri Pahang dengan Kebenaran Pejabat Agama Islam Daerah.</p>
        <p>Perkahwinan anak Pahang yang didaftarkan di luar negeri Pahang, pengantin perlu membuat permohonan dan pengesahan di Pejabat Agama Islam (dimana tempat permohonan).</p>
        <p>Bagi pemastautin di negeri Pahang sekurang-kurangnya 10 tahun atau lebih, perlu mendapatkan pengesahan dari Penghulu/ADUN Kawasan/pengurus FELDA/Imam Qaryah atau Penyelaras.</p>
        <p>Duda atau Janda atau salah seorang yang mana pasangannya adalah anak negeri Pahang dan berkelayakan, perkahwinan kali pertama dengan pasangan yang lain, layak untuk menerima insentif.</p>
        <p>Setiap permohonan perlu hantar ke Pejabat Agama Islam Daerah di mana Permohonan Kebenaran atau Pendaftaran Perkahwinan di buat.</p>
    </section>

    <section id="document">
        <h2>Dokumen Diperlukan</h2>
        <p>Permohonan mestilah disertakan dengan:</p>
        <ul>
            <li>2 Salinan Kad Pengenalan pemohon (depan dan belakang).</li>
            <li>1 Salinan catatan akad nikah pemohon.</li>
            <li>2 Salinan penyata akaun bank pemohon.</li>
        </ul>
    </section>

    <section id="contact">
        <h2>Hubungi Kami</h2>
        <p>Bahagian Undang-Undang Keluarga Islam Pahang</p>
        <p>Jabatan Agama Islam Pahang</p>
        <p>Tel: 09-42711111</p>
    </section>

    <div class="apply-now-button">
        <a href="user_incentive_application.php" class="button">Apply Now</a>
    </div>

    <br>
    </div>
  
    <footer>
    <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved. CB21110</p>
    </footer>
</body>
</html>
