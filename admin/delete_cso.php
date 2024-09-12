<?php
// Check if the ID parameter is set and is a number
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $fileId = $_GET['id'];

    // Database connection
    $conn = new PDO('mysql:host=localhost; dbname=cuyapo_municipals', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the file details from the database
    $stmt = $conn->prepare("SELECT * FROM upload_cso WHERE id = :id");
    $stmt->bindParam(':id', $fileId);
    $stmt->execute();
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the file exists
    if ($file) {
        $fileName = $file['name'];
        $filePath = "cso/" . $file['fname'];

        // Delete the file from the server
        if (file_exists($filePath)) {
            unlink($filePath); // Delete the file
        }

        // Delete the file record from the database
        $deleteStmt = $conn->prepare("DELETE FROM upload_cso WHERE id = :id");
        $deleteStmt->bindParam(':id', $fileId);
        $deleteStmt->execute();

        // Redirect back to the page after deletion
        header("Location: CSO.php");
        exit();
    } else {
        // File not found
        echo "File not found.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
