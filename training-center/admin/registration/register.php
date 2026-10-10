<?php
require_once '../../config/db.php';
if (isset($_POST['register'])){
    date_default_timezone_set('Asia/Dhaka');
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $terms = $_POST['terms'];
  $reg_time = date("y-m-d");
  echo $reg_time;
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="css/registration.css">
</head>
<body>

    <div class="container">

        <div class="form-box">

            <h1>Create Account</h1>
            <p class="subtitle">Register your account to get started</p>

            <form action="register.php" method="POST">

                <div class="input-group">
                    <label for="fullname">Full Name</label>
                    <input
                        type="text"
                        id="full_name"
                        name="full_name"
                        placeholder="Enter your full name"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Choose a username"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter your phone number"
                    >
                </div>

                <div class="row">

                    <div class="input-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter password"
                            required
                        >
                    </div>

                    <div class="input-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input
                            type="password"
                            id="confirm_password"
                            name="confirm_password"
                            placeholder="Confirm password"
                            required
                        >
                    </div>

                </div>

                <div class="input-group">
                    <label for="gender">Gender</label>

                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input
                        type="date"
                        id="dob"
                        name="dob"
                    >
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        I agree to the Terms & Conditions
                    </label>
                </div>

                <button type="submit" name="register" class="register-btn">
                    Create Account
                </button>

                <p class="login-text">
                    Already have an account?
                    <a href="login.php">Login</a>
                </p>

            </form>

        </div>

    </div>

</body>
</html>