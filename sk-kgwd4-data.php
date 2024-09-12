<?php

// Retrieving data from the database
$sql_kgwd14 = "SELECT * FROM `sk-kgwd4-db` ORDER BY id DESC";
$result_kgwd14 = mysqli_query($conn, $sql_kgwd14);

/// Initialize variables with default values
$fullname14 = $gender14 = $birthday14 = $citizenship14 = $civil_status14 = $term14 = $position14 = $address14 = $contact_number14 = $email14 = $emergencyname14 = $emergencycontact14 = '';

// Check if the query was successful
if ($result_kgwd14 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd14) > 0) {
        // Fetch the data as an associative array
        $row_kgwd14 = mysqli_fetch_assoc($result_kgwd14);

        // Assign values to variables with default values if not set
        $fullname14 = $row_kgwd14['fullname'];
        $gender14 = $row_kgwd14['gender'];
        $birthday14 = $row_kgwd14['date_of_birth'];
        $citizenship14 = $row_kgwd14['citizenship'];
        $civil_status14 = $row_kgwd14['civil_status'];
        $term14 = $row_kgwd14['term'];
        $position14 = $row_kgwd14['position'];
        $address14 = $row_kgwd14['address'];
        $contact_number14 = $row_kgwd14['contact_number'];
        $email14 = $row_kgwd14['email'];
        $emergencyname14 = $row_kgwd14['ec_name'];
        $emergencycontact14 = $row_kgwd14['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd14);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd14 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd14 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>