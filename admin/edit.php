<?php
include "header.php";

?>
<link rel="stylesheet" href="css/lessons.css">

        <div class="main-content">
        <h1>Create and Delete Lesson</h1>
            <div class="box">
                <div class="add-exam">
                    <h2>Edit Lesson</h2>
                    <form action="" name="form1" method="post">
                    <?php 
                    $id = $_GET["id"]; 
                    $sql = "SELECT * FROM quiz_topic WHERE id=$id";

                    $response = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($response);

                    $topic = $row["topic"];
                    $min = $row["time_minutes"];
                    ?>
                    <label for="exam-category">Topic Name:</label>
                    <input type="text" name="topic1" value="<?php echo $topic ?>">

                    <label for="exam-time">Quiz time in Minutes:</label>
                    <input type="text" name="min1" value="<?php echo $min ?>">

                    <br><button type="submit" name="submit1">Save Changes</button>

                    
                    </form>
                </div>
            </div>
        </div>

<?php

if(isset($_POST["submit1"])) {
    $topic1 = filter_input(INPUT_POST, "topic1", FILTER_SANITIZE_SPECIAL_CHARS);
    $min1 = filter_input(INPUT_POST, "min1", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "UPDATE quiz_topic SET topic = '$topic1', time_minutes = '$min1' WHERE id='$id'";

    try {
        mysqli_query($link, $sql);

        header("Location: lessons.php");
    }
    catch(mysqli_sql_exception $e) {
        echo "Error has occured:" . $e->getMessage();
    }
    
}

?>