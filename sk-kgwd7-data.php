<?php

// Retrieving data from the database
$sql_kgwd17 = "SELECT * FROM `sk-kgwd7-db` ORDER BY id DESC";
$result_kgwd17 = mysqli_query($conn, $sql_kgwd17);

/// Initialize variables with default values
$fullname17 = $gender17 = $birthday17 = $citizenship17 = $civil_status17 = $term17 = $position17 = $address17 = $contact_number17 = $email17 = $emergencyname17 = $emergencycontact17 = '';

// Check if the query was successful
if ($result_kgwd17 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd17) > 0) {
        // Fetch the data as an associative array
        $row_kgwd17 = mysqli_fetch_assoc($result_kgwd17);

        // Assign values to variables with default values if not set
        $fullname17 = $row_kgwd17['fullname'];
        $gender17 = $row_kgwd17['gender'];
        $birthday17 = $row_kgwd17['date_of_birth'];
        $citizenship17 = $row_kgwd17['citizenship'];
        $civil_status17 = $row_kgwd17['civil_status'];
        $term17 = $row_kgwd17['term'];
        $position17 = $row_kgwd17['position'];
        $address17 = $row_kgwd17['address'];
        $contact_number17 = $row_kgwd17['contact_number'];
        $email17 = $row_kgwd17['email'];
        $emergencyname17 = $row_kgwd17['ec_name'];
        $emergencycontact17 = $row_kgwd17['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd17);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd17 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd17 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>