<?php
// Retrieving data from the database
$sql_kgwd2 = "SELECT * FROM `kgwd2-db` ORDER BY id DESC";
$result_kgwd2 = mysqli_query($conn, $sql_kgwd2);

/// Initialize variables with default values
$fullname2 = $gender2 = $birthday2 = $citizenship2 = $civil_status2 = $term2 = $position2 = $address2 = $contact_number2 = $email2 = $emergencyname2 = $emergencycontact2 = '';

// Check if the query was successful
if ($result_kgwd2 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd2) > 0) {
        // Fetch the data as an associative array
        $row_kgwd2 = mysqli_fetch_assoc($result_kgwd2);

        // Assign values to variables with default values if not set
        $fullname2 = $row_kgwd2['fullname'];
        $gender2 = $row_kgwd2['gender'];
        $birthday2 = $row_kgwd2['date_of_birth'];
        $citizenship2 = $row_kgwd2['citizenship'];
        $civil_status2 = $row_kgwd2['civil_status'];
        $term2 = $row_kgwd2['term'];
        $position2 = $row_kgwd2['position'];
        $address2 = $row_kgwd2['address'];
        $contact_number2 = $row_kgwd2['contact_number'];
        $email2 = $row_kgwd2['email'];
        $emergencyname2 = $row_kgwd2['ec_name'];
        $emergencycontact2 = $row_kgwd2['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd2);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd2 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd2 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>