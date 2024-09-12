<?php

// Retrieving data from the database
$sql_kgwd6 = "SELECT * FROM `kgwd6-db` ORDER BY id DESC";
$result_kgwd6 = mysqli_query($conn, $sql_kgwd6);

/// Initialize variables with default values
$fullname6 = $gender6 = $birthday6 = $citizenship6 = $civil_status6 = $term6 = $position6 = $address6 = $contact_number6 = $email6 = $emergencyname6 = $emergencycontact6 = '';

// Check if the query was successful
if ($result_kgwd6 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd6) > 0) {
        // Fetch the data as an associative array
        $row_kgwd6 = mysqli_fetch_assoc($result_kgwd6);

        // Assign values to variables with default values if not set
        $fullname6 = $row_kgwd6['fullname'];
        $gender6 = $row_kgwd6['gender'];
        $birthday6 = $row_kgwd6['date_of_birth'];
        $citizenship6 = $row_kgwd6['citizenship'];
        $civil_status6 = $row_kgwd6['civil_status'];
        $term6 = $row_kgwd6['term'];
        $position6 = $row_kgwd6['position'];
        $address6 = $row_kgwd6['address'];
        $contact_number6 = $row_kgwd6['contact_number'];
        $email6 = $row_kgwd6['email'];
        $emergencyname6 = $row_kgwd6['ec_name'];
        $emergencycontact6 = $row_kgwd6['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd6);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd6 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd6 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>