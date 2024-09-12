<?php

// Retrieving data from the database
$sql_kgwd13 = "SELECT * FROM `sk-kgwd3-db` ORDER BY id DESC";
$result_kgwd13 = mysqli_query($conn, $sql_kgwd13);

/// Initialize variables with default values
$fullname13 = $gender13 = $birthday13 = $citizenship13 = $civil_status13 = $term13 = $position13 = $address13 = $contact_number13 = $email13 = $emergencyname13 = $emergencycontact13 = '';

// Check if the query was successful
if ($result_kgwd13 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd13) > 0) {
        // Fetch the data as an associative array
        $row_kgwd13 = mysqli_fetch_assoc($result_kgwd13);

        // Assign values to variables with default values if not set
        $fullname13 = $row_kgwd13['fullname'];
        $gender13 = $row_kgwd13['gender'];
        $birthday13 = $row_kgwd13['date_of_birth'];
        $citizenship13 = $row_kgwd13['citizenship'];
        $civil_status13 = $row_kgwd13['civil_status'];
        $term13 = $row_kgwd13['term'];
        $position13 = $row_kgwd13['position'];
        $address13 = $row_kgwd13['address'];
        $contact_number13 = $row_kgwd13['contact_number'];
        $email13 = $row_kgwd13['email'];
        $emergencyname13 = $row_kgwd13['ec_name'];
        $emergencycontact13 = $row_kgwd13['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd13);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd13 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd13 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>