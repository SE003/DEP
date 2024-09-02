<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classroom</title>
    <link rel="stylesheet" href="feedback.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="navbar">
          <section class="navbar-brand">
            <span class="material-icons menu-icon"> menu </span>
            <img class="brand-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" alt="Google Logo" /><span class="brand-text">Feedback</span>
          </section>
          <section class="navbar-menu">
            <span class="material-icons add-icon"> add </span>
            <span class="material-icons apps-icon"> apps </span>
            <span class="material-icons big-img account-icon">
              account_circle
            </span>
          </section>
        </nav>
      </header>
      <main class="main">
        <section class="card-section">
          <!-- First Card -->
         <a href="feedback_form.php?subject=WEB" class="card">
            <div class="card-header">
             
              <h1 class="subject-name"> WEB</h1>
             
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Amber Urooj</h3>
              <span class="material-icons teacher-icon"> person </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
        </a>
      
          <!-- Second Card -->
          <a href="feedback_form.php?subject=MAD" class="card">
            <div class="card-header">
              <h1 class="subject-name">MAD</h1>
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Yousra Zafar</h3>
              <span class="material-icons teacher-icon"> person </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
          </a>
      
          <!-- Third Card -->
          <a href="feedback_form.php?subject=SQE" class="card">
            <div class="card-header">
              <h1 class="subject-name">SQE</h1>
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Farwa Aizaz</h3>
              <span class="material-icons teacher-icon"> person </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
          </a>
      
          <!-- Fourth Card -->
          <a href="feedback_form.php?subject=OOP" class="card">
            <div class="card-header">
              <h1 class="subject-name">OOP</h1>
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Ali Naqi</h3>
              <span class="material-icons teacher-icon"> person </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
          </a>
      
          <!-- Fifth Card -->
          <a href="feedback_form.php?subject=DCCN" class="card">
            <div class="card-header">
              <h1 class="subject-name">DCCN</h1>
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Waqas Ahmed</h3>
              <span class="material-icons teacher-icon"> person </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
          </a>
      
          <!-- Sixth Card -->
          <a href="feedback_form.php?subject=SDA" class="card">
            <div class="card-header">
              <h1 class="subject-name">SDA</h1>
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Shah Jahan</h3>
              <div class="material-icons teacher-icon"> person </div>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
          </a>
          <!-- Seventh Card -->
          <a href="feedback_form.php?subject=DSA" class="card">
            <div class="card-header">
              <h1 class="subject-name">DSA</h1>
              <h2 class="section">SE A</h2>
              <h3 class="teacher-name">Ali Naqi</h3>
              <span class="material-icons teacher-icon"> person </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <span class="material-icons-outlined assignment-icon">
                assignment_ind
              </span>
              <span class="material-icons-outlined folder-icon"> folder </span>
            </div>
          </a>
        </section>
      </main>
      <span class="material-icons help-icon"> help_outline </span>
</body>
</html>