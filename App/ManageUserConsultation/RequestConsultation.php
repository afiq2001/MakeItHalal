<!DOCTYPE html>
<html>

<head>
    <title>User Consultation - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Semak Daftar Konsultasi</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
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
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-2 mt-3">
                <div class="desc">
                    <!-- <label for="id">ID:</label><br>
                    <label for="name">Name:</label> -->
                </div>

            </div>
            <div class="col-10 mt-3 my-3">
                <div class="card">
                    <div class="partner text-center my-4">
                        <label for="partneric" class="mb-2">No. Kad Pengenalan Pasangan</label><br>
                        <div class="partner text-center w-50 mx-auto">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="btnGroup text-center">
                                    <a class="btn" style="background-color:#FEA1A1;" href=" #"> Semak</a>
                                    <a class="btn" style="background-color:#FEA1A1;" href="ApplicantCForm.php">
                                        Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center">
                        <table class="table caption-top" border="1">


                            <thead>
                                <tr>
                                    <th scope="col">Bil</th>
                                    <th scope="col">KP/Nama Pengadu</th>
                                    <th scope="col">KP/Nama Pasangan</th>
                                    <th scope="col">Tarikh Aduan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Operasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a style="background-color:#FEA1A1; margin-right:20px;" class="btn"
                                            href="RDateconsultation.php">Ubah</a>
                                        <a style="background-color:#FEA1A1; margin-right:20px;" class="btn">Muat
                                            Turun</a>
                                        <a style="background-color:#FEA1A1; margin-right:20px;" class="btn"
                                            type="reset">Padam</a>

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
                    </div>

                </div>



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