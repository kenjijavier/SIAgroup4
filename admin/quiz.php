<?php

include "header.php";



?>
<link rel="stylesheet" href="css/lessons.css">
        <div class="main-content">
            <h1>Quiz</h1>
            <div class="box">
                
                <div class="exam-categories">
                    <h2>Select Lesson</h2>
                    <table>
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Topic</th>
                            <th>Time</th>
                            <th>Select</th>
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
                                    <td><a href="add_edit_quiz.php?id=<?php echo $row["id"]; ?>" class="edit-link">SELECT</a></td>
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