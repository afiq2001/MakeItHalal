<!DOCTYPE html>
<html>

<head>
    <title>User Consultation - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
    <title>Konsultasi Information</title>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 mt-3">
                <div class="desc">
                    <!-- <label for="id">ID:</label><br>
                    <label for="name">Name:</label><br>
                    <label for="position">Jawatan</label> -->
                </div>

            </div>
            <div class="col-9 mt-3 my-3">
                <h2>KONSULTASI</h2><br>
                <div class="card">
                    <div class="card-header">
                        <p>MAKLUMAT PERMOHON</p>



                    </div>
                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="applicant_ICNum" class="col-sm-2 col-form-label">Number KP :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantName" class="col-sm-2 col-form-label">Nama Pengadu :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantDOB" class="col-sm-2 col-form-label">Tarikh Lahir :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantRace" class="col-sm-2 col-form-label">Bangsa :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantAddress" class="col-sm-2 col-form-label">Alamat Semasa
                                :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantPhoneNum" class="col-sm-2 col-form-label">No.telefon :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantSectEmploy" class="col-sm-2 col-form-label">Sektor Pekerjaan
                                :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantJobPosition" class="col-sm-2 col-form-label">Jawatan :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantJobSalary" class="col-sm-2 col-form-label">Angaran Gaji
                                :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantLvlEdu" class="col-sm-2 col-form-label">Tahap pendidikan
                                :</label>

                        </div>
                        <div class="row mb-3">
                            <label for="applicantnikahcount" class="col-sm-2 col-form-label">Pernikahan kali ke
                                :</label>

                        </div>


                    </div>
                    </form>


                    <div class="card">
                        <div class="card-header">
                            <p>MAKLUMAT PASANGAN</p>

                        </div>
                        <div class="card-body">
                            <form action="POST">


                                <div class="row mb-3">
                                    <label for="spouseName" class="col-sm-2 col-form-label">Nama Pasangan
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseDOB" class="col-sm-2 col-form-label">Tarikh Lahir
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseRace" class="col-sm-2 col-form-label">Bangsa :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseAddress" class="col-sm-2 col-form-label">Alamat Semasa
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spousePhoneNum" class="col-sm-2 col-form-label">No.telefon
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseSectEmploy" class="col-sm-2 col-form-label">Sektor
                                        Pekerjaan
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseJobPosition" class="col-sm-2 col-form-label">Jawatan
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseSalary" class="col-sm-2 col-form-label">Anggaran Gaji
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseLvlEdu" class="col-sm-2 col-form-label">Tahap pendidikan
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="spouseNikahcount" class="col-sm-2 col-form-label">Pernikahan
                                        kali ke
                                        :</label>

                                </div>


                            </form>




                        </div>
                        <div class="card">
                            <div class="card-header">
                                <p>MAKLUMAT PERKAHWINAN</p>

                            </div>
                            <div class="card-body">
                                <form action="POST">



                                    <div class="row mb-3">
                                        <label for="dateOfMarriage" class="col-sm-2 col-form-label">Tarikh
                                            Perkahwinan:</label>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="typeOfMarriage" class="col-sm-2 col-form-label">Jenis
                                            Perkahwinan:</label>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="spousePo" class="col-sm-2 col-form-label">Kedudukan
                                            Isteri:</label>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="marriagePolicy" class="col-sm-2 col-form-label">Dasar
                                            Perkahwinan:</label>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="noOfChild" class="col-sm-2 col-form-label">Bil Anak:</label>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="divorce" class="col-sm-2 col-form-label">Penceraian:</label>


                                    </div>
                            </div>

                        </div>
                        </form>




                    </div>
                    <div class="card">
                        <div class="card-header">
                            <p>MAKLUMAT ADUAN</p>

                        </div>
                        <div class="card-body">
                            <form action="">


                                <div class="row mb-3">
                                    <label for="consultPurpose" class="col-sm-2 col-form-label">Tujuan
                                        Aduan:</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="consultDescription" class="col-sm-2 col-form-label">Keterangan
                                        Aduan:</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="consultDatetime" class="col-sm-2 col-form-label">Tarikh
                                        Konsultasi
                                        :</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="counsultPreferred" class="col-sm-2 col-form-label">PAID
                                        Pilihan:</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="counsultChoosen" class="col-sm-2 col-form-label">Kaunselor
                                        Pilihan:</label>


                                </div>
                        </div>

                        </form>





                    </div>
                    <div class="card">
                        <div class="card-header">
                            <p>MAKLUMAT COUNSELOR</p>

                        </div>
                        <div class="card-body">
                            <form action="POST">


                                <div class="row mb-3">
                                    <label for="consultDatetime" class="col-sm-2 col-form-label">Tarikh
                                        Konsultasi
                                        :</label>

                                </div>

                                <div class="row mb-3">
                                    <label for="consultPreferred" class="col-sm-2 col-form-label">PAID
                                        Pilihan:</label>

                                </div>
                                <div class="row mb-3">
                                    <label for="consultChoosen" class="col-sm-2 col-form-label">Kaunselor
                                        Pilihan:</label>
                                    <div class="col-sm-2">
                                        <select name="consulChoosen" id="consultChoosen" class="form-control">
                                            <option value=""></option>
                                            <option value="1">Dr Ahmad </option>
                                            <option value="2">Dr Wahab</option>
                                            <option value="3">Dr Aisyah</option>
                                            <option value="4">Dr Maisyarah</option>
                                        </select>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="StaffApprovalConsultation.php" class="btn" type="button"
                                            style="background-color:#F2BED1">Kembali</a>
                                        <a style="background-color:#F2BED1; margin-left:10px;" class="btn">Sahkan</a>

                                    </div>

                                </div>

                        </div>
                        </form>





                    </div>

                </div>

            </div>

        </div>


    </div>
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.Aizad</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>