<?php
session_start();
include "header.php";


$sql1 = "SELECT * FROM quiz_topic";
$result = mysqli_query($link, $sql1);

$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);

shuffle($topics);
$random_row = $topics[0];

$random_topic = $random_row['topic'];

?>

        <section class="hero">
        <img src="../images/icons8-bear-96.png" alt="Profile Picture">
            <h1>CybearLearn E-Learning</h1>
            <p>Hello <?php echo $user; ?>!</p>
            <a href="lesson.php?topic=<?php echo $random_topic; ?>">
                <button>Start Learning</button>
            </a>
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
                
                </div>

            <?php
            }

            ?>
        </section>

<?php

include "footer.php";

?>