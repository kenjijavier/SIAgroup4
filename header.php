<?php

include "connection.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CybearLearn</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">   
    <link rel="stylesheet" href="css/register.css">  

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="select_lesson.php">Lessons</a></li>
                <li><a href="select_quiz.php">Quizzes</a></li>
                <?php
                    if (!isset($_SESSION['username'])) {
                        ?> 
                            <li><a href="login.php">Login</a></li>
                        <?php
                    }
                    else {
                        ?>

                        <li>
                        <a href="#">
                            <img src="images/icons8-profile-picture-30.png" alt="Dashboard" style="vertical-align: middle;">
                            <span style="vertical-align: middle;">&nbsp;&nbsp;&nbsp;<?php echo $user; ?></span>
                        </a>
                        </li>

                        <li><a href="logout.php">Logout</a></li>
                        
                        <?php
                    }
                ?>
                
                
            </ul>
        </nav>
    </header>

    