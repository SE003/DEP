<?php
session_start();
include 'db_config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header("Location: student_account.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found with that username";
}

$conn->close();
?>
