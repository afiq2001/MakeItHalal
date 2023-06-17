<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/staff_approval_page.css">
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
            <tr>
                <td>

                <table border="0" align="center">
                        <tr>
                                <th class="box1" style="background-color: white;" ><label for="user_IC">NoKP Pemohon</label><br>
                                <input style="border: 1px solid black;" type="text" id="user_IC" name="user_IC" ></th>

                                <th class="box1" style="background-color: white;" ><label for="spouseName">NoKP Pasangan</label><br>
                                <input style="border: 1px solid black;" type="text" id="spouseName" name="spouseName" ></th>

                                <th class="box1" style="background-color: white;" ><label for="akuanNo">No Akuan</label><br>
                                <input style="border: 1px solid black;" type="text" id="akuanNo" name="akuanNo" ></th>
                            
                        </tr>  

                        <tr>
                            <th class="box1" style="background-color: white;" ><label for="date_registration">Tarikh Daftar</label><br>
                            <input style="border: 1px solid black;" type="date" id="date_registration" name="date_registration" ></th>

                            <th class="box1" style="background-color: white;" ><label for="status_approval">Status</label><br>
                            <input style="border: 1px solid black;" type="text" id="status_approval" name="status_approval" ></th>


                            <th class="box1" style="background-color: white;" ><a href=""><button style="margin-left: 1px;" class="button2 back1">Cari</button></a></th>
                        </tr>
            
            
                </table>
                
                    <table border="1" align="center">
                        

                        <tr>
                            <th>Nama Pemohon/No KP</th>
                            <th>Nama Pasangan/No KP</th>
                            <th>No. Akuan</th>
                            <th>Tarikh Daftar</th>
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
                                    <td>'.$user_name.'<br>'.$user_IC.'</td>
                                    <td>'.$spouseName.'<br>'.$spouse_IC.'</td>
                                    <td>'.$akuanNo.'</td>
                                    <td>'.$date_registration.'</td>
                                    
                                    
                                    

                                    <td>
                                        <div class="setting">
                                        <a href="staff_groom_Information.php?"><img src="../../Public/images/editicon.png" alt="Logo" class="setting"></a>
                                        <a href="staff_marriage_approval_page.php?"><img src="../../Public/images/marriageapproveicon.png" alt="Logo" class="setting"></a>
                                        <a href="staff_card_approval_page.php?"><img src="../../Public/images/approvalicon.png" alt="Logo" class="setting"></a>
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
  