<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Applicant Information</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
</head>

<body>
    <?php include "../../BusinessService/Controller/ManageMarriageRequestStaff/staffmarriagerequestController.php";

    $obj = new admininfoController();

    $result = $obj->displayapplicantinfoModel();

    ?>
    <header>
        <div class="header-content">
            <img src="../../Public/images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">
                <h1>Welcome to Sistem Maklumat Perkahwinan Islam Pahang</h1>
                <p>Explore our services and manage the system as an admin!</p>
            </div>
        </div>
    </header>

    <div class="admin-navbar">
        <a href="adminaddcourse.php">Home</a>
        <a href="#">User Management</a>
        <a href="../../App//ManageUserMarriageRequest/RequestMarriage.php">Kebenaran Berkahwin</a>
        <a href="../../App//ManageUserPreparationCourse/Courseapplication.php">Kursus Kahwin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>
    <!-- Your admin content goes here -->
    <br>
    <h2 style="margin-left:300px">PERMOHONAN BERKAHWIN</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:white;">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a style="background-color:#FDE2F3" class="nav-link active" aria-current="true" href="Staffapplicantinfo.php">MAKLUMAT
                        PEMOHON</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffspouserinfo.php">MAKLUMAT PASANGAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffmarriageinfo">MAKLUMAT PERKAHWINAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffdocumentinfo.php">DOKUMEN</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user_IC = $_POST['user_IC'];
                    $user_name = $_POST['user_name'];
                    $user_DOB = $_POST['user_DOB'];
                    $user_race = $_POST['user_race'];
                    $user_citizenship = $_POST['user_citizenship'];
                    $user_address = $_POST['user_address'];
                    $user_phone = $_POST['user_phone'];
                    $user_edu_level = $_POST['user_edu_level'];
                    $user_sect_employ = $_POST['user_sect_employ'];
                    $user_job_position = $_POST['user_job_position'];
                    $user_salary = $_POST['user_salary'];
                    $user_certPreCourse = $_POST['user_certPreCourse'];
                    echo '
            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nombor KP :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control"'.$user_IC.'>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama Pemohon :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control"'.$user_name.'>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Lahir :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" '.$user_DOB.'>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Bangsa :</label>
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

            <div class="input-group">
                <label for="basic-url" class="form-label">Alamat :</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="input-group">
                <label for="basic-url" class="form-label">Alamat Semasa :</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nombor Telefon :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Taraf Pendidikan :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Sektor Pekerjaan :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Pekerjaan Jawatan :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <label for="basic-url" class="form-label">Alamat Tempat Kerja :</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No Telefon Pejabat :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Emel :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Amaun Pendapatan :</label>
                <div class="input-group">
                <span class="input-group-text">RM</span>
                <input style="margin-right:70%" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Status Perkahwinan :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No Sijil Kursus Pra-Perkahwinan :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control">
                </div>
            </div>

            <label for="basic-url" class="form-label">No Sijil Kursus Pra-Perkahwinan :</label>
            <div class="input-group">
                <select class="form-select" aria-label="Default select example" style="margin-right:80%">
                    <option selected>Sila Pilih</option>
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>

                </select>
            </div>
            <br>
            <a style="background-color:#F2BED1" href="StaffrequestApplication.php" class="btn">Back</a>
        </div>
    </div>
';
                }
            } ?>
            </section>
        </div>
        <br>
        <footer>
            <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
        </footer>
</body>

</html>