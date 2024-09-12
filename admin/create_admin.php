<?php
session_start();
require_once('../connection.php');
$conn = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-style/sign-up.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign-up Form</title>
</head>
<body>

<style>
    body {
        background-image: url("image/brgyhall.jpg");
        background-repeat: no-repeat;
        background-size: 100% 120vh;   
        background-position: center;
    }

    .body-con {
        background-color: rgba(0,0,0,0.3);
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        padding: 20px;
        width: 400px;
    }
</style>

<div class="body-con">
    <div class="form-container">
        <h2 class="mb-4">Sign Up</h2>
        <form id="signupForm" action="signup_process.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Username:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
          
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
          
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
