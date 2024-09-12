<?php
session_start();
require_once('connection.php');
$conn = connection();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a real PDF
if(isset($_POST["submit"])) {
  $check = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
  if($check != "application/pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($FileType != "pdf") {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

    // Insert file details into database
    $filename = $_FILES["fileToUpload"]["name"];
    $filepath = $target_file;
    $sql = "INSERT INTO files (filename, filepath) VALUES ('$filename', '$filepath')";
    if ($conn->query($sql) === TRUE) {
      echo "File details inserted into database successfully.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
