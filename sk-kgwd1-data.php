<?php

// Retrieving data from the database
$sql_kgwd11 = "SELECT * FROM `sk-kgwd-db` ORDER BY id DESC";
$result_kgwd11 = mysqli_query($conn, $sql_kgwd11);

/// Initialize variables with default values
$fullname11 = $gender11 = $birthday11 = $citizenship11 = $civil_status11 = $term11 = $position11 = $address11 = $contact_number11 = $email11 = $emergencyname11 = $emergencycontact11 = '';

// Check if the query was successful
if ($result_kgwd11 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd11) > 0) {
        // Fetch the data as an associative array
        $row_kgwd11 = mysqli_fetch_assoc($result_kgwd11);

        // Assign values to variables with default values if not set
        $fullname11 = $row_kgwd11['fullname'];
        $gender11 = $row_kgwd11['gender'];
        $birthday11 = $row_kgwd11['date_of_birth'];
        $citizenship11 = $row_kgwd11['citizenship'];
        $civil_status11 = $row_kgwd11['civil_status'];
        $term11 = $row_kgwd11['term'];
        $position11 = $row_kgwd11['position'];
        $address11 = $row_kgwd11['address'];
        $contact_number11 = $row_kgwd11['contact_number'];
        $email11 = $row_kgwd11['email'];
        $emergencyname11 = $row_kgwd11['ec_name'];
        $emergencycontact11 = $row_kgwd11['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd11);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd11 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd11 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>