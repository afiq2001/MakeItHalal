<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    
    <style>
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn {
            padding: 5px 10px;
            background-color: #8b4513;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 5px;
        }

        .btn:hover {
            background-color: #a0522d;
        }

        .search-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .search-input-container {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 6px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }

        .search-icon {
            color: #aaa;
            cursor: pointer;
        }

        .add-user-icon {
            color: #aaa;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List of registrants</h1>

        <div class="search-container">
            <div class="search-input-container">
                <input type="text" class="search-input" id="searchInput" placeholder="Search...">
                <i class="fas fa-search search-icon" onclick="searchUser()"></i>
            </div>
            <i class="fas fa-plus-circle add-user-icon" onclick="addUser()"></i>
        </div>
        
        <?php
        include '../../config.php';

        // Fetch all users from the database
        $query = "SELECT * FROM user_profile";
        $result = mysqli_query($conn, $query);

        // Check if any users exist
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>IC Number</th><th>Mobile Number</th><th>City</th><th>Gender</th><th>Role</th><th>Password</th><th>Action</th></tr>";

            // Loop through each user and display their information
            while ($row = mysqli_fetch_assoc($result)) {
                $user_ID = $row['user_ID'];
                $user_name = $row['user_name'];
                $user_email = $row['user_email'];
                $user_ic = $row['user_ic'];
                $user_phone = $row['user_phone'];
                $user_city = $row['user_city'];
                $user_gender = $row['user_gender'];
                $user_type = $row['user_type'];
                $user_password = $row['user_password'];

                echo "<tr style='background-color: #ffe4c4;'>";
                echo "<td><b>$user_ID</b></td>";
                echo "<td><b>$user_name</b></td>";
                echo "<td><b>$user_email</b></td>";
                echo "<td><b>$user_ic</b></td>";
                echo "<td><b>$user_phone</b></td>";
                echo "<td><b>$user_city</b></td>";
                echo "<td><b>$user_gender</b></td>";
                echo "<td><b>$user_type</b></td>";
                echo "<td><span id='password-$user_ID' data-password='$user_password'><b>******</b></span></td>";
                echo "<td>
                        <div class='btn-container'>";
                if ($user_type === 'User' || $user_type === 'Staff') {
                    echo "<a href='../../BusinessService/Controller/ManageProfileController/DisplayProfileController.php?user_ID=$user_ID' class='btn btn-view'><i class='far fa-eye'></i></a>
                          <a href='../../BusinessService/Controller/ManageProfileController/EditProfileController.php?user_ID=$user_ID' class='btn btn-edit'><i class='far fa-edit'></i></a>
                          <a href='../../BusinessService/Controller/ManageProfileController/DeleteProfileController.php?user_ID=$user_ID' class='btn btn-delete'><i class='far fa-trash-alt'></i></a>";
                } else {
                    echo "<a href='../../BusinessService/Controller/ManageProfileController/DisplayProfileController.php?user_ID=$user_ID' class='btn btn-view'><i class='far fa-eye'></i></a>
                          <a href='../../BusinessService/Controller/ManageProfileController/EditProfileController.php?user_ID=$user_ID' class='btn btn-edit'><i class='far fa-edit'></i></a>
                          <a href='../../BusinessService/Controller/ManageProfileController/DeleteProfileController.php?user_ID=$user_ID' class='btn btn-delete'><i class='far fa-trash-alt'></i></a>";
                }
            }

            echo "</table>";
        } else {
            echo "No users found.";
        }

        mysqli_close($conn);
        ?>
    </div>
    <p></p>
    <div class="btn-container">
        <a href="../../App/ManageAccountView/AdminLoginView.php" class="btn btn-logout">Logout</a>
    </div>

    <script>
        function searchUser() {
            // Get the search query from the input field
            var searchQuery = document.getElementById("searchInput").value.toLowerCase();

            // Get all table rows
            var rows = document.querySelectorAll("table tr");

            // Loop through each row and hide/show based on the search query
            for (var i = 1; i < rows.length; i++) { // Start from index 1 to skip the table header row
                var name = rows[i].querySelector("td:nth-child(2)").innerText.toLowerCase();
                var email = rows[i].querySelector("td:nth-child(3)").innerText.toLowerCase();
                var icNumber = rows[i].querySelector("td:nth-child(4)").innerText.toLowerCase();

                if (name.includes(searchQuery) || email.includes(searchQuery) || icNumber.includes(searchQuery)) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        // Function to handle adding a user
        function addUser() {
            // Redirect to the add user page
            window.location.href = "../../BusinessService/Controller/ManageProfileController/AddUserProfileController.php";
        }
    </script>
</body>
</html>
