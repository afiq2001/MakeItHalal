<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Permohonan Kursus</title>
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
        <a href="../ManageMarriageRequestStaff/StaffrequestApplicationList.php">Admin</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-absolute">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- Your admin content goes here -->
    <br>
    <h2 style="margin-left:300px">PERMOHONAN KURSUS</h2>
    <br>
    <div class="card" style="margin-left:300px; margin-right:300px; background-color:#F6F1F1 ">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active"  aria-current="true"
                        href="Courselist.php">SENARAI KURSUS</a>
                </li>
                <li class="nav-item">
                    <a href="Courseapplication.php" class="nav-link active" style="background-color:#FEA1A1" aria-current="true" href="Courseapplication.php">PERMOHONAN</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Bil</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No. Siri Kursus</th>
                        <th scope="col">Tarikh Mohon</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>Afiq</td>
                        <td>PRK213131</td>
                        <td>23/6/2023</td>
                        <td>Dalam Proses</td>
                    </tr>
                </tbody>
            </table>
            
            <a style="background-color:#FEA1A1" href="Courselist.php" class="btn">SENARAI KURSUS KAHWIN</a>
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