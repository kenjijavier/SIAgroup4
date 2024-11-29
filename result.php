<?php
session_start();
include "connection.php";
include "header.php"

?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">  

<section class="featured-courses">
    <h2>Results:</h2>
        <div class="course-card" id="questions">
           
        </div>
</section>

<section class="hero">
            <h1>CybearLearn E-Learning<img src="../images/icons8-bear-96.png" alt="Profile Picture"></h1>
</section>
<?php

include "footer.php"

?>