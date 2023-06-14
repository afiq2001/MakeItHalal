<!--<?php
// session_start();

// if (!isset($_SESSION['noIC'])) {
    // header("Location: MarriageReq.php");
    // exit();
// }

// $noIC = $_SESSION['noIC'];

// include "db_conn.php";

// Retrieve data from spouseinfo table
// $spouseInfoSql = "SELECT noIC, nama, nosijil FROM spouseinfo WHERE noIC = '$noIC'";
// $spouseInfoResult = mysqli_query($conn, $spouseInfoSql);
// $spouseInfoRow = mysqli_fetch_assoc($spouseInfoResult);

// Retrieve data from marriageinfo table
// $marriageInfoSql = "SELECT datereq, country FROM marriageinfo WHERE noIC = '$noIC'";
// $marriageInfoResult = mysqli_query($conn, $marriageInfoSql);
// $marriageInfoRow = mysqli_fetch_assoc($marriageInfoResult);

// mysqli_close($conn);
?> -->
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Admin Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-JIcROw0wKgDhCxNS7iB+lptS+VGgTT+Ox2EMT0GNZuc8OqRdlN7s2VadafCwuZxTYUgJvO/jQoMZjsL9Zy08dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <div class="header-content">
            <img src="../../Public/images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">
                <h1>Welcome to Sistem Maklumat Perkahwinan Islam Pahang</h1>
            </div>
        </div>
    </header>

    <div  class="admin-navbar">
        <a href="adminaddcourse.php">Home</a>
        <a href="#">User Management</a>
        <a href="../../ManageUserMarriageRequest/view/RequestMarriage.php">Kebenaran Berkahwin</a>
        <a href="../../ManageUserPreparationCourse/view/Courseapplication.php">Kursus Kahwin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>

    <div class="container">
        <section id="Content">
            <h2>PERKAHWINAN</h2>
            <div class="card text-center">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a style="background-color:#FEA1A1;" class="nav-link active" aria-current="true" href="../ManageUserMarriageRequest/RequestMarriage.php">PERMOHONAN BERKAHWIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="../ManageUserPreparationCourse/Courseapplication.php">KURSUS KAHWIN</a>
                    </li>
                </ul>
                <br>
                <div class="container text-center">
                    <div class="container text-center">
                        <h4>Nombor KP Pasangan :</h4>
                        <input style="width:200px;">
                        <a style="background-color:#FEA1A1; margin-right:20px;" class="btn">Cari</a>
                        <a style="background-color:#FEA1A1; margin-right:20px;" href="../../ManageUserMarriageRequest/view/Aplicantinfo.php" class="btn">Daftar Baru</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Bil</th>
                                <th>KP/Nama Pasangan</th>
                                <th>No Slip Permohonan</th>
                                <th>Tarikh Mohon</th>
                                <th>Status</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-primary">Edit</a>
                                    <a class="btn btn-primary">Download</a>
                                    <a class="btn btn-primary">Delete</a>
                                    <a class="btn btn-primary">Submit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-body">
                        <br>
                        <div class="card-footer text-body-secondary">
                            MAKE IT HALAL
                        </div>
                    </div>
                    <!-- Your admin content goes here -->
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-hPjPitmd9FESomwLMkOSkh3lpZmI81myyKATcK/rBZIT6MBH0FQPBVGrUNwm7ScB"
        crossorigin="anonymous"></script>
</body>

</html>