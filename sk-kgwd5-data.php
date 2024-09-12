<?php

// Retrieving data from the database
$sql_kgwd15 = "SELECT * FROM `sk-kgwd5-db` ORDER BY id DESC";
$result_kgwd15 = mysqli_query($conn, $sql_kgwd15);

/// Initialize variables with default values
$fullname15 = $gender15 = $birthday15 = $citizenship15 = $civil_status15 = $term15 = $position15 = $address15 = $contact_number15 = $email15 = $emergencyname15 = $emergencycontact15 = '';

// Check if the query was successful
if ($result_kgwd15 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd15) > 0) {
        // Fetch the data as an associative array
        $row_kgwd15 = mysqli_fetch_assoc($result_kgwd15);

        // Assign values to variables with default values if not set
        $fullname15 = $row_kgwd15['fullname'];
        $gender15 = $row_kgwd15['gender'];
        $birthday15 = $row_kgwd15['date_of_birth'];
        $citizenship15 = $row_kgwd15['citizenship'];
        $civil_status15 = $row_kgwd15['civil_status'];
        $term15 = $row_kgwd15['term'];
        $position15 = $row_kgwd15['position'];
        $address15 = $row_kgwd15['address'];
        $contact_number15 = $row_kgwd15['contact_number'];
        $email15 = $row_kgwd15['email'];
        $emergencyname15 = $row_kgwd15['ec_name'];
        $emergencycontact15 = $row_kgwd15['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd15);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd15 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd15 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>