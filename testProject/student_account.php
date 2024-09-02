<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.html");
    exit();
}
include 'db_config.php';

$username = $_SESSION['username'];
$sql = "SELECT * FROM students WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "Error: Student not found.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Sheet</title>
    <link rel="stylesheet" href="accountstyles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="school-info">
            <h1>Welcome <?php echo htmlspecialchars($student['username']); ?></h1>
                <p>Taxila Cantt (Islamabad)Pakistan, 91881</p>
                <p>559-299-5898 | hitecuni@university.com</p>
            </div>
            <div class="title">
                <h2>STUDENT INFORMATION SHEET</h2>
            </div>
        </div>
        <div class="content">
            <h3>STUDENT INFORMATION</h3>
            <table>
                <tr>
                    <td>Complete Name:</td>
                    <td> <?php echo htmlspecialchars($student['username']); ?></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    
                    <td> <?php echo htmlspecialchars($student['email']); ?></td>
                    <td>Birth Date:</td>
                    <td>02-Apr-2007</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>Taxilla Pakistan, 76262</td>
                </tr>
            </table>

            <h3>PARENT/GUARDIAN INFORMATION</h3>
            <table>
                <tr>
                    <td>Father's Name:</td>
                    <td>Muhammad Iqbal</td>
                    <td>Father's Occupation:</td>
                    <td>Account Collector</td>
                    <td>Father's Contact Number:</td>
                    <td>417-245-0706</td>
                </tr>
            </table>

            <h3>UNIVERSITY INFORMATION</h3>
            <table>
                <tr>
                    <td>Current University:</td>
                    <td>The HITEC University</td>
                </tr>
                <tr>
                    <td>Grade/Year Level:</td>
                    <td>BS</td>
                    <td>University Address:</td>
                    <td>Taxilla Cantt Pakistan, 77517</td>
                </tr>
                <tr>
                    <td>University Contact Number:</td>
                    <td>843-849-4576</td>
                </tr>
                <tr>
                    <td>Previous School (if applicable):</td>
                    <td>N/A</td>
                    <td>Reason for Leaving (if applicable):</td>
                    <td>N/A</td>
                </tr>
            </table>

            <h3>OTHER INFORMATION</h3>
            <table>
                <tr>
                    <td>Hobbies/Interests:</td>
                    <td>Sports, Online Games</td>
                </tr>
                <tr>
                    <td>Memberships:</td>
                    <td>Math Skills & Computer Functions</td>
                </tr>
                <tr>
                    <td>Achievements:</td>
                    <td>Honor Roll, Math Olympiad Champion</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td> <b><a href="feedback.php">Give Feedback</a></b></td>
                    <td><b><a href="logout.php">Logout</a></b></td>
                    
                </tr>
            </table>

        </div>
    </div>
</body>
</html>
