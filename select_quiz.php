<?php
session_start();
include "header.php";
include "connection.php";
if(!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
    <?php
}



?>

<link rel="stylesheet" href="css/select_quiz.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">

<section class="hero">
    <img src="../images/icons8-bear-96.png" alt="Profile Picture">
    <h1>CybearLearn E-Learning</h1>
</section>

<section class="featured-courses">
            <h2>Featured Topics</h2>

            <?php 
                $sql = "SELECT * FROM quiz_topic";
                $response = mysqli_query($link, $sql);

                while($row = mysqli_fetch_array($response)) {

            ?>

                <div class="course-card">
                <h3><?php echo $row["topic"]; ?></h3>
                <p>Duration: <?php echo $row["time_minutes"]; ?> minutes</p>
                
                
                <button value="<?php echo $row["topic"]; ?>" onclick="set_quiz_type_session(this.value);">Take quiz</button>
                 
                <!--<input type="button"  value="<?php echo $row["topic"]; ?>" onclick="set_quiz_type_session(this.value);">-->
                </div>
                

            <?php
            }

            ?>
           
        </section>

<?php

include "footer.php";

?>

<script text="text/javascript" src="js/select_quiz.js"></script>