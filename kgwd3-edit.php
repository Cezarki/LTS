<?php
// Start session
session_start();

// Include the database connection
include_once('connection.php');
$conn = connection();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
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

    // Update data in the database using prepared statement
    $sql = "UPDATE `kgwd3-db` SET
            fullname=?, gender=?, date_of_birth=?,
            citizenship=?, civil_status=?, term=?,
            position=?, address=?, contact_number=?,
            email=?, ec_name=?, ec_number=?
            WHERE id=0";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $fullname, $gender, $birthdate, $citizenship, $civilstatus, $term, $position, $address, $contact_number, $email, $emergencyname, $emergencycontact);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();

header('Location: SbCuyapo_Officials.php');

exit;
?>
