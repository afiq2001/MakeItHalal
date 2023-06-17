<!DOCTYPE html>
<html>

<head>
    <title>User Consultation - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
    <title>Spouse Consultation Information</title>
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
    <!-- Your User content goes here -->
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
            <div class="col-10 mt-3 my-3">
                <div class="card" style="background-color:#F6F1F1">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="ApplicantCForm.php">MAKLUMAT
                                    PEMOHON</a>
                            </li>
                            <li class="nav-item">
                                <a style="background-color:#FEA1A1" class="nav-link active" aria-current="true"
                                    href="SpouseFormC">MAKLUMAT PASANGAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="MarriageCForm.php">MAKLUMAT
                                    PERKAHWINAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="ConsultationForm.php">MAKLUMAT
                                    ADUAN</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="../../Facade.php" method="post">


                            <div class="row mb-3">
                                <label for="spouseName" class="col-sm-2 col-form-label">Nama Pasangan :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="spouseName" name="spouseName">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseDOB" class="col-sm-2 col-form-label">Tarikh Lahir :</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="spouseDOB" name="spouseDOB">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseRace" class="col-sm-2 col-form-label">Bangsa :</label>
                                <div class="col-sm-2">
                                    <select name="spouseRace" id="spouseRace" class="form-control">
                                        <option value=""></option>
                                        <option value="melayu">Melayu</option>
                                        <option value="lain">lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseAddress" class="col-sm-2 col-form-label">Alamat Semasa :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="spouseAddress" name="spouseAddress">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spousePhoneNum" class="col-sm-2 col-form-label">No.telefon :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="spousePhoneNum" name="spousePhoneNum"
                                        placeholder="01X-XXXX XXXX">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseSectEmploy" class="col-sm-2 col-form-label">Sektor Pekerjaan :</label>
                                <div class="col-sm-2">
                                    <select name="spouseSectEmploy" id="spouseSectEmploy" class="form-control">
                                        <option value=""></option>
                                        <option value="kerajaan">Kerajaan</option>
                                        <option value="swasta">Swasta</option>
                                        <option value="sendiri">Persendirian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseJobPosition" class="col-sm-2 col-form-label">Jawatan :</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="spouseJobPosition"
                                        name="spouseJobPosition">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseSalary" class="col-sm-2 col-form-label">Anggaran Gaji :</label>
                                <div class="col-sm-2">
                                    <select name="spouseSalary" id="spouseSalary" class="form-control">
                                        <option value=""></option>
                                        <option value="b40">RM0-RM2500</option>
                                        <option value="m40">RM2500-RM10000</option>
                                        <option value="t20">RM10000-keatas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouselvlEdu" class="col-sm-2 col-form-label">Tahap pendidikan :</label>
                                <div class="col-sm-2">
                                    <select name="spouselvlEdu" id="spouselvlEdu" class="form-control">
                                        <option value=""></option>
                                        <option value="spm">SPM</option>
                                        <option value="dipdeg">Diploma/Degree</option>
                                        <option value="phdmaster">Phd/Master</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouse_nikah_count" class="col-sm-2 col-form-label">Pernikahan kali ke
                                    :</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" id="spouse_nikah_count"
                                        name="spouse_nikah_count">
                                </div>
                            </div>
                            <br>
                            <input style="background-color:#FEA1A1; margin-right:20px;" href="#" class="btn success"
                                type="submit" name="spouseCinfo" value="Submit">


                        </form>
                    </div>

                </div>


            </div>
            <footer>
                <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.Aizad</p>
            </footer>
            <!--  <?php
        include "../../../php/db_connection.php";

        
        if (isset($_POST["submit2"])) {
            $spouseName = $_POST['spouseName'];
            $spouseDOB = $_POST['spouseDOB'];
            $spouseRace = $_POST['spouseRace'];
            $spouseAddress = $_POST['spouseAddress'];
            $spousePhoneNum = $_POST['spousePhoneNum'];
            $spouseSectEmploy = $_POST['spouseSectEmploy'];
            $spouseJobPosition = $_POST['spouseJobPosition'];
            $spouseSalary = $_POST['spouseSalary'];
            $spouselvlEdu = $_POST['spouselvlEdu'];
            $spouse_nikah_count = $_POST['spouse_nikah_count'];
           
    
            $insert = mysqli_query($conn, "INSERT INTO spouse (spouseName, spouseDOB, spouseRace, 	spouseAddress, spousePhoneNum, spouseSectEmploy, spouseJobPosition, spouseSalary, spouselvlEdu, spouse_nikah_count)
            VALUES ('$spouseName', '$spouseDOB', '$spouseRace', '$spouseAddress', '$spousePhoneNum', '$spouseSectEmploy', '$spouseJobPosition', '$spouseSalary', '$spouselvlEdu', '$spouse_nikah_count')");
    
    
            if (!$insert) {
                echo mysqli_error($conn);
            } else {
                ("Location: Spouse_form_page.php");
            }
        }
        mysqli_close($conn);
        ?> -->
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>