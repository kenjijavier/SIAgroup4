<?php

include "../connection.php";
if(!isset($_SESSION["admin_username"])) {
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="user">   

                <img src="../images/icons8-bear-96.png" alt="Profile Picture">
                <h2>CybearLearn</h2>
                <h4>Admin Panel</h4>
                <hr>
            </div>
            <ul>
                
                <li><a href="lessons.php"><i class="fas fa-cog"><img src="../images/icons8-book-30.png" alt="Settings"></i>Lessons</a></li>
                <li><a href="add_content.php"><i class="fas fa-tachometer-alt"><img src="../images/icons8-page-30.png" alt="Contents"></i>Contents</a></li>
                <li><a href="quiz.php"><i class="fas fa-cog"><img src="../images/icons8-quiz-30.png" alt="Settings"></i>Quiz</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"><img src="../images/icons8-logout-30.png" alt="Logout"></i> Logout</a></li>
            </ul>
        </div> 