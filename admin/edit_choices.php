<?php
session_start();
if(!isset($_SESSION["admin_username"])) {
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php
}
include "header.php";
$topic = "";
$id = $_GET["id"];
$sql = "SELECT * FROM quiz WHERE id='$id'";
$response = mysqli_query($link, $sql);
while($row=mysqli_fetch_array($response)) {
    $q = $row["question"];
    $topic = $row["topic"];
    $question_no = $row["question_no"];
    $c1 = $row["choice1"];
    $c2 = $row["choice2"];
    $c3 = $row["choice3"];
    $c4 = $row["choice4"];
    $an = $row["answer"];
}

?>
<link rel="stylesheet" href="css/lessons.css">

        <div class="main-content">
        <h1>Quiz / <span class="quiz-topic-header"><?php echo $topic; ?></span> / Edit / Question # <?php echo $question_no; ?></h1>
        <div class="box">
            <div class="add-exam">
                <h2>Edit Question</h2>
                <form action="" name="form1" method="post">
                <label for="exam-category">Question:</label>
                <input type="text" name="question" value="<?php echo $q; ?>">
                <hr>
                <label >Choice #1:</label>
                <input type="text" name="c1" value="<?php echo $c1; ?>">
                <label >Choice #2:</label>
                <input type="text" name="c2" value="<?php echo $c2; ?>">
                <label >Choice #3:</label>
                <input type="text" name="c3" value="<?php echo $c3; ?>">
                <label >Choice #4:</label>
                <input type="text" name="c4" value="<?php echo $c4; ?>">
                <label >Answer:</label>
                <input type="text" name="ans" value="<?php echo $an; ?>">

                <br><button type="submit" name="submit1">Save Changes</button>

                
                </form>
            </div>
        </div>
        </div>

<?php

if(isset($_POST["submit1"])) {
$question = filter_input(INPUT_POST, "question", FILTER_SANITIZE_SPECIAL_CHARS);
$choice1 = filter_input(INPUT_POST, "c1", FILTER_SANITIZE_SPECIAL_CHARS);
$choice2 = filter_input(INPUT_POST, "c2", FILTER_SANITIZE_SPECIAL_CHARS);
$choice3 = filter_input(INPUT_POST, "c3", FILTER_SANITIZE_SPECIAL_CHARS);
$choice4 = filter_input(INPUT_POST, "c4", FILTER_SANITIZE_SPECIAL_CHARS);
$answer = filter_input(INPUT_POST, "ans", FILTER_SANITIZE_SPECIAL_CHARS);  

$sql = "UPDATE quiz SET question = '$question', choice1 = '$choice1', choice2 = '$choice2', choice3 = '$choice3', choice4 = '$choice4', answer = '$answer' WHERE id='$id'";

$sql1 = "SELECT id FROM quiz_topic WHERE topic='$topic'";
$result = mysqli_query($link, $sql1);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $topic_id = $row['id'];
    } else {
        echo "No records found for the given topic.";
    }
} else {
    echo "Error: " . mysqli_error($link);
}


try {
    mysqli_query($link, $sql);

    ?>
    <script type="text/javascript">
        window.location.href = "add_edit_quiz.php?id=" + <?php echo $topic_id; ?>;
    </script>

    <?php
}
catch(mysqli_sql_exception $e) {
    echo "Error has occured:" . $e->getMessage();
}
}

?>