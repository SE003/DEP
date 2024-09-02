<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.html");
    exit();
}

include 'db_config.php';

$username = $_SESSION['username'];
$subject = $_POST['subject'];
$feedback = $_POST['feedback'];

// Ensure the student exists before inserting feedback
$sql = "SELECT * FROM students WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "INSERT INTO feedback (username, subject, feedback) VALUES ('$username', '$subject', '$feedback')";
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Student not found.";
}

$conn->close();
?>
