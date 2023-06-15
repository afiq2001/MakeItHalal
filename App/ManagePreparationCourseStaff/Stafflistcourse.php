<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Kursus Kahwin</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/admin_style.css">
</head>

<body>
    <?php include "../../BusinessService/Controller/ManagePreparationCourseStaff/staffmarriagecourseController.php";

    $obj = new adminaddcourseController();

    $result = $obj->displaycourse();

    ?>
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
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1 ">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" style="background-color:#FDE2F3" aria-current="true" href="Stafflistcourse.php">SENARAI KURSUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="Staffapplicationlist.php">SENARAI PEMOHON</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Penganjur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Bayaran</th>
                        <th scope="col">Tarikh Mula</th>
                        <th scope="col">Tarikh Tamat</th>
                        <th scope="col">Kapasiti</th>
                        <th scope="col">Operasi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $Course_organizer = $row['Course_organizer'];
                            $Course_address = $row['Course_address'];
                            $Course_price = $row['Course_price'];
                            $Course_startdate = $row['Course_startdate'];
                            $Course_enddate = $row['Course_enddate'];
                            $Course_capacity = $row['Course_capacity'];
                            echo '
                                          

                    <tr>
                        <td>' . $Course_organizer . '</td>
                        <td>' . $Course_address . '</td>
                        <td>' . $Course_price . '</td>
                        <td>' . $Course_startdate . '</td>
                        <td>' . $Course_enddate . '</td>
                        <td>' . $Course_capacity . '</td>
                        <td><button style=font-size:15px>Edit <i class=fas fa-edit></i></button>
                        <button style=font-size:15px>View <i class=fas fa-eye></i></button>
                        <button style=font-size:15px>Delete <i class=fas fa-delete></i></button>
                    </td>
                    </tr>
                
       ';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <a style="background-color:#FDE2F3" href="../ManageMarriageRequestStaff/StaffrequestApplicationList.php" class="btn">Kembali</a>
            <a style="background-color:#FDE2F3" href="Staffaddcourse.php" class="btn">Tambah Kursus</a>
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