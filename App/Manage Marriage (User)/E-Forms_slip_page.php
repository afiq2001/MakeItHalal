<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../../Public/Style/E-Forms_page.css">
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
        
        <table class="table1" border="1" align="center">
            <tr>
                <th class="th1">E-Forms</th>
            </tr>
            <tr>
                <td class="td1">
                    
                
                    <table border="0" align="center">

                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile, spouse, marriage_registration";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_name=$row['user_name'];
                                    $spouseName=$row['spouseName'];
                                    $date_registration=$row['date_registration'];
                                    $akuanNo=$row['akuanNo'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Groom_Name">Nama Pemohon</label></th>
                                        <th >: '.$user_name.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Groom_Name">Nama Pasangan</label></th>
                                        <th>: '.$spouseName.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Groom_Name">Tarikh Pendaftaran</label></th>
                                        <th >: '.$date_registration.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Groom_Name">No Akuan</label></th>
                                        <th >: '.$akuanNo.'</th>
                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>

                    

    
                    </table>
                    <br><br>
                    <div class="BigTitle" >
                        <br>
                    <p class="para"><b>MUATNAIK DOKUMEN ANDA</b></p>
                    <br>
                    </div>
                    <table border="1" align="center">
                        
                        <tr>
                            <th style="width: 4%;" ><label>1</label></th>
                            <th style="width: 70%;" ><label>Borang 3A/3B (Kebenaran Berkahwin)/ Borang 4
                                (Persetujuan Dan Wakalah Wali)
                            </label></th>
                            <th><a href="E-Form_Borang4_page.php"><button style="margin-left:50px;" class="button2 back1">Lihat Dokumen</button></a></th>
                            
                        </tr>
                        <tr>
                            <th ><label>2</label></th>
                            <th ><label>Borang 5 (Catatan Akad Nikah)</label></th>
                            <th><a href="E-Form_Borang5_page.php"><button style="margin-left:50px;" class="button2 back1">Lihat Dokumen</button></a></th>
                            
                        </tr>

                    </table>
                    <div class="setting">
                        <a href="marriage_registration.php"><button style="margin-left: 600px;" class="button2 back1">Kembali</button></a>
                        
                    </div>

                    
                </td>
            </tr>
            
        </table>
        

        </section>
    </div>
  
    <footer>
        <p>&copy; 2023 Sistem Maklumat Perkahwinan Islam Pahang. All rights reserved.</p>
    </footer>
</body>
</html>
  