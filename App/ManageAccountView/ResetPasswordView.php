<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" type="text/css" href="../../Public/Style/Reset_password.css">

</head>

<body>

<form id="resetPasswordForm">
  <!-- Existing code here -->
</form>

    <div class="form-container">

        <center><img src="../../Public/images/logo_jaip.png" style="width: 100px;" alt="logo">
        <h1>Reset Your Password</h1></center>
        <label for="Password">Password:</label>
        <div class="show-password">
            <input type="password" id="Password" name="Password" placeholder="Enter new password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" title="Password must be at least 6 characters long and contain letters and numbers" required>
            <span class="toggle-password" onclick="togglePasswordVisibility('Password', 'toggleIcon1')">Show</span>
        </div>
        <p></p>
        <label for="Confirm_Password">Confirm Password:</label>
        <div class="show-password">
            <input type="password" id="Confirm_Password" name="Confirm_Password" placeholder="Confirm new password" required>
            <span class="toggle-password" onclick="togglePasswordVisibility('Confirm_Password', 'toggleIcon2')">Show</span>
        </div>

        <div class="confirm-message" id="confirmMessage" style="display: none;">
            <span>Your passwords do not match.</span>
        </div>
        
        <div>
            <button type="submit" onclick="return checkFormSubmission();">Submit</button>
            <button class="suggest-button" type="button" onclick="suggestPassword()">Suggest Password</button>
        </div>
        
        <div class="login-link">
            <a href="MainLoginView.php">Back to Login</a>
        </div>

        <div class="message" id="message"></div>
    </div>
</body>

<script>
        function suggestPassword() {
            // Generate a random password with letters and numbers
            var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            var passwordLength = 8;
            var suggestedPassword = "";
            for (var i = 0; i < passwordLength; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                suggestedPassword += characters.charAt(randomIndex);
            }
            // Set the suggested password to the input field
            document.getElementById("Password").value = suggestedPassword;
        }

        function togglePasswordVisibility(inputId, toggleId) {
            var passwordInput = document.getElementById(inputId);
            var toggleIcon = document.getElementById(toggleId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                toggleIcon.textContent = "Show";
            }
        }

        function checkFormSubmission() {
            var password = document.getElementById("Password").value;
            var confirm_password = document.getElementById("Confirm_Password").value;
            var message = document.getElementById("message");
            var confirmMessage = document.getElementById("confirmMessage");

            if (password === "" || confirm_password === "") {
                message.innerHTML = "Please fill in both password fields.";
                message.style.color = "red";
                confirmMessage.style.display = "none";
                return false; // Prevent form submission
            } else if (password !== confirm_password) {
                message.innerHTML = "";
                confirmMessage.style.display = "block";
                return false; // Prevent form submission
            } else {
                message.innerHTML = "Your password has been changed.";
                message.style.color = "green";
                confirmMessage.style.display = "none";
                return true; // Allow form submission
            }
        }

    </script>
</html>
