<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/Bride_Information.css">
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
                <th class="th1">MAKLUMAT PASANGAN</th>
            </tr>
            <tr>
                <td class="td1">
                <form>  
                
                    <table border="0" align="center">
                    
                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM spouse";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    
                                    $spouseName=$row['spouseName'];
                                    $spouse_IC=$row['spouse_IC'];
                                    $spouseDOB=$row['spouseDOB'];
                                    $spouseRace=$row['spouseRace'];
                                    $spousePhoneNum=$row['spousePhoneNum'];
                                    $spouseAddress=$row['spouseAddress'];
                                    $spouseSalary=$row['spouseSalary'];
                                    $spouseJobPosition=$row['spouseJobPosition'];
                                    $spouselvlEdu=$row['spouselvlEdu'];
                                    
                                


                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama </label></th>
                                        <th scope = "row">: '.$spouseName.'<br></th>
                                    </tr>
                                    
                                    <tr>
                                        <th class="tab"> <label for="Bil">NoKP </label></th>
                                        <th scope = "row">: '.$spouse_IC.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Tarikh Lahir</label></th>
                                        <th scope = "row">: '.$spouseDOB.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Bangsa</label></th>
                                        <th scope = "row">: '.$spouseRace.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">No Telefon</label></th>
                                        <th scope = "row">: '.$spousePhoneNum.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Email </label></th>
                                        <th scope = "row">: '.$spouseAddress.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Alamat</label></th>
                                        <th scope = "row">: '.$spouseSalary.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Type</label></th>
                                        <th scope = "row">: '.$spouseJobPosition.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Pendapatan</label></th>
                                        <th scope = "row">: '.$spouselvlEdu.'</th>
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
                        <a href="staff_groom_Information.php"><button class="button2 back1">Kebelakang</button></a>
                        <a href="staff_approval_page.php"><button name="submit" class="button2 back1">Confirm</button></a>
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
  