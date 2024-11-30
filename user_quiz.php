
<?php
session_start();
include "header.php";


?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">  

<section class="featured-courses">
    <h2>Topic: <?php echo $_SESSION["topic"];?></h2>
        <div class="course-card" id="questions">
            <div>
                <div class="questions_counter">
                    <span id="current_que">0</span> / <span id="total_que">0</span>
                    <span style="float: right;">Time left: <span id="countdowntimer"></span></span>
                </div>
                
            </div>
            <div id="load_questions">
            </div>
            <button value="Previous" onclick="load_previous();">Previous Question</button>
            <button value="Next" onclick="load_next();">Next Question</button>
        </div>
</section>

<section class="hero">
            <h1>CybearLearn E-Learning<img src="../images/icons8-bear-96.png" alt="Profile Picture"></h1>
</section>


<?php
include "footer.php";
?>

<script type="text/javascript" src="js/user_quiz.js"></script>


