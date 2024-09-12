<?php
session_start();
require_once('../connection.php');
$conn = connection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT `id`, `password`, `name`  FROM `admin_db` WHERE `username`='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $dbPassword = $row['password'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] =  $dbPassword;
        if ($password == $dbPassword) {
            echo 'Success';
            exit();
        } else {
            echo 'Incorrect password';
            exit();
        }
    } else {
        echo 'No user exists';
        exit();
    }


}
?>
