<?php
session_start();
include "header.php";
include "connection.php";

?>
<link rel="stylesheet" href="css/select_quiz.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">

<section class="hero">
    <img src="../images/icons8-bear-96.png" alt="Profile Picture">
    <h1>CybearLearn | Lessons</h1>
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
                <p></p>
                
                <a href="lesson.php?topic=<?php echo $row["topic"]; ?>">
                    <button>Read</button>
                </a>
                 
                <!--<input type="button"  value="<?php echo $row["topic"]; ?>" onclick="set_quiz_type_session(this.value);">-->
                </div>
                

            <?php
            }

            ?>
           
        </section>

<?php

include "footer.php";

?>

