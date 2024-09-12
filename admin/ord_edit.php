<?php
// Connect to the database
$conn = new PDO('mysql:host=localhost; dbname=cuyapo_municipals', 'root', '');

// Check if the form is submitted
if (isset($_POST['update'])) {
    // Retrieve form data
    $resolutionNumber = $_POST['edit_res'];
    $proponent = $_POST['edit_propo'];
    $seconded = $_POST['edit_sec'];
    $committee = $_POST['edit_com'];
    $date = $_POST['edit_times'];

    // Get the ID of the record to be updated
    $id = $_POST['myId'];

    // Update record in the database
    $query = $conn->prepare("UPDATE upload_ord SET reference_number = :resolutionNumber, date_time = :date, proponent = :proponent, seconded = :seconded, committe = :committee WHERE id = :id");
    $query->execute(array(
        ':resolutionNumber' => $resolutionNumber,
        ':date' => $date,
        ':proponent' => $proponent,
        ':seconded' => $seconded,
        ':committee' => $committee,
        ':id' => $id
    ));

    // Redirect to a success page or display a success message
    header("Location: ordinances_dash.php");
    exit;
}
?>
