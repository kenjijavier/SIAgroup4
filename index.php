<?php

include "header.php";

?>

        <section class="hero">
        <img src="../images/icons8-bear-96.png" alt="Profile Picture">
            <h1>CybearLearn E-Learning</h1>
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
<<<<<<< HEAD
                <a href="user_quiz.php?quiz_topic=<?php echo $row["topic"]; ?>"><button>Take quiz</button></a>
=======
                <button>Take quiz</button>
>>>>>>> parent of 228cbcd (Editing Quiz with Images, and Delete Quiz)
                </div>

            <?php
            }

            ?>
        </section>

<?php

include "footer.php";

?>