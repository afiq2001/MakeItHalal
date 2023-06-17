<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <th class="th1">Permohonan Pendaftaran Perkahwinan</th>
            </tr>
            <tr>
                <td class="td1">
                
                    <table border="0" align="center">
                    <br><br>
                    <div class="BigTitle"><br>
                        <p>SURAT PERAKUAN NIKAH</p><br>
                    </div>
                        
                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile, spouse, wali, witness, marriage_details";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    
                                    $user_name=$row['user_name'];
                                    $user_IC=$row['user_IC'];
                                    $user_address=$row['user_address'];

                                    $spouseName=$row['spouseName'];
                                    $spouse_IC=$row['spouse_IC'];
                                    $spouseAddress=$row['spouseAddress'];
                                    
                                    $wali_name=$row['wali_name'];
                                    $wali_IC=$row['wali_IC'];
                                    $wali_address=$row['wali_address'];

                                    $witness_name=$row['witness_name'];
                                    $witness_IC=$row['witness_IC'];
                                    $witness_address=$row['witness_address'];

                                    $dowry=$row['dowry'];
                                


                                    echo '
                                        <p style="text-align: left" >Nama Pengantin Lelaki '.$user_name.'<p>
                                        <p style="text-align: left" > No. Kad Pengenalan '.$user_IC.', Alamat '.$user_address.'<p><br>
                                    ';

                                    echo '
                                        <p style="text-align: left" >Nama Pengantin Perempuan '.$spouseName.'<p>
                                        <p style="text-align: left" > No. Kad Pengenalan '.$spouse_IC.', Alamat '.$spouseAddress.'<p><br>
                                    ';
                                    
                                    echo '
                                        <p style="text-align: left" >Nama Wali '.$wali_name.'<p>
                                        <p style="text-align: left" > No. Kad Pengenalan '.$wali_IC.', Alamat '.$wali_address.'<p><br>
                                    ';

                                    echo '
                                        <p style="text-align: left" >Nama Saksi<p>
                                        <p style="text-align: left" >(1) '.$witness_name.'<p>
                                        <p style="text-align: left" > No. Kad Pengenalan '.$witness_IC.', Alamat '.$witness_address.'<p><br>
                                    ';

                                    echo '
                                        
                                        <p style="text-align: left" >Mas Kahwin '.$dowry.'<p><br>
                                        ';

                                        echo '
                                        <p style="text-align: left" >Pengantin Lelaki telah bertaliq seperti berikut: <br><p>
                                        <p style="text-align: left" >Saya mengaku apabila saya tinggalkan isteri saya '.$spouseName.' selama empat bulan hijrah
                                        berturut-turut atau lebih dengan sengaja atau paksaan dan saya atau wakil saya tiaa memberi nafkah kepadanya selama tempoh saya
                                        masa yang tersebut pada hal ia taatkan saya atau saya melakukan sebarang mudarat kepada tubuh badannya, kemudian ia mengadu 
                                        kepada mahkamah syariah dan apabila sabit aduannya di sisi mahkamah syariah dan ia memberi kepada mahkamah syariah yang menerima bagi pihak saya satu ringgit 
                                        maka pada ketika itu tertalaq ia denga cara talaq khul.<p>
                                        ';

                                    
                                    
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                        
                                    
                                


                                    
                                   
                                ?>
                    </table>
                    <br>

                    <br>

                    <div class="setting">
                    <a href="E-Forms_slip_page.php"><button style="margin-left: 600px;" class="button2 back1">Kembali</button></a>
                    </div>
                                
                    </table>
                    
                    
                    


                    
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
  