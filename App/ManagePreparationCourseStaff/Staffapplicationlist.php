<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kursus Kahwin</title>
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
    <!-- Your admin content goes here -->
    <br>
    <h2 style="margin-left:300px">KURSUS KAHWIN</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1 ">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" style="background-color:#FDE2F3" aria-current="true" href="#">SENARAI PEMOHON</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No KP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Siri Kursus</th>
                            <th scope="col">Operasi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                            <tr>
                                <td>01124080959</td>
                                <td>MUHAMMAD AFIQ HASIF</td>
                                <td>PRK213131</td>
                                <td>
                                    <button style="font-size:15px"><i class="fa fa-eye"></i></button>
                                    <button style="font-size:15px; margin-left:5px;"><i class="fa fa-check"></i></button>
                                </td>
                            </tr>
                    </tbody>
                </table>
            <a style="background-color:#FDE2F3" href="Stafflistcourse.php" class="btn">Back</a>
        </div>
        </section>
    </div>
    <br>
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
    </footer>
</body>
</html>