<?php

include "header.php";

?> 
        
        <link rel="stylesheet" href="css/lessons.css">
        <div class="main-content">
            <h1>Lessons</h1>
            <div class="box">
                <div class="add-exam">
                    <h2>Add Lesson</h2>
                    <form action="" name="form1" method="post">
                    <label for="exam-category">Topic Name:</label>
                    <input type="text" name="topic">

                    <label for="exam-time">Quiz time in Minutes:</label>
                    <input type="text" name="minutes">

                    <br><button type="submit" name="submit1">Add Lesson</button>

                    
                    </form>
                </div>

                <div class="exam-categories">
                    <h2>Cybersecurity Topics</h2>
                    <table>
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Topic</th>
                            <th>Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $number= 0;
                            $sql = "SELECT * FROM quiz_topic";
                            $response = mysqli_query($link, $sql);
                            
                            while($row = mysqli_fetch_array($response)) {
                                
                            $number = $number+1;

                                ?>

                                <tr>
                                    <th><?php echo $number; ?></th>
                                    <td><?php echo $row["topic"]; ?></td>
                                    <td><?php echo $row["time_minutes"]; ?></td>
                                    <td><a href="edit.php?id=<?php echo $row["id"]; ?>" class="edit-link">EDIT</a></td>
                                    <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="delete-link">DELETE</a></td>
                                </tr>

                                <?php
                            }

                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</body>
</html>

<?php

if(isset($_POST["submit1"])) {

    $topic = filter_input(INPUT_POST, "topic", FILTER_SANITIZE_SPECIAL_CHARS);
    $time = filter_input(INPUT_POST,"minutes", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $sql = "INSERT INTO quiz_topic (topic, time_minutes) VALUES ('$topic', '$time')";

    try {
        mysqli_query($link,$sql);

        ?>
        <script>
            window.location.href = window.location.href;
        </script>
        
        <?php
        
    }
    catch(mysqli_sql_exception $e) {
        echo "Error has occured: " . $e->getMessage();
    }
}


?>