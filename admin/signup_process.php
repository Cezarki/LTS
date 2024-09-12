<?php 
session_start();
include_once('../connection.php');
$conn = connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // Check if username already exists
    $stmt = mysqli_prepare($conn, "SELECT * FROM admin_db WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists";
        exit();
    }

    // Check if email already exists
    $stmt = mysqli_prepare($conn, "SELECT * FROM admin_db WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  
    // Insert new user
    $stmt = mysqli_prepare($conn, "INSERT INTO admin_db (username, password, email) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword, $email);

    if (mysqli_stmt_execute($stmt)) {
        echo "Admin record created successfully";
        header('Location: admin.php');
        exit();
    } else {
        echo "Error creating admin record: " . mysqli_error($conn);
        exit();
    }
}
?>
