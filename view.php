<?php
session_start();
    require_once('connection.php');
    $conn = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin/Css/view.css">
    <title>View File</title>
  
</head>
<body>
    <?php  include('admin/header.php'); ?>
    <div class="containers">

    <div class="memo">
    <h4>MEMO CIRCULARS</h4>
    </div>
    <?php
// Sanitize the input to avoid SQL Injection
$id = isset($_GET['filename']) ? (int)$_GET['filename'] : 0;

// Continue with a prepared statement to avoid SQL Injection
if ($id > 0) {
    $stmt = $conn->prepare("SELECT * FROM upload WHERE id = ?"); // Correct SQL
    $stmt->bind_param("i", $id); // "i" means the variable type is integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $referenceNum = $row['reference_number'];
            $dateTime = $row['date_time'];
            $proponent =$row['proponent'];
            $seconded =$row['seconded'];
            $committe =$row['committe'];
            ?>
            <div class="memo-tittle">
                <h4><?php echo htmlspecialchars($name); ?></h4>
                <b> <?php  echo ' '. $referenceNum; ?></b><br>
                <b>Proponent:</b> <?php  echo ' '. $proponent; ?><br>
                <b>Seconded:</b> <?php  echo ' '. $seconded; ?><br>
                <b>Committe:</b> <?php  echo ' '. $committe; ?><br>
                <b>Date:</b> <?php echo ' '.  $dateTime; ?>
            </div>
            <?php
        }
    } else {
        echo "No results found.";
    }

    $stmt->close();
} else {
    echo "Invalid ID.";
}
$conn->close();
?>

<div class="file-viewer">
<?php
require_once 'vendor/autoload.php'; // Include the PHPWord library
use PhpOffice\PhpWord\Settings;

// Set the PDF renderer
Settings::setPdfRendererPath('vendor/tecnickcom/tcpdf/');
Settings::setPdfRendererName('TCPDF');

// Function to convert DOC file to PDF
function docToPdf($docFilePath) {
    // Load the DOC file
    $phpWord = \PhpOffice\PhpWord\IOFactory::load($docFilePath);

    // Save PDF version of the document
    $pdfFilePath = 'admin/upload/' . time() . '.pdf';
    $pdfWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');
    $pdfWriter->save($pdfFilePath);

    return $pdfFilePath;
}

// Main code starts here
$file_path = 'admin/upload/' . $_REQUEST['f'];
$file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

// Check if the file exists
if (file_exists($file_path)) {
    // Convert docx file to PDF if it's a docx file
    if ($file_extension == 'docx') {
        $pdf_file = docToPdf($file_path); // Convert DOCX to PDF
        echo '<iframe src="' . $pdf_file . '" width="100%" height="670px" frameborder="0"></iframe>';
       
    } 
    // Convert doc file to PDF if it's a doc file
    else if ($file_extension == 'doc') {
        $pdf_file = docToPdf($file_path); // Convert DOC to PDF
        echo '<iframe src="' . $pdf_file . '" width="100%" height="670px" frameborder="0"></iframe>';
    }
    // Output PDF content using an HTML-based PDF viewer if it's a PDF file
    else if ($file_extension == 'pdf') {
        echo '<div class="pdf-container">';
        echo '<iframe src="' . $file_path . '" width="100%" height="100%" frameborder="0"></iframe>';
        echo '</div>';
    } 
    // For other file types, provide a download link
    else {
        echo '<p>This file cannot be previewed. <a class="download-link" href="' . $file_path . '">Download File</a></p>';
    }
} else {
    // File not found
    echo '<p>File not found!</p>';
}
?>


<script>
    function printPdf() {
        // Call the browser's print function
        window.print();
    }
</script>



        </div>

                    
    </div>

    <div class="footer">
<?php include('footer.php'); ?>
</div>

</body>
</html>
