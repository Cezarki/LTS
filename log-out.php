<?php
    session_start();
    require_once('connection.php');
    $conn = connection();

    session_destroy();
    header('Location: index.php');
    exit();
?>