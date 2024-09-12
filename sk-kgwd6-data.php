<?php

// Retrieving data from the database
$sql_kgwd16 = "SELECT * FROM `sk-kgwd6-db` ORDER BY id DESC";
$result_kgwd16 = mysqli_query($conn, $sql_kgwd16);

/// Initialize variables with default values
$fullname16 = $gender16 = $birthday16 = $citizenship16 = $civil_status16 = $term16 = $position16 = $address16 = $contact_number16 = $email16 = $emergencyname16 = $emergencycontact16 = '';

// Check if the query was successful
if ($result_kgwd16 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd16) > 0) {
        // Fetch the data as an associative array
        $row_kgwd16 = mysqli_fetch_assoc($result_kgwd16);

        // Assign values to variables with default values if not set
        $fullname16 = $row_kgwd16['fullname'];
        $gender16 = $row_kgwd16['gender'];
        $birthday16 = $row_kgwd16['date_of_birth'];
        $citizenship16 = $row_kgwd16['citizenship'];
        $civil_status16 = $row_kgwd16['civil_status'];
        $term16 = $row_kgwd16['term'];
        $position16 = $row_kgwd16['position'];
        $address16 = $row_kgwd16['address'];
        $contact_number16 = $row_kgwd16['contact_number'];
        $email16 = $row_kgwd16['email'];
        $emergencyname16 = $row_kgwd16['ec_name'];
        $emergencycontact16 = $row_kgwd16['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd16);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd16 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd16 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>