<?php

include "header.php";
$quiz_topic = "";
$id = $_GET["id"];
$sql = "SELECT * FROM quiz_topic WHERE id='$id'";
$response = mysqli_query($link, $sql);
while ($row=mysqli_fetch_array($response)) {
    $quiz_topic=$row["topic"];
}
?>
<link rel="stylesheet" href="css/lessons.css">
        <div class="main-content">
            <h1>Quiz / <?php echo $quiz_topic; ?></h1>
            <div class="box">
                <div class="add-exam">
                    <h2>Add questions for <span class="quiz-topic-header"><?php echo $quiz_topic; ?></span></h2>
                    <form action="" name="form1" method="post">
                    <label for="exam-category">Question:</label>
                    <input type="text" name="topic" placeholder="Add a question">
                    <hr>
                    <label for="exam-time">Choice #1:</label>
                    <input type="text" name="minutes">
                    <label for="exam-time">Choice #2:</label>
                    <input type="text" name="minutes">
                    <label for="exam-time">Choice #3:</label>
                    <input type="text" name="minutes">
                    <label for="exam-time">Choice #4:</label>
                    <input type="text" name="minutes">
                    <label for="exam-time">Answer:</label>
                    <input type="text" name="minutes">

                    <br><button type="submit" name="submit1">Add Question</button>

                    
                    </form>
                </div>

               
            </div>
        </div>


    </div>
</body>
</html>