<?php
include_once('../connection.php');
$conn = connection();

$token = $_POST['token'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($token) || empty($email) || empty($password)) {
    echo 'Invalid request.';
    exit;
}

$stmt = $conn->prepare("SELECT `id`, `email`, `token`, `expires` FROM `password_resets` WHERE `expires` > UTC_TIMESTAMP() AND `token` = ? AND `email` = ?");
$stmt->bind_param("ss", $token, $email); // Bind parameters
$stmt->execute(); // Execute the prepared statement
$result = $stmt->get_result(); // Get the result set

if ($result->num_rows > 0) {
    // Token is valid and not expired
    $user = $result->fetch_assoc(); // Fetch the user row

    // Hash new password

    // Update user password in database
    $stmt = $conn->prepare("UPDATE admin_db SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $password, $email); // Bind parameters
    $stmt->execute(); // Execute the prepared statement

    // Remove the token
    $stmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
    $stmt->bind_param("s", $email); // Bind parameters
    $stmt->execute(); // Execute the prepared statement

    header('Location: admin.php');
} else {
    // No valid token found
    echo 'Invalid or expired token.';
}

?>
