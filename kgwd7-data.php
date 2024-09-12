<?php

// Retrieving data from the database
$sql_kgwd7 = "SELECT * FROM `kgwd7` ORDER BY id DESC";
$result_kgwd7 = mysqli_query($conn, $sql_kgwd7);

/// Initialize variables with default values
$fullname7 = $gender7 = $birthday7 = $citizenship7 = $civil_status7 = $term7 = $position7 = $address7 = $contact_number7 = $email7 = $emergencyname7 = $emergencycontact7 = '';

// Check if the query was successful
if ($result_kgwd7 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd7) > 0) {
        // Fetch the data as an associative array
        $row_kgwd7 = mysqli_fetch_assoc($result_kgwd7);

        // Assign values to variables with default values if not set
        $fullname7 = $row_kgwd7['fullname'];
        $gender7 = $row_kgwd7['gender'];
        $birthday7 = $row_kgwd7['date_of_birth'];
        $citizenship7 = $row_kgwd7['citizenship'];
        $civil_status7 = $row_kgwd7['civil_status'];
        $term7 = $row_kgwd7['term'];
        $position7 = $row_kgwd7['position'];
        $address7 = $row_kgwd7['address'];
        $contact_number7 = $row_kgwd7['contact_number'];
        $email7 = $row_kgwd7['email'];
        $emergencyname7 = $row_kgwd7['ec_name'];
        $emergencycontact7 = $row_kgwd7['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd7);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd7 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd7 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>