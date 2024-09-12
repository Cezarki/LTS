<?php


// Retrieving data from the database
$sql_kgwd = "SELECT * FROM `kgwd1-db` ORDER BY id DESC";
$result_kgwd = mysqli_query($conn, $sql_kgwd);

/// Initialize variables with default values
$fullname1 = $gender1 = $birthday1 = $citizenship1 = $civil_status1 = $term1 = $position1 = $address1 = $contact_numbersss1 = $email1 = $emergencyname1 = $emergencycontact1 = '';

// Check if the query was successful
if ($result_kgwd !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd) > 0) {
        // Fetch the data as an associative array
        $row_kgwd = mysqli_fetch_assoc($result_kgwd);

        // Assign values to variables with default values if not set
        $fullname1 = $row_kgwd['fullname'];
        $gender1 = $row_kgwd['gender'];
        $birthday1 = $row_kgwd['date_of_birth'];
        $citizenship1 = $row_kgwd['citizenship'];
        $civil_status1 = $row_kgwd['civil_status'];
        $term1 = $row_kgwd['term'];
        $position1 = $row_kgwd['position'];
        $address1 = $row_kgwd['address'];
        $contact_numbersss1 = $row_kgwd['contact_numbers'];
        $email1 = $row_kgwd['email'];
        $emergencyname1 = $row_kgwd['ec_name'];
        $emergencycontact1 = $row_kgwd['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>