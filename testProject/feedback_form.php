<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.html");
    exit();
}
$subject = $_GET['subject'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="A survey form">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey Form</title>
    <link rel="stylesheet" href="formstyles.css">
</head>
<body>
    <header class="header">
        <h1 id="title" class="bold">Feedback Form</h1>
    </header>
    <main>
        <form id="survey-form" class="container" action="submit_feedback.php" method="post">
            <p id="description">Thank you for taking the time to help us improve this platform!</p>
            <label id="subject-label" for="subject">Subject</label>
            <input id="subject" class="input sm bottom-space pink" type="text" name="subject" value="<?php echo $subject; ?>" readonly>
            
            <label id="name-label" for="name">Name*</label>
            <input id="name" class="input sm bottom-space pink" type="text" name="name" value="<?php echo $_SESSION['username']; ?>" readonly>
            
            <label id="feedback-label" for="feedback">Feedback*</label>
            <textarea id="feedback" class="sm pink" name="feedback" placeholder="Enter your feedback here..." required></textarea>
            
            <div class="top-space">
                <input type="submit" id="submit" value="Submit">
            </div>
            <div>
                <p class="sm">* - Only questions marked with an asterisk (*) are required.</p>
            </div>
        </form>
    </main>
</body>
</html>
