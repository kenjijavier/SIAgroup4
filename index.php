<?php

include "header.php";

?>

        <section class="hero">
            <h1>CyberLearn E-Learning</h1>
            <p>Hello <?php echo $user; ?>!</p>
            <button>Start Learning</button>
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
                <button>Read</button>
                <button>Take quiz</button>
                </div>

            <?php
            }

            ?>
        </section>

<?php

include "footer.php";

?>