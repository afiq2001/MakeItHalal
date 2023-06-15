<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Maklumat Pemohon</title>
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
    <!-- Your admin content goes here -->
    <br>
    <h2 style="margin-left:300px">KURSUS KAHWIN</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="applicant_info.php"
                        style="background-color:#FDE2F3">BUTIRAN KURSUS KAHWIN</a>
                </li>
            </ul>
        </div>

        <form action="../../Facade.php" method="post">
        <div class="card-body">
            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">No Siri :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="Course_nosiries" id="Course_nosiries">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Penganjur :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="Course_organizer" id="Course_organizer">
                </div>
            </div>

            <div class="input-group">
                <label for="basic-url" class="form-label">Alamat :</label>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" name="Course_address" id="Course_address"></textarea>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Yuran :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="Course_price" id="Course_price">
                </div>
            </div>
            <br>
            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Mula :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="date" class="form-control" name="Course_startdate" id="Course_startdate">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Tarikh Akhir :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="date" class="form-control" name="Course_enddate" id="Course_enddate">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Kapasiti :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="Course_capacity" id="Course_capacity">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nombor Telefon Penganjur :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="Course_organizer_noPhone" id="Course_organizer_noPhone">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nombor Akaun :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="accountnum" id="accountnum">
                </div>
            </div>
            

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Jenis Bank :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="banktype" id="banktype">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="basic-url" class="form-label">Nama Bank :</label>
                <div class="input-group">
                    <input style="margin-right:80%" type="text" class="form-control" name="bankname" id="bankname">
                </div>
            </div>

            


            
            
            <a style="background-color:#FDE2F3; margin-right:20px;" href="Staffapplicationlist.php" class="btn">Kembali</a><input style="background-color:#FDE2F3; margin-right:20px;" href="#" class="btn" type="submit" name="adminaddcourse" value="Add">
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