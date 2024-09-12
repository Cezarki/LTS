<?php
// Function Connection
// Calling the database connection
include_once('../connection.php');
$conn = connection();

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform a database query to retrieve all data
$sql = "SELECT * FROM `upload_ord` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if ($result) {
    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Handle query failure
    $error = array('error' => 'Failed to fetch data: ' . mysqli_error($conn));
    echo json_encode($error);
}

// Close the database connection
mysqli_close($conn);

?>
