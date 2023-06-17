<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/marriage_cardinfo_page.css">
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
                <th class="th1">PENDAFTARAN PERKAHWINAN</th>
            </tr>
            <tr>
                <td class="td1">
                    
                <form method="POST" action="manage_marriageController.php">
                    <table border="0" align="center">


                    <div class="BigTitle"><br>
                        <p>PEMOHON</p><br>
                    </div>

                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_name=$row['user_name'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama</label></th>
                                        <th scope = "row">: '.$user_name.'</th>
                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>
                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_IC=$row['user_IC'];
                                    $user_DOB=$row['user_DOB'];
                                    $user_phone=$row['user_phone'];
                                    $user_race=$row['user_race'];
                                    $user_edu_level=$row['user_edu_level'];
                                    $user_occupation=$row['user_occupation'];
                                    $user_salary=$row['user_salary'];
                                    $user_address=$row['user_address'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">NoKP</label></th>
                                        <th scope = "row">: '.$user_IC.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Tarikh Lahir</label></th>
                                        <th scope = "row">: '.$user_DOB.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">No Telefon</label></th>
                                        <th scope = "row">: '.$user_phone.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Bangsa</label></th>
                                        <th scope = "row">: '.$user_race.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Taraf Pendidikan</label></th>
                                        <th scope = "row">: '.$user_edu_level.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Pekerjaan</label></th>
                                        <th scope = "row">: '.$user_occupation.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Pendapatan</label></th>
                                        <th scope = "row">: '.$user_salary.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Alamat</label></th>
                                        <th scope = "row">: '.$user_address.'</th>
                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>
                    </table>

                        <br>
                <table border="0" align="center">
                    <div class="BigTitle"><br>
                        <p>PASANGAN</p><br>
                    </div>
                                
                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM SPOUSE";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $spouseName=$row['spouseName'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama</label></th>
                                        <th scope = "row">: '.$spouseName.'</th>
                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>
                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM SPOUSE";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $spouse_IC=$row['spouse_IC'];
                                    $spouseDOB=$row['spouseDOB'];
                                    $spousePhoneNum=$row['spousePhoneNum'];
                                    $spouseRace=$row['spouseRace'];
                                    $spouselvlEdu=$row['spouselvlEdu'];
                                    $spouseJobPosition=$row['spouseJobPosition'];
                                    $spouseSalary=$row['spouseSalary'];
                                    $spouseAddress=$row['spouseAddress'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">NoKP</label></th>
                                        <th scope = "row">: '.$spouse_IC.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Tarikh Lahir</label></th>
                                        <th scope = "row">: '.$spouseDOB.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">No Telefon</label></th>
                                        <th scope = "row">: '.$spousePhoneNum.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Bangsa</label></th>
                                        <th scope = "row">: '.$spouseRace.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Taraf Pendidikan</label></th>
                                        <th scope = "row">: '.$spouselvlEdu.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Pekerjaan</label></th>
                                        <th scope = "row">: '.$spouseJobPosition.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Pendapatan</label></th>
                                        <th scope = "row">: '.$spouseSalary.'</th>
                                    </tr>';
                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Alamat</label></th>
                                        <th scope = "row">: '.$spouseAddress.'</th>
                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>
                </table>
<br>
                <table border="0" align="center">
                    <div class="BigTitle"><br>
                        <p>SILA ISI MAKLUMAT PENDAFTARAN</p><br>
                    </div>

                                

                                <tr>
                                    <th style="width: 33%;"><label for="marriage_category">Kategori Pendataran Nikah</label></th>
                                    <th>: <select style="width: 400px;" id="marriage_category" name="marriage_category">
                                        <option value="marriage_category">PENDAFTARAN NIKAH DENGAN KEBENARAN</option>
                                        <option value="marriage_category">PENDAFTARAN NIKAH TANPA KEBENARAN</option>
                                        
                                    </select></th>
                                </tr>
                                <tr>
                                    <th><label for="akuanNo">No Akuan</label></th>
                                    <th>: <input type="text" id="akuanNo" name="akuanNo" required></th>
                            
                                </tr>

                                <tr>
                                    <th><label for="date_registration">Tarikh Daftar</label></th>
                                    <th>: <input type="date" id="date_registration" name="date_registration" required></th>
                            
                                </tr>
                                <tr>
                                    <th><label for="noCert_groom">No Sijil Pemohon</label></th>
                                    <th>: <input type="text" id="noCert_groom" name="noCert_groom" required></th>
                            
                                </tr>
                                <tr>
                                    <th><label for="noCert_bride">No Sijil Pasangan</label></th>
                                    <th>: <input type="text" id="noCert_bride" name="noCert_bride" required></th>
                            
                                </tr>
                                
                
                    </table>
                    
                        <div class="setting">
                            <a href="marriage_registration.php"><button name="submit1" class="button2 back1">Kembali</button></a>
                            <a href=""><button type="submit" name="submit" class="button2 back1">Confirm</button></a>

                        </div>
                    </form>
                    
                    
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
  