<!-- not yet screenshotted-->

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



?>
<link rel="stylesheet" href="css/lessons.css">
        <div class="main-content">
            <h1>Add Contents to Lesson</h1>
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
                                    <td><?php echo $number; ?></td>
                                    <td><?php echo $row["topic"]; ?></td>
                                    <td><?php echo $row["time_minutes"]; ?></td>
                                    <td><a href="add_edit_content.php?id=<?php echo $row["id"]; ?>" class="edit-link">SELECT</a></td>
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