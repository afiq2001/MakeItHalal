<?php 
include '../../Register_check.php';
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #e5c899;">

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" id="profilePicture" src="../../Public/images/logo.jpg">
                    <span class="font-weight-bold">User</span>
                    <span class="text-black-50">Your Private information</span>
                    <p></p>

                    <div class="btn-container">
                    <a href="../ManageAccountView/MainLoginView.php" class="btn btn-logout" style="color: red;">Logout</a>
                    </div>


                </div>
            </div>      
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="Full Name" value=""></div>
                        <div class="col-md-12"><label class="labels">IC Number</label><input type="text" class="form-control" placeholder="IC Number" value=""></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Mobile Number" value=""></div>
                        <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" placeholder="City" value=""></div>
                        <div class="col-md-12"><label class="labels">Role</label><input type="text" class="form-control" placeholder="Role" value=""></div>
                    </div>

                    <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button" style="background-color: #c8ad7f;" onclick="showAlert()">Save Profile</button>
                </div>

<script>
    function showAlert() {
        alert("Your information has been saved!");
    }
</script>


                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Additional Details</span></div><br>
                    <div class="col-md-12">
                        <label class="labels">Email ID</label>
                        <input type="text" class="form-control" placeholder="Email ID" value="">
                    </div> <br>
                    <div class="col-md-12">
                        <label class="labels">Password</label>
                        <input type="password" class="form-control" placeholder="Password" value="">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Gender</label>
                        <select class="form-control" id="genderSelect">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>

                <div style="margin: 50px;">
                    <img src="../../Public/images/logo_jaip.png" style="width: 250px;" alt="logo">
                </div>

            </div>
        </div>
    </div>

    <script>
        // Update profile picture based on selected gender
        document.getElementById('genderSelect').addEventListener('change', function() {
            var selectedGender = this.value;
            var profilePicture = document.getElementById('profilePicture');

            if (selectedGender === 'male') {
                profilePicture.src = '../../Public/images/Male_profile.png';
            } else if (selectedGender === 'female') {
                profilePicture.src = '../../Public/images/Female_profile.png';
            }
        });
    </script>

</body>

</html>



