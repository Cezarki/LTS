<?php

// Retrieving data from the database
$sql_kgwd5 = "SELECT * FROM `kgwd5-db` ORDER BY id DESC";
$result_kgwd5 = mysqli_query($conn, $sql_kgwd5);

/// Initialize variables with default values
$fullname5 = $gender5 = $birthday5 = $citizenship5 = $civil_status5 = $term5 = $position5 = $address5 = $contact_number5 = $email5 = $emergencyname5 = $emergencycontact5 = '';

// Check if the query was successful
if ($result_kgwd5 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd5) > 0) {
        // Fetch the data as an associative array
        $row_kgwd5 = mysqli_fetch_assoc($result_kgwd5);

        // Assign values to variables with default values if not set
        $fullname5 = $row_kgwd5['fullname'];
        $gender5 = $row_kgwd5['gender'];
        $birthday5 = $row_kgwd5['date_of_birth'];
        $citizenship5 = $row_kgwd5['citizenship'];
        $civil_status5 = $row_kgwd5['civil_status'];
        $term5 = $row_kgwd5['term'];
        $position5 = $row_kgwd5['position'];
        $address5 = $row_kgwd5['address'];
        $contact_number5 = $row_kgwd5['contact_number'];
        $email5 = $row_kgwd5['email'];
        $emergencyname5 = $row_kgwd5['ec_name'];
        $emergencycontact5 = $row_kgwd5['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd5);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd5 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd5 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>