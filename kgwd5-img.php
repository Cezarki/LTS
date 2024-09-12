<?php
session_start();
include_once('connection.php');
$conn = connection();

if ($conn === false) {
    die("Database connection error: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {  // Check if the form is submitted

    // Handle image upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $targetDirectory = "uploads/"; // Create this directory if it doesn't exist
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Define the allowed file extensions
        $allowedExtensions = array("png", "jpeg", "jpg", "gif"); // Add more if needed

        if (in_array($imageFileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                // Image uploaded successfully, continue with other data insertion

                // Insert the image file path into your database (update this query accordingly)
                $imageFilePath = $targetFile;
                $query = "UPDATE `kgwd5-db` SET photo = ? WHERE id = 0";
                $stmt = mysqli_prepare($conn, $query);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "s", $imageFilePath);

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_close($stmt);
                        // Redirect the user to a success page
                        header("Location: SbCuyapo_Officials.php");
                        exit;
                    } else {
                        echo "Execute error: " . mysqli_error($conn);
                    }
                } else {
                    echo "Prepared statement error: " . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading the image.";
            }
        } else {
            echo "Invalid file type. Please upload a PNG, JPEG, JPG, or GIF file.";
        }
    } else {
        // No image uploaded, use a default image
        $defaultImagePath = 'image/Coming_Soon.jpg'; // Corrected spelling
        echo '<img src="' . $defaultImagePath . '" alt="Default Image">';
    }
}
?>
