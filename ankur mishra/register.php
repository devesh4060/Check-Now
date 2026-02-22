<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if email already exists
    $check_sql = "SELECT * FROM new_db WHERE email='$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "<script>alert('Email already registered! Please login.'); window.location='login.php';</script>";
    } else {
        $sql = "INSERT INTO new_db (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            // After successful registration, redirect to login page
            echo "<script>alert('Registration Successful! Please login.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register-style.css">
</head>
<body>
    <div class="login-container">
        <!-- Left Side: Register Form -->
        <div class="form-container">
            <h2>Register</h2>
            <form id="registerForm" action="register.php" method="POST">
                <input type="text" name="name" id="first_name" placeholder="Name" required  pattern="[A-Za-z\s]+">
                <!-- <input type="text" name="last_name" id="last_name" placeholder="Last Name" required> -->
                <!-- <input type="number" name="age" id="age" placeholder="Age" required> -->
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <!-- <textarea name="address" id="address" placeholder="Local Address" required></textarea> -->
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
            <button class="home-btn" onclick="window.location.href='index.php'">Go Home</button>

        </div>
        <!-- Right Side: Image Section -->
        <div class="image-container">
            <img src="register-img-1.webp" alt="Register Image">
        </div>
    </div>

    <script>
        // Form validation to check if all fields are filled
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            let firstName = document.getElementById("first_name").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            if (!firstName || !email || !password) {
                event.preventDefault();
                alert("Please fill all fields before registering.");
            }
        });
    </script>
</body>
</html>

