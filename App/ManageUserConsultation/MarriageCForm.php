<!DOCTYPE html>
<html>

<head>
    <title>User Consultation - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
    <title>Marriage Concultation Information</title>
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
            <div class="col-10 mt-2 my-3 ">
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
                                <a style="background-color:#FEA1A1" class="nav-link active" aria-current="true"
                                    href="MarriageCForm">MAKLUMAT PERKAHWINAN</a>
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
                                <label for="spouse_dateofmarriage" class="col-sm-2 col-form-label">Tarikh
                                    Perkahwinan:</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="spouse_dateofmarriage"
                                        name="spouse_dateofmarriage">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouse_typeofmarriage" class="col-sm-2 col-form-label">Jenis
                                    Perkahwinan:</label>
                                <div class="col-sm-2">
                                    <select name="spouse_typeofmarriage" id="spouse_typeofmarriage"
                                        class="form-control">
                                        <option value=""></option>
                                        <option value="">Monogami</option>
                                        <option value="lain">Poligami</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spousePosition" class="col-sm-2 col-form-label">Kedudukan Isteri:</label>
                                <div class="col-sm-2">
                                    <select name="spousePosition" id="spousePosition" class="form-control">
                                        <option value=""></option>
                                        <option value="1">Pertama</option>
                                        <option value="2">Kedua</option>
                                        <option value="3">Ketiga</option>
                                        <option value="4">Keempat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseMarriagePolicy" class="col-sm-2 col-form-label">Dasar
                                    Perkahwinan:</label>
                                <div class="col-sm-2">
                                    <select name="spouseMarriagePolicy" id="spouseMarriagePolicy" class="form-control">
                                        <option value=""></option>
                                        <option value="keluarga">Pilihan keluarga</option>
                                        <option value="sendiri">Pilihan Sendiri</option>
                                        <option value="paksaan">Paksaan</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseNoOfChild" class="col-sm-2 col-form-label">Bil Anak:</label>
                                <div class="col-sm-1 col-form-label-inline">
                                    <label for="">Lelaki</label>
                                    <input type="number" class="form-control " id="spouseNoOfChild"
                                        name="spouseNoOfChild">
                                </div>
                                <div class="col-sm-1 col-form-label-inline">
                                    <label for="">Perempuan</label>
                                    <input type="number" class="form-control " id="spouseNoOfChild"
                                        name="spouseNoOfChild">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spouseDivorce" class="col-sm-2 col-form-label">Penceraian:</label>
                                <div class="col-sm-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spouseDivorce"
                                            id="spouseDivorce" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Pernah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spouseDivorce"
                                            id="spouseDivorce" value="option2">
                                        <label class="form-check-label" for="inlineRadio2"> Tidak Pernah</label>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <input style="background-color:#FEA1A1; margin-right:20px;" href="#" class="btn success"
                                type="submit" name="marriageCinfo" value="Submit">


                    </div>

                </div>
                </form>
            </div>

        </div>

    </div>
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.Aizad</p>
    </footer>
    <!-- <?php
        include "../../../php/db_connection.php";

        
        if (isset($_POST["submit3"])) {
            $spouse_dateofmarriage = $_POST['spouse_dateofmarriage'];
            $spouse_typeofmarriage = $_POST['spouse_typeofmarriage'];
            $spousePosition = $_POST['spousePosition'];
            $spouseMarriagePolicy = $_POST['spouseMarriagePolicy'];
            $spouseNoOfChild = $_POST['spouseNoOfChild'];
            $spouseDivorce= $_POST['spouseDivorce'];
           
           
    
            $insert = mysqli_query($conn, "INSERT INTO spouse (spouse_dateofmarriage, spouse_typeofmarriage, spousePosition, spouseMarriagePolicy, spouseNoOfChild, spouseDivorce) 
            VALUES ('$spouse_dateofmarriage', '$spouse_typeofmarriage', '$spousePosition', '$spouseMarriagePolicy', '$spouseNoOfChild', '$spouseDivorce')");
    
    
            if (!$insert) {
                echo mysqli_error($conn);
            } else {
                ("Location: Marriage_form_page.php");
            }
        }
        mysqli_close($conn);
        ?> -->
    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>