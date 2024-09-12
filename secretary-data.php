<?php

// Retrieving data from the database
$sql_kgwd8 = "SELECT * FROM `secretary-db` ORDER BY id DESC";
$result_kgwd8 = mysqli_query($conn, $sql_kgwd8);

/// Initialize variables with default values
$fullname8 = $gender8 = $birthday8 = $citizenship8 = $civil_status8 = $term8 = $position8 = $address8 = $contact_number8 = $email8 = $emergencyname8 = $emergencycontact8 = '';

// Check if the query was successful
if ($result_kgwd8 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd8) > 0) {
        // Fetch the data as an associative array
        $row_kgwd8 = mysqli_fetch_assoc($result_kgwd8);

        // Assign values to variables with default values if not set
        $fullname8 = $row_kgwd8['fullname'];
        $gender8 = $row_kgwd8['gender'];
        $birthday8 = $row_kgwd8['date_of_birth'];
        $citizenship8 = $row_kgwd8['citizenship'];
        $civil_status8 = $row_kgwd8['civil_status'];
        $term8 = $row_kgwd8['term'];
        $position8 = $row_kgwd8['position'];
        $address8 = $row_kgwd8['address'];
        $contact_number8 = $row_kgwd8['contact_number'];
        $email8 = $row_kgwd8['email'];
        $emergencyname8 = $row_kgwd8['ec_name'];
        $emergencycontact8 = $row_kgwd8['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd8);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd8 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd8 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>