<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Spouse Information</title>
    <link rel="stylesheet" type="text/css" href="../../../../style/admin_style.css">
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../../../../image/logo_jaip.png" alt="Logo" class="logo">
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
    <!-- Your admin content goes here -->
    <br>
    <h2 style="margin-left:300px">PERMOHONAN BERKAHWIN</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1 ">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Applicantinfo.php">MAKLUMAT
                        PEMOHON</a>
                </li>
                <li class="nav-item">
                    <a  style="background-color:#FEA1A1" class="nav-link active" aria-current="true" href="Spouseinfo.php">MAKLUMAT PASANGAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Marriageinfo.php" >MAKLUMAT PERKAHWINAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Documentinfo.php">DOKUMEN</a>
                </li>
            </ul>
        </div>
        <form action="../../Facade.php" method="post">
            <div class="card-body">
                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Nombor KP :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_IC id=user_IC>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Nama Pemohon :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_name id=user_name>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Tarikh Lahir :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="date" class="form-control" name=user_DOB
                            id=user_DOB>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Bangsa :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_race id=user_race>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Warganegara :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_citizenship id=user_citizenship>
                    </div>
                </div>

                <div class="input-group">
                    <label for="basic-url" class="form-label">Alamat :</label>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" name=user_address id=user_address></textarea>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Nombor Telefon :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_phone id=user_phone>
                    </div>
                </div> 

                
                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Taraf Pendidikan :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_edu_level
                            id=tarafpendidikan>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Sektor Pekerjaan :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_sect_employ id=user_sect_employ>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Pekerjaan Jawatan :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_job_position id=user_job_position>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">Amaun Pendapatan :</label>
                    <div class="input-group">
                        <span class="input-group-text">RM</span>
                        <input style="margin-right:70%" type="text" class="form-control" name=user_salary id=user_salary>
                    </div>
                </div>


                <div class="input-group mb-3">
                    <label for="basic-url" class="form-label">No Sijil Kursus Pra-Perkahwinan :</label>
                    <div class="input-group">
                        <input style="margin-right:80%" type="text" class="form-control" name=user_certPreCourse id=user_certPreCourse>
                    </div>
                </div>
                <br>
                <input style="background-color:#FEA1A1; margin-right:20px;" href="#" class="btn success" type="submit" name="addspouseinfo" value="Submit">
            </div>
    </div>
    </form>
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