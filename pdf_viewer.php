<?php
$file_path = 'admin/upload/' . $_GET['f'];

// Check if the file exists
if (file_exists($file_path) && strtolower(pathinfo($file_path, PATHINFO_EXTENSION)) == 'pdf') {
    // Set the appropriate content type header
    header('Content-Type: application/pdf');
    // Output the file contents
    readfile($file_path);
} else {
    // File not found or not a PDF file
    header('HTTP/1.1 404 Not Found');
    exit('File not found or not a PDF file');
}
?>
