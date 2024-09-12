<?php
// Retrieving data from the database
$sql_kgwd9 = "SELECT * FROM `treasurer-db` ORDER BY id DESC";
$result_kgwd9 = mysqli_query($conn, $sql_kgwd9);

/// Initialize variables with default values
$fullname9 = $gender9 = $birthday9 = $citizenship9 = $civil_status9 = $term9 = $position9 = $address9 = $contact_number9 = $email9 = $emergencyname9 = $emergencycontact9 = '';

// Check if the query was successful
if ($result_kgwd9 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd9) > 0) {
        // Fetch the data as an associative array
        $row_kgwd9 = mysqli_fetch_assoc($result_kgwd9);

        // Assign values to variables with default values if not set
        $fullname9 = $row_kgwd9['fullname'];
        $gender9 = $row_kgwd9['gender'];
        $birthday9 = $row_kgwd9['date_of_birth'];
        $citizenship9 = $row_kgwd9['citizenship'];
        $civil_status9 = $row_kgwd9['civil_status'];
        $term9 = $row_kgwd9['term'];
        $position9 = $row_kgwd9['position'];
        $address9 = $row_kgwd9['address'];
        $contact_number9 = $row_kgwd9['contact_number'];
        $email9 = $row_kgwd9['email'];
        $emergencyname9 = $row_kgwd9['ec_name'];
        $emergencycontact9 = $row_kgwd9['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd9);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd9 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd9 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>