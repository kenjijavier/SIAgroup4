<?php

include "../connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="user">   

                <img src="../images/admin_profile.png" alt="Profile Picture">
                <h3>Admin Panel</h3>
                <hr>
            </div>
            <ul>
                <li><a href="#"><i class="fas fa-tachometer-alt"><img src="../images/icons8-dashboard-30.png" alt="Dashboard"></i> Dashboard</a></li>
                <li><a href="lessons.php"><i class="fas fa-cog"><img src="../images/icons8-book-30.png" alt="Settings"></i>Add/Edit Lessons</a></li>
                <li><a href="quiz.php"><i class="fas fa-cog"><img src="../images/icons8-book-30.png" alt="Settings"></i>Add/Edit Quiz</a></li>
                <li><a href="index.php"><i class="fas fa-sign-out-alt"><img src="../images/icons8-logout-30.png" alt="Logout"></i> Logout</a></li>
            </ul>
        </div> 