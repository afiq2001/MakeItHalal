<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Maklumat Pemohon</title>
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
        <a href="#">Home</a>
        <a href="#">User Management</a>
        <a href="../ManageUserMarriageRequest//RequestMarriage.php">Kebenaran Berkahwin</a>
        <a href="../ManageUserPreparationCourse/Courseapplication.php">Kursus Kahwin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>
    <!-- Your admin content goes here -->
    <br>
    <h2 style="margin-left:300px">PERMOHONAN KURSUS</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#"
                        style="background-color:#FEA1A1">BUTIRAN
                        PEMOHON</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nombor Siri Kursus Kahwin :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nombor KP :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama dalam KP :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Lahir :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Warganegara :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Negeri :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No. Telefon :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">E-mel :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>


            <div class="input-group">
                <label for="basic-url" class="form-label">Bukti Pembayaran :</label>
                <div class="input-group">
                    <input class="form-control" type="file" id="formFile" style="margin-right:80%;">
                </div>
            </div><br>
            <a style="background-color:#FEA1A1; margin-right:20px;" href="Staffapplicationlist.php" class="btn">Kembali</a>
        </div>
    </div>

    </section>
    </div>
    <br>
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
    </footer>
</body>

</html>