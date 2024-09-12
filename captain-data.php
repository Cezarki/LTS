<?php
// Retrieving data from the database
$sql = "SELECT * FROM `captain_db` ORDER BY captain_id DESC";
$result = mysqli_query($conn, $sql);

/// Initialize variables with default values
$fullname = $gender = $birthday = $citizenship = $civil_status = $term = $position = $address = $contact_number = $email = $emergencyname = $emergencycontact = '';

// Check if the query was successful
if ($result !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result) > 0) {
        // Fetch the data as an associative array
        $row = mysqli_fetch_assoc($result);

        // Assign values to variables with default values if not set
        $fullname = $row['fullname'];
        $gender = $row['gender'];
        $birthday = $row['date_of_birth'];
        $citizenship = $row['citizenship'];
        $civil_status = $row['civil_status'];
        $term = $row['term'];
        $position = $row['position'];
        $address = $row['address'];
        $contact_number = $row['contact_number'];
        $email = $row['email'];
        $emergencyname = $row['ec_name'];
        $emergencycontact = $row['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>