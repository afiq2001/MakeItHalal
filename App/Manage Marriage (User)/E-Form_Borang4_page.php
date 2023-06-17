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
                        <p>PERSETUJUAN WALI</p><br>
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
                                    $relationship=$row['relationship'];

                                    $witness_name=$row['witness_name'];
                                    $witness_IC=$row['witness_IC'];
                                    $witness_address=$row['witness_address'];

                                    $dowry=$row['dowry'];
                                


                                    echo '
                                        <p style="text-align: left" >Saya '.$wali_name.' No. Kad Pengenalan '.$user_IC.' adalah '.$relationship.' 
                                        kepada '.$spouseName.'. Dengan ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan di antara 
                                        '.$spouseName.' dengan '.$user_name.' dengan mas kahwinnya RM '.$dowry.' tunai. Saya akan mengakad nikahkan 
                                        sendiri perkahwinan ini.<p>
                                        
                                    ';

                                    
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                        

                                ?>
                                <br><br><br><br>

                                <p style="text-align: left;" >Tarikh : </p>
                                <p style="text-align: right;" >..............................</p>
                                <p style="text-align: right;" >(Tandatangan Wali)</p>


                                <div class="BigTitle"><br>
                                    <p>PERSETUJUAN WALI</p><br>
                                </div>

                                <p style="text-align: left;">Saya....................... No. Kad Pengenalan/Passport:....................... adalah................
                                    kepada ................ untuk ini mewakilkan kepada ....................... No. Kad Pengenalan/Passport sebagai ..................
                                    untuk mengakadnikahkan .............................. saya dengan ........................ dengan mas kahwinnya 
                                    RM .......................... *tunai/hutang.
                                </p>

                                <br><br><br><br>

                                <p style="text-align: left;" >Tarikh : </p>
                                <p style="text-align: right;" >..............................</p>
                                <p style="text-align: right;" >(Tandatangan Wali)</p>

                                <br><br>

                                <p style="text-align: left;" >Saya dengan ini menerima wakalah Wali di atas : </p>
                                <p style="text-align: right;" >..............................</p>
                                <p style="text-align: right;" >(Tandatangan Penerima Wakalah)</p>


                                <div class="BigTitle"><br>
                                    <p>SAKSI WAKALAH WALI</p><br>
                                </div>

                                <P style="text-align: left;" >Name : </P>
                                <P style="text-align: left;" >No. Kad Pengenalan/Passport : </P>
                                <P style="text-align: left;" >Alamat : </P><br>
                                <P style="text-align: left;" >Tarikh : </P>

                                <P style="text-align: left;" >.........................</P>
                                <P style="text-align: left;" >(Tandatangan Saksi)</P>

                                <div class="BigTitle"><br>
                                    <p>SAKSI WAKALAH WALI</p><br>
                                </div>

                                <P style="text-align: left;" >Saya..................................................................... megesahkan 
                                bahawa Wakalah </P><br>

                                <P style="text-align: left;" >WAli di atas adalah dibuat di hadapan saya di </P>
                                <P style="text-align: left;" >.............................................. </P>
                                <P style="text-align: left;" >dan ia megikut kehendak Hukum Syarak. </P>

                                <br><br>

                                <p style="text-align: left;" >Tarikh : </p>
                                <p style="text-align: right;" >..............................</p>
                                <p style="text-align: right;" >(Tandatangan Pendaftar dan Cap Rasmi)</p>






                    </table>
                    <br>

                    <br>
                    <div class="setting">
                    <a href="E-Forms_slip_page.php"><button style="margin-left: 600px;" class="button2 back1">Kembali</button></a>
                    </div>
                                
                    </table>
                    
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
  