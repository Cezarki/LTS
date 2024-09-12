<?php
// Retrieving data from the database
$sql_kgwd4 = "SELECT * FROM `kgwd4-db` ORDER BY id DESC";
$result_kgwd4 = mysqli_query($conn, $sql_kgwd4);

/// Initialize variables with default values
$fullname4 = $gender4 = $birthday4 = $citizenship4 = $civil_status4 = $term4 = $position4 = $address4 = $contact_number4 = $email4 = $emergencyname4 = $emergencycontact4 = '';

// Check if the query was successful
if ($result_kgwd4 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd4) > 0) {
        // Fetch the data as an associative array
        $row_kgwd4 = mysqli_fetch_assoc($result_kgwd4);

        // Assign values to variables with default values if not set
        $fullname4 = $row_kgwd4['fullname'];
        $gender4 = $row_kgwd4['gender'];
        $birthday4 = $row_kgwd4['date_of_birth'];
        $citizenship4 = $row_kgwd4['citizenship'];
        $civil_status4 = $row_kgwd4['civil_status'];
        $term4 = $row_kgwd4['term'];
        $position4 = $row_kgwd4['position'];
        $address4 = $row_kgwd4['address'];
        $contact_number4 = $row_kgwd4['contact_number'];
        $email4 = $row_kgwd4['email'];
        $emergencyname4 = $row_kgwd4['ec_name'];
        $emergencycontact4 = $row_kgwd4['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd4);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd4 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd4 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>