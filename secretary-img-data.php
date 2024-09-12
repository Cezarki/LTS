<?php

//Image Upload
// Set a default image path
$defaultImagePath = 'default_image.jpg';
// SQL query to fetch image path
$sql = "SELECT photo FROM `secretary-db` WHERE id = 0";
// Execute the query
$result = $conn->query($sql);

if ($result) {
  if ($result->num_rows > 0) {
    // Retrieve the image path
    $row = $result->fetch_assoc();
    $imagePath8 = $row['photo'];
  } else {
    // User not found or no image path available
    $imagePath8 = $defaultImagePath; // Use the default image path
  }
} else {
  // Handle SQL query error
  echo "Error executing the query: " . $conn->error;
}
?>