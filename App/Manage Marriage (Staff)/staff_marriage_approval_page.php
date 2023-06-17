<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Panel - Sistem Maklumat Perkahwinan Islam Pahang</title>
    <link rel="stylesheet" type="text/css" href="../../Public/Style/staff_marriage_approval_page.css">
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
                <th class="th1">MARRIAGE APPROVAL</th>
            </tr>
            <tr>
                <td class="td1">
                    
                <form method="POST" action="staffmanagemarriageController.php">
                    <table border="0" align="center">

                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile, spouse, marriage_registration";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_name=$row['user_name'];
                                    $user_ic=$row['user_ic'];
                                    $spouseName=$row['spouseName'];
                                    $spouse_ICNum=$row['spouse_ICNum'];
                                    $akuanNo=$row['akuanNo'];
                                    $date_registration=$row['date_registration'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama Pemohon</label></th>
                                        <th scope = "row">: '.$user_name.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">No KP Pemohon</label></th>
                                        <th scope = "row">: '.$user_ic.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Nama Pasangan</label></th>
                                        <th scope = "row">: '.$spouseName.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">No KP Pasangan</label></th>
                                        <th scope = "row">: '.$spouse_ICNum.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Tarikh Mohon</label></th>
                                        <th scope = "row">: '.$akuanNo.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Tarikh Pungutan</label></th>
                                        <th scope = "row">: '.$date_registration.'</th>
                                    </tr>';
                                    }
                                }
                                else {
                                    echo "No Results";
                                }
                                $conn->close();
                                ?>
                                
                                <tr>
                                    <th><label for="status_approval">Status</label></th>
                                    <th>: <select id="status_approval" name="">
                                        <option value="status_approval"></option>
                                        <option value="status_approval">Batal</option>
                                        <option value="status_approval">Lulus</option>
                                        
                                    </select></th>
                                </tr>
                                <tr>
                                    <th><label for="date_approval">Tarikh Kelulusan</label></th>
                                    <th>: <input type="date" id="date_approval" name="date_approval" required></th>
                            
                                </tr>
                                

    
                    </table>
                    
                    <div class="setting">
                        <a href=""><button name="submit1" class="button2 back1">Kembali</button></a>
                        <a href=""><button name="submit" class="button2 back1">Confirm</button></a>

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
  