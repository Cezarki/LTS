<?php

// Retrieving data from the database
$sql_kgwd12 = "SELECT * FROM `sk-kgwd2-db` ORDER BY id DESC";
$result_kgwd12 = mysqli_query($conn, $sql_kgwd12);

/// Initialize variables with default values
$fullname12 = $gender12 = $birthday12 = $citizenship12 = $civil_status12 = $term12 = $position12 = $address12 = $contact_number12 = $email12 = $emergencyname12 = $emergencycontact12 = '';

// Check if the query was successful
if ($result_kgwd12 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd12) > 0) {
        // Fetch the data as an associative array
        $row_kgwd12 = mysqli_fetch_assoc($result_kgwd12);

        // Assign values to variables with default values if not set
        $fullname12 = $row_kgwd12['fullname'];
        $gender12 = $row_kgwd12['gender'];
        $birthday12 = $row_kgwd12['date_of_birth'];
        $citizenship12 = $row_kgwd12['citizenship'];
        $civil_status12 = $row_kgwd12['civil_status'];
        $term12 = $row_kgwd12['term'];
        $position12 = $row_kgwd12['position'];
        $address12 = $row_kgwd12['address'];
        $contact_number12 = $row_kgwd12['contact_number'];
        $email12 = $row_kgwd12['email'];
        $emergencyname12 = $row_kgwd12['ec_name'];
        $emergencycontact12 = $row_kgwd12['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd12);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd12 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd12 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>