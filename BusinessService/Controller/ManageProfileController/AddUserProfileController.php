<!-- add_user.php -->

<?php
include '../../../config.php';

// Initialize variables to store form data and error messages
$user_name = $user_ic = $user_phone = $user_city = $user_gender = $user_email = $user_type = $user_password = "";
$name_error = $IC_error = $phoneNum_error = $city_error = $gender_error = $email_error = $type_error = $password_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and validate user details from the form
    $user_name = validateInput($_POST['user_name']);
    $user_ic = validateInput($_POST['user_ic']);
    $user_phone = validateInput($_POST['user_phone']);
    $user_city = validateInput($_POST['user_city']);
    $user_gender = validateInput($_POST['user_gender']);
    $user_email = validateInput($_POST['user_email']);
    $user_type = validateInput($_POST['user_type']);
    $user_password = validateInput($_POST['user_password']);

    // Validate each field and display error messages if necessary
    if (empty($user_name)) {
        $name_error = "Name is required";
    }

    if (empty($user_ic)) {
        $IC_error = "IC Number is required";
    }

    if (empty($user_phone)) {
        $phoneNum_error = "Phone Number is required";
    }

    if (empty($user_city)) {
        $city_error = "City is required";
    }

    if (empty($user_gender)) {
        $gender_error = "Gender is required";
    }

    if (empty($user_email)) {
        $email_error = "Email is required";
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
    }

    if (empty($user_type)) {
        $type_error = "Type is required";
    }

    if (empty($user_password)) {
        $password_error = "Password is required";
    }

    // If there are no validation errors, insert the new user into the database
    if (empty($name_error) && empty($IC_error) && empty($phoneNum_error) && empty($city_error) && empty($gender_error) && empty($email_error) && empty($type_error) && empty($password_error)) {
        $query = "INSERT INTO user_profile (user_name, user_ic, user_phone, user_city, user_gender, user_email, user_type, user_password) 
                  VALUES ('$user_name', '$user_ic', '$user_phone', '$user_city', '$user_gender', '$user_email', '$user_type', '$user_password')";
        
        if (mysqli_query($conn, $query)) {
            // User added successfully
            echo "<script>alert('User added successfully!');</script>";
            header("Location:../../../App/ManageAccountView/AdminPageView.php?user_ID=" . mysqli_insert_id($conn));
            exit();
        }
        } else {
            // Error occurred while adding the user
            echo "Error: " . mysqli_error($conn);
        }
    }


// Function to validate form inputs
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);
?>

<!-- Add User Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 600px;
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group.error label {
            color: red;
        }

        .form-group.error input {
            border-color: red;
        }

        .error-message {
            color: red;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Add a member</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group <?php if (!empty($name_error)) echo 'error'; ?>">
                <label for="user_name">Name:</label>
                <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $user_name; ?>" required>
                <?php if (!empty($name_error)) echo '<div class="error-message">' . $name_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($IC_error)) echo 'error'; ?>">
                <label for="user_IC">IC Number:</label>
                <input type="text" class="form-control" id="user_IC" name="user_IC" value="<?php echo $user_IC; ?>" required>
                <?php if (!empty($IC_error)) echo '<div class="error-message">' . $IC_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($phoneNum_error)) echo 'error'; ?>">
                <label for="user_phoneNum">Phone Number:</label>
                <input type="text" class="form-control" id="user_phoneNum" name="user_phoneNum" value="<?php echo $user_phoneNum; ?>" required>
                <?php if (!empty($phoneNum_error)) echo '<div class="error-message">' . $phoneNum_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($city_error)) echo 'error'; ?>">
                <label for="user_city">City:</label>
                <input type="text" class="form-control" id="user_city" name="user_city" value="<?php echo $user_city; ?>" required>
                <?php if (!empty($city_error)) echo '<div class="error-message">' . $city_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($gender_error)) echo 'error'; ?>">
                <label for="user_gender">Gender:</label>
                <select class="form-control" id="user_gender" name="user_gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male" <?php if ($user_gender == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($user_gender == 'Female') echo 'selected'; ?>>Female</option>
                </select>
                <?php if (!empty($gender_error)) echo '<div class="error-message">' . $gender_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($email_error)) echo 'error'; ?>">
                <label for="user_email">Email:</label>
                <input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo $user_email; ?>" required>
                <?php if (!empty($email_error)) echo '<div class="error-message">' . $email_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($type_error)) echo 'error'; ?>">
                <label for="user_type">Type:</label>
                <select class="form-control" id="user_type" name="user_type" required>
                    <option value="">Select Type</option>
                    <option value="Admin" <?php if ($user_type == 'Staff') echo 'selected'; ?>>Staff</option>
                    <option value="User" <?php if ($user_type == 'User') echo 'selected'; ?>>User</option>
                </select>
                <?php if (!empty($type_error)) echo '<div class="error-message">' . $type_error . '</div>'; ?>
            </div>
            <div class="form-group <?php if (!empty($password_error)) echo 'error'; ?>">
                <label for="user_password">Password:</label>
                <input type="password" class="form-control" id="user_password" name="user_password" required>
                <?php if (!empty($password_error)) echo '<div class="error-message">' . $password_error . '</div>'; ?>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn">Add User</button>
                <button type="button" class="btn" onclick="window.location.href='../../../App/ManageAccountView/AdminPageView.php'">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
