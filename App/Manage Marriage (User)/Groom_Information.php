<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/Groom_Information.css">
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
                <th class="th1">Makluamt Pemohon</th>
            </tr>
            <tr>
                <td class="td1">
                    
                <form>
                    <table border="0" align="center">
                        
                        <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    
                                    $user_name=$row['user_name'];
                                    $user_ic=$row['user_ic'];
                                    $user_DOB=$row['user_DOB'];
                                    $user_race=$row['user_race'];
                                    $user_phone=$row['user_phone'];
                                    $user_email=$row['user_email'];
                                    $user_address=$row['user_address'];
                                    $user_type=$row['user_type'];
                                    $user_salary=$row['user_salary'];
                                    $user_occupation=$row['user_occupation'];
                                    $user_city=$row['user_city'];
                                    $user_edu_level=$row['user_edu_level'];
                                    
                                


                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama</label></th>
                                        <th scope = "row">: '.$user_name.'<br></th>
                                    </tr>
                                    
                                    <tr>
                                        <th class="tab"> <label for="Bil">NoKP </label></th>
                                        <th scope = "row">: '.$user_ic.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Tarikh Lahir</label></th>
                                        <th scope = "row">: '.$user_DOB.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Bangsa</label></th>
                                        <th scope = "row">: '.$user_race.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">No Telefon</label></th>
                                        <th scope = "row">: '.$user_phone.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Email </label></th>
                                        <th scope = "row">: '.$user_email.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Alamat</label></th>
                                        <th scope = "row">: '.$user_address.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Type</label></th>
                                        <th scope = "row">: '.$user_type.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Pendapatan</label></th>
                                        <th scope = "row">: '.$user_salary.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Pekerjaan</label></th>
                                        <th scope = "row">: '.$user_occupation.'</th>
                                    </tr>
                                    
                                    <tr>
                                        <th class="tab"> <label for="Bil">Bandar</label></th>
                                        <th scope = "row">: '.$user_city.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Tahap Pendidikan</label></th>
                                        <th scope = "row">: '.$user_edu_level.'</th>
                                    </tr>'
                                    
                                    ;
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>
                        
                        
                        
                                
                    </table>
                    </form>
                    <div class="setting">
                        <a href="marriage_registration.php"><button class="button2 back1">Kembali</button></a>
                        <a href="Bride_Information.php"><button class="button2 back1">Seterusnya</button></a>
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
  