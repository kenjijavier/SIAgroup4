<?php
include "header.php";
$quiz_topic = $_GET["quiz_topic"];


$sql = "SELECT * FROM quiz_topic WHERE topic='$quiz_topic'";
$response = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($response)) {
    $quiz_time = $row["time_minutes"];
}


?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">  


<section class="featured-courses">
    
    <h2>Topic: <?php echo $quiz_topic; ?></h2>
    
        <div class="course-card" id="questions">
        <div class="timer" >
            Time left: <span id="timer-value"></span>
            </div>
            <h3>Question 1. Who is the President of the United States of America?</h3>
            
            <p></p>
            <div class="choices">
                <label>
                    <input type="radio" name="q1" value="a">
                    <span>A. London</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="b">
                    <span>B. Paris</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="c">
                    <span>C. Berlin</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="d">
                    <span>D. Rome</span>
                </label>
            </div>
            <button>Next Question</button>
        
        </div>
</section>

<section class="hero">
    
            <h1>CybearLearn E-Learning<img src="../images/icons8-bear-96.png" alt="Profile Picture"></h1>
</section>





<?php
include "footer.php";
?>

<?php
$seconds_converted = $quiz_time * 60;

?>

<script>
    let countdown = <?php echo $seconds_converted; ?>;

    function updateTimer() {
        const timerDisplay = document.getElementById('timer-value');
        const minutes = Math.floor(countdown / 60);
        const seconds = countdown % 60;
        timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        if (countdown <= 0) {
            clearInterval(timerInterval);
            alert("Time's up!");
            window.location.href= 'index.php';
        } else {
            countdown--;
        }
    }
    const timerInterval = setInterval(updateTimer, 1000); 
</script>