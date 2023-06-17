<!DOCTYPE html>
<html>

<head>
    <title>User Consultation - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Senarai Mohon Konsultasi</title>
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-2 mt-3">
                <div class="desc">
                    <!-- <label for="id">ID:</label><br>
                    <label for="name">Name:</label><br>
                    <label for="position">Jawatan:</label> -->
                </div>

            </div>
            <div class="col-9 mt-3">
                <h2>KONSULTASI</h2><br>
                <div class="card">
                    <div class="card-header" style="background-color:#FDE2F3">
                        <b>SENARAI PERMOHONAN KONSULTASI</b>
                    </div>
                    <br>
                    <div class="container1">
                        <div class="partner text-center my-4">
                            <label for="partneric" class="mb-2">Kategori</label><br>
                            <div class="partner text-center w-50 mx-auto">
                                <select style="width: 500px;" class="form-select" aria-label="Default select example">
                                    <option selected>--SILA PILIH--</option>
                                    <option value="1">Sahkan Permohonan</option>
                                    <option value="2">Sahkan Pertukaran Tarikh</option>
                                </select>
                            </div>
                            <br>
                            <label for="partneric" class="mb-2">No. Kad Pengenalan Pasangan</label><br>
                            <div class="partner text-center w-50 mx-auto">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="btnGroup text-center">
                                        <a class="btn" style="background-color:#F2BED1;" href=" #"> Cari</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="partner text-center my-4">
                            <label for="partneric" class="mb-2">No. Kad Pengenalan Pasangan</label><br>
                            <div class="partner text-center w-50 mx-auto">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="btnGroup text-center">
                                        <a class="btn btn-primary" href="#"> Cari</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <div class="card">
                        <table class="table caption-top" border="1">


                            <thead>
                                <tr>
                                    <th scope="col">Bil</th>
                                    <th scope="col">KP/Nama Pasangan</th>
                                    <th scope="col">No.Slip Permohonan</th>
                                    <th scope="col">Tarikh Mohon</th>
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
                                    <td><a class="btn" style="background-color:#F2BED1"
                                            href="StaffViewConsultation.php">Papar</a><a
                                            style="background-color:#F2BED1; margin-left:10px;" class="btn">Sahkan</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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