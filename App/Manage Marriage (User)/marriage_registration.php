<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>User Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/marriage_registration.css">
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
        <a href="">list</a>
        <a href="#">Daftar Kahwin</a>
        <a href="#">Kad Kahwin</a>
        <a href="#">Insentif</a>
        <a href="#">Konsultasi</a>
        <a method="POST" href="../../../admin_login2.php">Logout</a>
    </div>
  
    <div class="container">
        <section id="Content">
        
        <table border="1" align="center">
            <tr>
                <th>Informasi Kahwin</th>
            </tr>
            <tr style="background-color: #f2f2f2;" >
                <td>
                <a  href="marriage_registration_page.php"><button style="width: 150px;" class="button2 back1">Daftar Perkahwinan</button></a>
                    <a href="marriage_cardinfo_page.php"><button style="width: 150px;" class="button2 back1">Daftar Kad Nikah</button></a>
                
                    <table border="1" align="center">
                        <tr>
                            <th>Nama Pemohon</th>
                            <th>NoKP Pemohon</th>
                            <th>Nama Pasangan</th>
                            <th>NoKP Pasangan</th>
                            <th>No. Akuan</th>
                            <th>Tarikh Pendaftaran</th>
                            <th>Operasi</th>
                        </tr>
                        <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile, spouse, marriage_registration";
                            $result = $conn->query($sql);

                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_name=$row['user_name'];
                                    $user_IC=$row['user_IC'];
                                    $spouseName=$row['spouseName'];
                                    $spouse_IC=$row['spouse_IC'];
                                    $akuanNo=$row['akuanNo'];
                                    $date_registration=$row['date_registration'];
                                    
                    
                                    
                                 

                                    echo '<tr>
                                    <td>'.$user_name.'</td>
                                    <td>'.$user_IC.'</td>
                                    <td>'.$spouseName.'</td>
                                    <td>'.$spouse_IC.'</td>
                                    <td>'.$akuanNo.'</td>
                                    <td>'.$date_registration.'</td>
                                    

                                    <td>
                                        <div class="setting">
                                        <a href="Groom_Information.php?"><img src="../../Public/images/editicon.png" alt="Logo" class="setting"></a>
                                        <a href="E-Forms_slip_page.php?"><img src="../../Public/images/formicon.png" alt="Logo" class="setting"></a>
                                        
                                        <div>
					                </td>


                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>

                    </table>


                    <table border="1" align="center">
                        <tr>
                            <th>Nama Pemohon</th>
                            <th>NoKP Pemohon</th>
                            <th>Nama Pasangan</th>
                            <th>NoKP Pasangan</th>
                            <th>Tarikh Mohon</th>
                            <th>Tatikh Pungutan</th>
                            <th style="width: 12%;">Operasi</th>
                        </tr>
                        <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile, spouse, marriage_card";
                            $result = $conn->query($sql);

                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_name=$row['user_name'];
                                    $user_IC=$row['user_IC'];
                                    $spouseName=$row['spouseName'];
                                    $spouse_IC=$row['spouse_IC'];
                                    $apply_date=$row['apply_date'];
                                    $date_pickup=$row['date_pickup'];

                                    echo '<tr>
                                    <td>'.$user_name.'</td>
                                    <td>'.$user_IC.'</td>
                                    <td>'.$spouseName.'</td>
                                    <td>'.$spouse_IC.'</td>
                                    <td>'.$apply_date.'</td>
                                    <td>'.$date_pickup.'</td>

                                    <td>
                                        <div class="setting1">
                                        <a href="marriage_registrationController.php?"><img src="../../Public/images/editicon.png" alt="Logo" class="setting1"></a>
                                        <a href="marriage_registrationController.php?"><img src="../../Public/images/searchicon.png" alt="Logo" class="setting1"></a>
                                        <a onclick="printPage()" href="marriage_registration.php?"><img src="../../Public/images/printicon.png" alt="Logo" class="setting1"></a>
                                        <a href="manage_marriage_cardController.php?delete='.$apply_date.'"><img src="../../Public/images/deleteicon.png" alt="Logo" class="setting1"></a>
                                        <div>
					                </td>


                                    </tr>';
                                    }
                                }
                                else {
                                    echo "";
                                }
                                $conn->close();
                                ?>

                    </table>
                </td>
            </tr>
        </table>
        <script>
            function printPage() {
                window.print();
                }
        </script>

        </section>
    </div>
  
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
    </footer>
</body>
</html>
  