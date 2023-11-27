<?php
// Start the session
session_start();
include "connect.php";
// Connect to the database
// $conn = mysqli_connect("localhost", "root", " ", "signup");

// Check if the user submitted the login form
if (isset($_POST['submit'])) {
    // Get the username and password from the form
    $username = mysqli_real_escape_string($conn, $_POST['USERNAME']);
    $password = mysqli_real_escape_string($conn, $_POST['PASSWORD']);

    // Query the database for the user
    $sql = "SELECT * FROM `admin` WHERE `USERNAME` = '$username' AND `PASSWORD` = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the user exists and the password is correct
    if (mysqli_num_rows($result) == 1) {
        // Set the session variable for the user
        $_SESSION['USERNAME'] = $username;
        // Redirect to the home page
        header("location: dash.php");
    } else {
        // Display an error message
        $_SESSION['error'] = 'Wrong password or username';
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="im/WARD.png">
    <link rel="icon" type="image/png" href="/im/WARD.png">
    <title>www.aims/admin/login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="20x20" href="assets/images/logo-light-icon.png">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Agdasima&family=Poppins&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(../assets/img/ab.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    align-items: center;
    min-height: 90vh;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    align-self: center;
    margin-top: 200px;
}

.card {
    width: 350px;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    color: #fff;
    margin-bottom: 5px;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8);
}

button {
    padding: 10px;
    background-color: #fff;
    color: #498ffc;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #70c1ff;
}

@media (max-width: 480px) {
    .card {
        width: 100%;
        max-width: 350px;
    }
}
</style>

<body>
    <div class="container">
        <div class="card">
            <h2>Login Form</h2>
            <form action="index.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="USERNAME" id="username" placeholder="Enter your username">
                <label for="password">Password</label>
                <input type="password" name="PASSWORD" id="password" placeholder="Enter your password">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>