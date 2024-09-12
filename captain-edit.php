<?php
// Start session
session_start();

// Include the database connection
include_once('connection.php');
$conn = connection();

// Check if the form is submitted
if (isset($_POST['update'])) {
    // Get form data
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
    $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
    $civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
    $term = mysqli_real_escape_string($conn, $_POST['term']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $emergencyname = mysqli_real_escape_string($conn, $_POST['emergencyname']);
    $emergencycontact = mysqli_real_escape_string($conn, $_POST['emergencycontact']);

    // Update data in the database
    $sql = "UPDATE captain_db SET
            fullname='$fullname', gender='$gender', date_of_birth='$birthdate',
            citizenship='$citizenship', civil_status='$civilstatus', term='$term',
            position='$position', address='$address', contact_number='$contact_number',
            email='$email', ec_name='$emergencyname', ec_number='$emergencycontact'
            WHERE captain_id=0";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
mysqli_close($conn);

header('Location: SbCuyapo_Officials.php');

exit;
?>
