<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Marriage Information</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../../Public/images/logo_jaip.png" alt="Logo" class="logo">
            <div class="welcome-text">
                <h1>Welcome to Sistem Maklumat Perkahwinan Islam Pahang</h1>
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
                    <a class="nav-link active" aria-current="true" href="Applicantinfo.php">MAKLUMAT
                        PEMOHON</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Spouseinfo.php">MAKLUMAT PASANGAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Marriageinfo.php">MAKLUMAT PERKAHWINAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Documentinfo.php"
                        style="background-color:#FEA1A1">DOKUMEN</a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <div class="mb-3 row">
                <label for="text" class="col-sm-2 col-form-label" style="width:150px">Nama Pemohon :</label>
                <div class="col-sm-10" style="width:400px">
                    <input s type="text" class="form-control" id="namapemohon">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="text" class="col-sm-2 col-form-label" style="width:150px">Nama Pasangan:</label>
                <div class="col-sm-10" style="width:400px">
                    <input type="text" class="form-control" id="namapemohon">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="text" class="col-sm-2 col-form-label" style="width:270px">Nombor Slip Permohonan Online
                    :</label>
                <div class="col-sm-10" style="width:400px">
                    <input type="text" class="form-control" id="namapemohon">
                </div>
            </div>

            <h3><b>DOKUMEN</b></h3>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Bil</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Operasi</th>
                    </tr>
                </thead>
                <form method="post">
                    <tbody class="table-group">
                        <tr>
                            <th scope="row">1</th>
                            <td>Senarai Semak</td>
                            <td>
                            <button class="btn"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Borang 2 [Seksyen 16]-Permohonan untuk Kebenaran Berkahwinan</td>
                            <td><button class="btn"><i class="fa fa-download"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="">Borang 4 [Seksyen 13]-Persetujuan Dan Wakalah Wali</td>
                            <td><button class="btn"><i class="fa fa-download"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="">Borang 1 [Seksyen 4]-Akuan Pemastautin</td>
                            <td><button class="btn"><i class="fa fa-download"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td colspan="">Borang Ujian Saringan HIV Pemohon</td>
                            <td><button class="btn"><i class="fa fa-download"></i></button></td>
                        </tr>
                        
                    </tbody>

                    
                </form>
            </table>
            
            

            <br>
            <h3><b>MUAT NAIK DOKUMEN ANDA</b></h3>

            <table class="table">
            <form action="../../Facade.php" method="post">
                <thead>
                    <tr>
                        <th scope="col">Bil</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col" style="margin-right:80%;">Operasi</th>
                    </tr>
                </thead>
                <tbody class="table-group">
                    <tr>
                        <th scope="row">4</th>
                        <td>Borang 2 [Seksyen 16]-Permohonan untuk Kebenaran Berkahwinan</td>
                        <td><input class="form-control" style="width:240px;" type="file" id="requestfile"
                                    name="requestfile"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Borang 4 [Seksyen 13]-Persetujuan Dan Wakalah Wali</td>
                        <td><input class="form-control" style="width:240px;" type="file" id="waliagreementfile"
                                    name="waliagreementfile"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Borang 1 [Seksyen 4]-Akuan Pemastautin</td>
                        <td><input class="form-control" style="width:240px;" type="file" id="residentfile"
                                    name="residentfile"></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Borang Ujian Saringan HIV Pemohon</td>
                        <td><input class="form-control" style="width:240px;" type="file" id="hivfile"
                                    name="hivfile"></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Bukti Pembayaran</td>
                        <td><input class="form-control" style="width:240px;" type="file" id="paymentproof"
                                    name="paymentproof"></td>
                    </tr>
                </tbody>
            </table>
            </section>
            <input style="background-color:#FEA1A1; margin-right:20px;" href="#" class="btn success" type="submit" name="adddocumentinfo" value="Save">
        </div>
        </form>
        <br>
        <footer>
            <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
        </footer>
</body>

</html>