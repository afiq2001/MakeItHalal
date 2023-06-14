<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Marriage Information</title>
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
        <a href="../ManageUserMarriageRequest/RequestMarriage.php">Kebenaran Berkahwin</a>
        <a href="../ManageUserPreparationCourse/Courseapplication.php">Kursus Kahwin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>
    <br>
    <h2 style="margin-left:300px">PERMOHONAN BERKAHWIN</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1 ">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffapplicantinfo.php">MAKLUMAT
                        PEMOHON</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffspouseinfo.php">MAKLUMAT PASANGAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffmarriageinfo.php"
                    style="background-color:#FDE2F3">MAKLUMAT PERKAHWINAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffdocumentinfo.php">DOKUMEN</a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <h3><b>MAKLUMAT PERKAHWINAN</b></h3>
            <br>
            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Mohon :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama Pemohon :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama Pasangan :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tempat Kahwin :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Negara :</label>
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

            <h3><b>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</b></h3>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Akad Nikah :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <label for="basic-url" class="form-label">Alamat Tempat Kahwin :</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>
            <br>
            <label for="basic-url" class="form-label">Jenis Mas Kahwin :</label>
            <div class="input-group">
                <select class="form-select" aria-label="Default select example" style="margin-right:80%">
                    <option selected>Tunai</option>
                    <option value="1">Tunai</option>
                    <option value="2">Tunai</option>
                </select>
            </div>
            <br>
            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Mas Kahwin :</label>
                <div class="input-group">
                    <span class="input-group-text">RM</span>
                    <input style="margin-right:70%" type="text" class="form-control"
                        aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text"></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Hantaran :</label>
                <div class="input-group">
                    <span class="input-group-text">RM</span>
                    <input style="margin-right:70%" type="text" class="form-control"
                        aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text"></span>
                </div>
            </div>

            <h3><b>MAKLUMAT WALI</b></h3>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama Wali :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No Kad Pengenalan Wali :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <label for="basic-url" class="form-label">Alamat Wali :</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Lahir Wali :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Umur Wali :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No Telefon Wali :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <label for="basic-url" class="form-label">Hubungan :</label>
            <div class="input-group">
                <select class="form-select" aria-label="Default select example" style="margin-right:80%">
                    <option selected>Sila Pilih</option>
                    <option value="1">Bapa</option>
                    <option value="2">Bapa saudara</option>
                    <option value="2">Abang</option>

                </select>
            </div>

            <br>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Nikah Ibu Bapa :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No Sijil Nikah Ibu Bapa :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>


            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama Pelulus (Surat Sumpah) :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <h3><b>PEMBAYARAN</b></h3>

            <div class="mb-3">
                <label for="formFile" class="form-label">Bukti Pembayaran</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <a style="background-color:#FEA1A1" href="#" class="btn">Back</a>
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