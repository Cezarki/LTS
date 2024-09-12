<?php
    session_start();
    include_once('connection.php');
    $conn = connection();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthdate'];
        $citizenship = $_POST['citizenship'];
        $civil_status = $_POST['civilstatus'];
        $term = $_POST['term'];
        $position = $_POST['position'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact'];
        $email = $_POST['email'];
        $emergencyname = $_POST['emergencyname'];
        $emergencycontact = $_POST['emergencycontact'];

        $stmt = mysqli_prepare($conn, "INSERT INTO `kgwd5-db` (`fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt, "ssssssssssss",$fullname,$gender,$birthday,$citizenship,$civil_status,$term,$position,$address,$contact_number,$email,$emergencyname,$emergencycontact);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: SbCuyapo_Officials.php");
        exit;
    }

       
?>