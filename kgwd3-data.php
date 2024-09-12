<?php
// Retrieving data from the database
$sql_kgwd3 = "SELECT * FROM `kgwd3-db` ORDER BY id DESC";
$result_kgwd3 = mysqli_query($conn, $sql_kgwd3);

/// Initialize variables with default values
$fullname3 = $gender3 = $birthday3 = $citizenship3 = $civil_status3 = $term3 = $position3 = $address3 = $contact_number3 = $email3 = $emergencyname3 = $emergencycontact3 = '';

// Check if the query was successful
if ($result_kgwd3 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd3) > 0) {
        // Fetch the data as an associative array
        $row_kgwd3 = mysqli_fetch_assoc($result_kgwd3);

        // Assign values to variables with default values if not set
        $fullname3 = $row_kgwd3['fullname'];
        $gender3 = $row_kgwd3['gender'];
        $birthday3 = $row_kgwd3['date_of_birth'];
        $citizenship3 = $row_kgwd3['citizenship'];
        $civil_status3 = $row_kgwd3['civil_status'];
        $term3 = $row_kgwd3['term'];
        $position3 = $row_kgwd3['position'];
        $address3 = $row_kgwd3['address'];
        $contact_number3 = $row_kgwd3['contact_number'];
        $email3 = $row_kgwd3['email'];
        $emergencyname3 = $row_kgwd3['ec_name'];
        $emergencycontact3 = $row_kgwd3['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd3);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd3 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd3 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>