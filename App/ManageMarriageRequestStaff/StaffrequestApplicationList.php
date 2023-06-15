<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Senarai Mohon Perkahwinan</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../../Public/images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">
                <h1>Welcome to Sistem Maklumat Perkahwinan Islam Pahang</h1>
                <p>Explore our services and manage the system as an admin!</p>
            </div>
        </div>
    </header>

    <div  class="admin-navbar">
        <a href="adminaddcourse.php">Home</a>
        <a href="#">User Management</a>
        <a href="../ManageMarriageRequestStaff/StaffrequestApplicationList.php">Kebenaran Berkahwin</a>
        <a href="../ManagePreparationCourseStaff/Staffapplicationlist.php">Kursus Kahwin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>

    <div class="container">
        <section id="Content">
            <h2>Content</h2>
            <div class="card">
                <div class="card-header" style="background-color:#FDE2F3">
                    <b>SENARAI PERMOHONAN BERKAHWIN</b>
                </div>
                <br>
                <div class="container1">
                    <div class="container">
                        <div>
                            <h5 style="margin-right: 100px;">Kategori :</h5><select style="width: 400px;"
                                class="form-select" aria-label="Default select example">
                                <option selected>Sila Pilih</option>
                                <option value="1">Untuk Diluluskan</option>
                                <option value="2">Telah Lulus</option>
                            </select>
                            <br>
                            <h5 style="margin-right: 100px;">No. Kad Pengenalan :</h5>
                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <input style="margin-right:80%" type="text" class="form-control">
                                </div>
                            </div>
                            <a class="btn" style="background-color:#F2BED1">Cari</a>
                        </div>
                    </div>
                    <br>
                    <table style="margin-left:5px; margin-right:50px;" class="table">
                        <thead>
                            <tr>
                                <th>Bil</th>
                                <th>KP/Nama Pemohon</th>
                                <th>No Slip Permohonan</th>
                                <th>Tarikh Mohon</th>
                                <th>Status</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td><a class="btn" style="background-color:#F2BED1" href="../ManageMarriageRequestStaff/Staffapplicantinfo.php">View</a><a
                                        style="background-color:#F2BED1; margin-left:10px;" class="btn">Approve</a></td>
                            </tr>

                    </table>
                    <a
                                        style="background-color:#F2BED1; margin-left:10px;" href="../ManagePreparationCourseStaff/Stafflistcourse.php" class="btn">Kursus Kahwin</a></td>
                    <div class="card-body">


                        <br>
                    </div>
                    <!-- Your admin content goes here -->
        </section>
    </div>

    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
    </footer>
</body>

</html>