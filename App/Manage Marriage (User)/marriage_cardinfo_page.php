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
                <th class="th1">Pendaftaran Kad</th>
            </tr>
            <tr>
                <td class="td1">
                    
                <form method="POST" action="manage_marriage_cardController.php">
                    <table border="0" align="center">

                    <?php
                            $conn = mysqli_connect("localhost","root","","make_it_halal");
                            $sql = "SELECT * FROM user_profile";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $user_name=$row['user_name'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama Suami</label></th>
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
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">NoKP Suami</label></th>
                                        <th scope = "row">: '.$user_IC.'</th>
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
                                    $spouseName=$row['spouseName'];
                                    

                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">Nama Isteri</label></th>
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
                            $sql = "SELECT * FROM SPOUSE, marriage_registration";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $spouse_IC=$row['spouse_IC'];
                                    $akuanNo=$row['akuanNo'];
                                    $date_registration=$row['date_registration'];


                                    echo '<tr>
                                        <th class="tab"> <label for="Bil">NoKP Isteri</label></th>
                                        <th scope = "row">: '.$spouse_IC.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">No Akuan</label></th>
                                        <th scope = "row">: '.$akuanNo.'</th>
                                    </tr>
                                    <tr>
                                        <th class="tab"> <label for="Bil">Tarikh Pendaftaran</label></th>
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
                                    <th><label for="marriagecard">Kad Nikah</label></th>
                                    <th>: <select id="marriagecard" name="">
                                        <option value="marriagecard">Kad Perakuan Nikah</option>
                                        
                                    </select></th>
                                </tr>
                                <tr>
                                    <th><label for="receipt">No. Resit Bayaran</label></th>
                                    <th>: <input type="text" id="receipt" name="receipt" required></th>
                            
                                </tr>
                                <tr>
                                    <th><label for="">Dokumen Resit Bayaran</label></th>
                                    <th>: <input style="background-color: white;" class="form-control" type="file" id="formFile">
                            
                                </tr>
                                <tr>
                                    <th><label for="apply_date">Tarikh Mohon</label></th>
                                    <th>: <input type="date" id="apply_date" name="apply_date" required></th>
                            
                                </tr>
                                <tr>
                                    <th><label for="date_pickup">Tarikh Pungutan</label></th>
                                    <th>: <input type="date" id="date_pickup" name="date_pickup" required></th>
                            
                                </tr>
                                
    
                    </table>
                    
                        <div class="setting">
                            <a href="marriage_registration.php"><button name="submit1" class="button2 back1">Kembali</button></a>
                            <a href="marriage_registration.php"><button type="submit" name="submit" class="button2 back1">Confirm</button></a>

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
  