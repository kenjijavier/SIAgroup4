<?php
session_start();
include "header.php";


$sql1 = "SELECT * FROM quiz_topic";
$result = mysqli_query($link, $sql1);

$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);

shuffle($topics);
$random_row = $topics[0];
$start_learning_picker = $random_row['topic'];

$featured_topics_counter = rand(1, 6);

$greetings = array(
    "Welcome to CybearLearn, $user! Let's make the internet a safer place together.",
    "Hey $user, ready to boost your digital defense? You've come to the right place.",
    "Great to have you here, $user! Let's learn to outsmart cyber threats.",
    "$user, you're taking the first step to a safer online experience.",
    "Ready to level up your cybersecurity game, $user? Let's get started!",
    "Empower yourself, $user. Learn the skills to protect your digital life.",
    "Hey $user, let's dive into the world of cybersecurity.",
    "Join the CybearLearn community, $user. Let's learn and grow together.",
    "Welcome to the CybearLearn family, $user! Let's make the internet a safer place."
);
$randomIndex = rand(0, count($greetings) - 1);
$selectedGreeting = $greetings[$randomIndex];

?>

        <section class="hero">
        <img src="../images/icons8-bear-96.png" alt="Profile Picture">
            <h1>CybearLearn E-Learning</h1>
            <p><?php echo $selectedGreeting; ?></p>
            <a href="lesson.php?topic=<?php echo $start_learning_picker; ?>">
                <button>Start Learning</button>
            </a>
        </section>

        <section class="featured-courses">
            <h2>Featured Topics</h2>

            <?php 
                $sql = "SELECT * FROM quiz_topic";
                $response = mysqli_query($link, $sql);

                
                $i = 0;
                foreach ($topics as $row) {
                    if ($i >= $featured_topics_counter) {
                        break;
                    }
            ?>

                <div class="course-card">
                
                <h3><?php echo $row["topic"]; ?></h3>
                <p></p>
                <a href="lesson.php?topic=<?php echo $row["topic"]; ?>">
                    <button>Read</button>
                </a>
                
                </div>

            <?php
            $i++;
            }

            ?>
        </section>

<?php

include "footer.php";

?>