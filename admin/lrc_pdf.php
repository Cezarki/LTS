<?php
session_start();
require_once('../connection.php');
$conn = connection();

// Reset view count to zero
if (isset($_POST['reset'])) {
    $file_id = isset($_GET['filename']) ? (int)$_GET['filename'] : 0;
    if ($file_id > 0) {
        $sql = "UPDATE upload_lrc SET view_count = 0 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $file_id);
        $stmt->execute();
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="image/cuyapo-logo.png" type="image/x-icon">
    <title> File</title>
  
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    text-align: center;
}


.containers {
    width: 75%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.containers > .memo{
    background-color: #3e50f7;
    color: white; 
    width: 100%; 

    text-align: center; 
    padding: 5px;
}

h1 {
    text-align: center;
}

.file-viewer {
    margin-top: 20px;
}

.pdf-container {
    width: 100%;
    height: 600px;
}

.download-link {
    display: block;
    margin-top: 10px;
    text-align: center;
}

.memo-tittle{
    text-align: center;
    padding: 10px;
    background-color: #c5c7c5;
}

#prof-btn{
    color: white;
    background-color: rgba(0, 0, 0, 0.1);
}

#prof-btn:hover{
    background-color: #ab1703;
}

#dropdown-item{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}


#dropdown-item:hover{
    display: flex;
    flex-wrap: wrap;
    background-color: #ab1703;
}

.prof-modal{
    position: absolute;
    top: -120px;
    display: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    height: 124vh;
    z-index: 1000;
}

#prof-btn{
    color: white;
    background-color: rgba(0, 0, 0, 0.1);
}

#prof-btn:hover{
    background-color: #ab1703;
}

#dropdown-item{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}


#dropdown-item:hover{
    display: flex;
    flex-wrap: wrap;
    background-color: #ab1703;
}

.profile{
    position: relative;
    width: 600px;
    background-color: white;
    padding: 20px;
    top: 150px;
    left: 330px;
    border-radius: 10px;
}

#Xclose{
    position: relative;
        top: -12px;
        float: right;
}

#Xclose:hover , #Xclose:focus{
      cursor: pointer;
        background-color: black;
        color: white;
}

#togglePasswordVisibility{
  
}
.view-count-section {
        margin-top: 20px;
        text-align: center;
    }

    /* Style the reset button */
    .reset-button {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .reset-button:hover {
        background-color: #c82333;
    }
</style>
<body>
    <?php include('reso_head.php'); ?>

    <?php

$sql = "SELECT * FROM `admin_db` WHERE 11";  // Select all records
$result = mysqli_query($conn, $sql);

if ($result === false) {
    die("Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $name = $row['name'];
        $email = $row["email"];
        $username = $row['username'];
        $password = $row['password'];

    }
}


// Check if the form is submitted
if (isset($_POST['update'])) {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $emaikl = mysqli_real_escape_string($conn, $_POST['email']);

    // Update data in the database
    $sqls = "UPDATE admin_db SET username='$username', password='$password', name='$name' WHERE id = 11";

    if ($conn->query($sqls) === TRUE) {
     //   echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<div id="prof-modal" class="prof-modal">
                <div class="profile">
                <span id="Xclose">X</span>
                <form action="" method="post">
                <div class="w-10 p-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div> 

                <div class="w-10 p-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div> 

                <div class="w-10 p-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div> 

                <label for="password" class="form-label">Password</label>
            <div class="mb-3 input-group">
                <input type="password" class="form-control" name="password" id="passwordInput" value="<?php echo $password; ?>">
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordVisibility">
                    <i class="fas fa-eye"></i>
                </button>
            </div>

                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                </div>
            </div>

    <div class="containers">
    <div class="memo">
    <h4>Land ReClassification</h4>
    </div>
    <?php
// Sanitize the input to avoid SQL Injection
$id = isset($_GET['filename']) ? (int)$_GET['filename'] : 0;

// Continue with a prepared statement to avoid SQL Injection
if ($id > 0) {
    // Increment view count in the database
    $sql = "UPDATE upload_lrc SET view_count = view_count + 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Fetch memo circular details including the updated view count
    $stmt = $conn->prepare("SELECT * FROM upload_lrc WHERE id = ?");
    $stmt->bind_param("i", $id);
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
            $viewCount = $row['view_count'];
            ?>
            <div class="memo-tittle">
                <h3><?php echo htmlspecialchars($name); ?></h3>
                
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
require_once '../vendor/autoload.php'; // Include the PHPWord library
use PhpOffice\PhpWord\Settings;

// Set the PDF renderer
Settings::setPdfRendererPath('../vendor/tecnickcom/tcpdf/');
Settings::setPdfRendererName('TCPDF');

// Function to convert DOC file to PDF
function docToPdf($docFilePath) {
    // Load the DOC file
    $phpWord = \PhpOffice\PhpWord\IOFactory::load($docFilePath);

    // Save PDF version of the document
    $pdfFilePath = 'lrc/' . time() . '.pdf';
    $pdfWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');
    $pdfWriter->save($pdfFilePath);

    return $pdfFilePath;
}

// Main code starts here
$file_path = 'lrc/' . $_REQUEST['f'];
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
         <!-- View count and reset button section -->
        <div class="view-count-section">
    <p>Views: <?php echo isset($viewCount) ? $viewCount : 0; ?></p>
    <form method="post">
        <button type="submit" name="reset" class="reset-button">Reset View Count</button>
    </form>
</div>


                    
    </div>

    <div class="footer">
<?php include('../footer.php'); ?>
</div>
<script>
        document.getElementById('togglePasswordVisibility').addEventListener('click', function() {
    // Get the password input field
    var passwordInput = document.getElementById('passwordInput');
    
    // Get the current type of the password input field
    var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    
    // Set the new type for the password input field
    passwordInput.setAttribute('type', type);
    
    // Get the eye icon inside the button
    var eyeIcon = this.querySelector('i');
    
    // Toggle the eye icon class based on the new type
    if (type === 'password') {
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    } else {
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
});
    </script>
<script>
var profmodal = document.getElementById('prof-modal');

var probtn = document.getElementById('prof-btn');

var profspan = document.getElementById('Xclose');

probtn.onclick = function show(){
    profmodal.style.display = 'block';
}

profspan.onclick = function close(){
    profmodal.style.display = 'none';

}
</script>
</body>
</html>
