<!DOCTYPE html>
<html>

<head>
    <title>User Consultation - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
    <title>Concultation Information</title>
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../../Public/images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">
                <h1>Welcome to Sistem Maklumat Perkahwinan Islam Pahang</h1>
                <p>Explore our services and enjoy the user Consultation!</p>
            </div>
        </div>
    </header>

    <div class="admin-navbar">
        <a href="#">Home</a>
        <a href="#">User Management</a>
        <a href="../ManageUserMarriageRequest/RequestMarriage.php">Kebenaran Berkahwin</a>
        <a href="../ManageUserPreparationCourse/Courseapplication.php">Kursus Kahwin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>

    <!-- Your user content goes here -->
    <br>
    <h2 style="margin-left:300px">PERMOHONAN KONSULTASI</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 mt-3">
                <div class="desc">
                    <!--  <label for="id">ID:</label><br>
                    <label for="name">Name:</label> -->
                </div>

            </div>
            <div class="col-10 mt-2 my-3">
                <div class="card" style=" background-color:#F6F1F1">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="ApplicantCForm.php">MAKLUMAT
                                    PEMOHON</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="SpouseCForm.php">MAKLUMAT
                                    PASANGAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="MarriageCForm.php">MAKLUMAT
                                    PERKAHWINAN</a>
                            </li>
                            <li class="nav-item">
                                <a style="background-color:#FEA1A1" class="nav-link active" aria-current="true"
                                    href="ConsultationForm.php">MAKLUMAT ADUAN</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="../../Facade.php" method="post">


                            <div class="row mb-3">
                                <label for="consultPurpose" class="col-sm-2 col-form-label">Tujuan Aduan:</label>
                                <div class="col-sm-2">
                                    <select name="consultPurpose" id="consultPurpose" class="form-control">
                                        <option value=""></option>
                                        <option value="divorce">Penceraian</option>
                                        <option value="consult">Khidmat Nasihat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="consultDescription" class="col-sm-2 col-form-label">Keterangan
                                    Aduan:</label>
                                <div class="col-sm-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="consultDescription"
                                            name="consultDescription"></textarea>
                                        <label for="floatingTextarea"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="consultDatetime" class="col-sm-2 col-form-label">Tarikh Konsultasi :</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="consultDatetime" name="consultDatetime">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="consultPreferred" class="col-sm-2 col-form-label">PAID Pilihan:</label>
                                <div class="col-sm-2">
                                    <select name="consultPreferred" id="consultPreferred" class="form-control">
                                        <option value=""></option>
                                        <option value="melayu">pejabat agama pekan</option>
                                        <option value="lain">pejabat agama kuantan</option>
                                        <option value="lain">pejabat agama bentong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="consultChoosen" class="col-sm-2 col-form-label">Kaunselor Pilihan:</label>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="consultChoosen"
                                            id="consultChoosen">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Lelaki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="consultChoosen"
                                            id="consultChoosen" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>




                            </div>
                            <br>
                            <input style="background-color:#FEA1A1; margin-right:20px;" href="#" class="btn success"
                                type="submit" name="consultationCinfo" value="Submit">

                    </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.Aizad</p>
    </footer>
    <!--  <?php
        include "../../../php/db_connection.php";

        
        if (isset($_POST["submit4"])) {
            $consultPurpose = $_POST['consultPurpose'];
            $consultDescription = $_POST['consultDescription'];
            $consultDatetime = $_POST['consultDatetime'];
            $counsultPreferred = $_POST['counsultPreferred'];
            $counsultChoosen = $_POST['counsultChoosen'];
            
           
    
            $insert = mysqli_query($conn, "INSERT INTO consultation (consultPurpose, consultDescription, consultDatetime, counsultPreferred, counsultChoosen ) 
            VALUES ('$consultPurpose', '$consultDescription', '$consultDatetime', '$counsultPreferred', '$counsultChoosen')");
    
    
            if (!$insert) {
                echo mysqli_error($conn);
            } else {
                ("Location: updateConsultation_page.php");
            }
        }
        mysqli_close($conn);
        ?> -->

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>