<?php

include_once('../connection.php');
$conn = connection();

require 'vendor/autoload.php'; // If using PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
}

try {
    // Generate a unique secure token
    $token = bin2hex(random_bytes(32));

    // Token expiration time (1 hour)
    $expires = new DateTime('now');
    $expires->add(new DateInterval('PT1H')); // 1 hour to expire

    // Format the expiration date
    $expirationDate = $expires->format('Y-m-d H:i:s');

    // Store the token and expiration date in your database
    $stmt = $conn->prepare("INSERT INTO password_resets (email, token, expires) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $token, $expirationDate); // Bind parameters
    $stmt->execute(); // Execute the prepared statement

    // Prepare the reset link
    $resetLink = "http://localhost/SbCuyapo/admin/reset-password.php?token=" . $token . "&email=" . urlencode($email);

    // Send email
    $mail = new PHPMailer(true);
    $mail->isSMTP(); 
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'abadleomar875@gmail.com'; 
    $mail->Password = 'zalt jbec qnwwpgaz'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587; 

    // Set from and to addresses
    $mail->setFrom('your_email@gmail.com', 'Your Website');
    $mail->addAddress($email);

    // Set email content
    $mail->isHTML(true);
    $mail->Subject = 'Password Reset Request';
    $mail->Body = 'Please click on the following link to reset your password: <a href="' . $resetLink . '">Reset Password</a>';

    $mail->send();
    header('Location: admin.php');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    // If sending email fails, you might want to remove the token from the database to avoid dangling tokens
    exit;
} catch (mysqli_sql_exception $e) {
    echo 'Error: ' . $e->getMessage();
    // Handle database errors
    exit;
}
?>
