<?php
session_start();
$date = date("Y-m-d H:i:s");
$_SESSION["end_time"] = date("Y-m-d H:i:s", strtotime($date."+ $_SESSION[quiz_time] minutes"));
include "connection.php";
include "header.php"

?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css"> 
<link rel="stylesheet" href="css/result.css "> 
<section class="featured-courses">
    <h2>Results:</h2>
        <div class="course-card" id="questions">
        <?php
            $right = 0;
            $wrong = 0;
            if(isset($_SESSION["answer"])) {
                for($i=1;$i<=sizeof($_SESSION["answer"]);$i++) {
                    $answer = "";
                    $sql = "SELECT * FROM quiz WHERE topic='$_SESSION[topic]' AND question_no='$i'";
                    $result = mysqli_query($link, $sql);

                    while($row = mysqli_fetch_array($result)) {
                        $answer = $row['answer'];

                    }

                    if(isset($_SESSION["answer"][$i])) {
                        if($answer==$_SESSION["answer"][$i]) {

                            $right = $right+1;
                        }
                        else {
                            $wrong = $wrong+1;
                        }
                    }
                    else {
                        $wrong = $wrong+1;
                    }
                }
            }

            $count = 0; 
            $sql1 = "SELECT * FROM quiz WHERE topic='$_SESSION[topic]'";
            $res = mysqli_query($link, $sql1);

            $count = mysqli_num_rows($res);
            $wrong = $count - $right;
            
            try {
                $percentage = ($right / $count) * 100;
                ?><h3><?php echo "Score: ". $right . "/" . $count . "<br>";
            if($percentage==100) {
                ?><img src="/images/score_100.jpg" class="score_img" alt="Profile Picture"><br><?php
                echo "Cybersecurity Expert! You've aced the quiz with a perfect score of 100%. Your cybersecurity knowledge is exceptional!";
            }
            else if ($percentage >= 80) {
                ?><img src="/images/score_80.jpg" class="score_img" alt="Profile Picture"><br><?php
                echo "Cybersecurity Pro! You've demonstrated strong cybersecurity knowledge. Keep up the great work!";
            }
            else if ($percentage >= 60) {
                ?><img src="/images/score_60.jpg" class="score_img" alt="Profile Picture"><br><?php
                echo "Cybersecurity Adept! You have a solid understanding of cybersecurity concepts. You can improve your score with more practice.";
            }
            else if ($percentage >= 40) {
                ?><img src="/images/score_40.jpg" class="score_img" alt="Profile Picture"><br><?php
                echo "Cybersecurity Novice! You have some basic knowledge, but you need to focus on improving your understanding of cybersecurity principles.";
            }
            else if ($percentage >= 20) {
                ?><img src="/images/score_20.jpg" class="score_img" alt="Profile Picture"><br><?php
                echo "Cybersecurity Beginner! It's a good start, but you need to dedicate more time to learning cybersecurity concepts.";
            }
            else {
                ?><img src="/images/score_0.jpg" class="score_img" alt="Profile Picture"><br><?php
                echo "Cybersecurity Challenge Ahead! You need to review the basic concepts of cybersecurity. Don't give up, keep learning!";
            }
            ?></h3><?php
            }
            catch (DivisionByZeroError $e) {
                echo "<strong>Quiz not yet available for this topic.</strong>";
            }

            
            
            
        ?>
        </div>
</section>
<?php
if(isset($_SESSION["quiz_start"])) {
    $date = date("Y-m-d");
    $sql = "INSERT INTO quiz_results VALUES (NULL, '$_SESSION[username]', '$_SESSION[topic]', '$count', '$right', '$wrong', '$date')";
    mysqli_query($link, $sql);
}

if(isset($_SESSION["quiz_start"])) {
    unset($_SESSION["quiz_start"]);
    ?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
    <?php
}
?>

<section class="hero">
            <h1>CybearLearn E-Learning<img src="../images/icons8-bear-96.png" alt="Profile Picture"></h1>
</section>
<?php

include "footer.php"

?>