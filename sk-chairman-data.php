<?php
// Retrieving data from the database
$sql_kgwd10 = "SELECT * FROM `sk-chairman` ORDER BY id DESC";
$result_kgwd10 = mysqli_query($conn, $sql_kgwd10);

/// Initialize variables with default values
$fullname10 = $gender10 = $birthday10 = $citizenship10 = $civil_status10 = $term10 = $position10 = $address10 = $contact_number10 = $email10 = $emergencyname10 = $emergencycontact10 = '';

// Check if the query was successful
if ($result_kgwd10 !== false) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result_kgwd10) > 0) {
        // Fetch the data as an associative array
        $row_kgwd10 = mysqli_fetch_assoc($result_kgwd10);

        // Assign values to variables with default values if not set
        $fullname10 = $row_kgwd10['fullname'];
        $gender10 = $row_kgwd10['gender'];
        $birthday10 = $row_kgwd10['date_of_birth'];
        $citizenship10 = $row_kgwd10['citizenship'];
        $civil_status10 = $row_kgwd10['civil_status'];
        $term10 = $row_kgwd10['term'];
        $position10 = $row_kgwd10['position'];
        $address10 = $row_kgwd10['address'];
        $contact_number10 = $row_kgwd10['contact_number'];
        $email10 = $row_kgwd10['email'];
        $emergencyname10 = $row_kgwd10['ec_name'];
        $emergencycontact10 = $row_kgwd10['ec_number'];

        // Optionally free the result set
        mysqli_free_result($result_kgwd10);
    } else {
        // No rows found, set default values or handle accordingly
        $data_view_kgwd10 = "default_none_value";
    }
} else {
    // Handle the error if the query fails
    $data_view_kgwd10 = "default_error_value";
    echo "Error: " . mysqli_error($conn);
}

?>