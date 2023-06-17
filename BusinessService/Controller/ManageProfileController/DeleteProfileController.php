<?php
    include '../../../config.php';

    // Check if the user ID is provided
    if (isset($_GET['user_ID'])) {
        $user_ID = $_GET['user_ID'];

        // Check if the confirmation parameter is set
        if (isset($_GET['confirm'])) {
            $confirm = $_GET['confirm'];
            
            if ($confirm === 'yes') {
                // Delete the user from the database
                $query = "DELETE FROM user_profile WHERE user_ID = $user_ID";
                $result = mysqli_query($conn, $query);
                
                if ($result) {
                    echo "<script>alert('User deleted successfully.');</script>";
                } else {
                    echo "<script>alert('Error deleting user.');</script>";
                }
                
                // Redirect to the user list page
                echo '<script>window.location.href = "../../../App/ManageAccountView/AdminPageView.php";</script>';
            } elseif ($confirm === 'no') {
                // Redirect to the user list page
                echo '<script>window.location.href = "../../../App/ManageAccountView/AdminPageView.php";</script>';
            }
        } else {
            // Display confirmation prompt
            echo "<script>
                    var confirmed = confirm('Are you sure you want to delete this user?');
                    if (confirmed) {
                        window.location.href = 'DeleteProfileController.php?user_ID=$user_ID&confirm=yes';
                    } else {
                        window.location.href = 'DeleteProfileController.php?user_ID=$user_ID&confirm=no';
                    }
                </script>";
        }
    }

    mysqli_close($conn);
?>
