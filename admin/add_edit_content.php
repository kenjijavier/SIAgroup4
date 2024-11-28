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
$quiz_topic = "";
$id = $_GET["id"];
$sql = "SELECT * FROM quiz_topic WHERE id='$id'";
$response = mysqli_query($link, $sql);
while ($row=mysqli_fetch_array($response)) {
    $quiz_topic=$row["topic"];
    $quiz_topic_id = $row["id"];
}
?>
<link rel="stylesheet" href="css/lessons.css">
        <div class="main-content">
            <h1>Lesson / <span class="quiz-topic-header"><?php echo $quiz_topic; ?></span></h1>
            <div class="box">
                <div class="add-exam">
                    <h2>Add Topic</h2>
                    <form action="" name="form1" method="post" enctype="multipart/form-data">
                    <label for="exam-category">Topic:</label>
                    <input type="text" name="subtopic" placeholder="Add a topic" required>
                    <hr>
                    <label >Description:</label>
                    <input type="text" name="description" required>
                    <br><br>
                    <label >Content:</label>
                    
                    <textarea name="content" maxlength="10000" placeholder="character limit: 10,000" required style="height: 200px; width: 1000px;"></textarea>
                    <br><br>
                    <label>Add photo (optional):</label>
                    <input type="file" name="media" accept="image/*">

                    <br><br><button type="submit" name="submit1">Add content</button>

                    
                    </form>
                </div> 
                
            </div>
            <div class="box" id="quiz_add">
                <div class="exam-categories" id="display-questions">
                        <h2><?php echo $quiz_topic; ?> Contents</h2>
                        <table>
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Topic</th>
                                <th>Description</th>
                                <th>Content</th>
                                <th>Media</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $number= 0;
                                    $sql = "SELECT * FROM lesson WHERE topic='$quiz_topic' order by id asc";
                                    $response = mysqli_query($link, $sql);
                                    
                                    while($row = mysqli_fetch_array($response)) {
                                        
                                    $number = $number+1;
                                ?>

                                    <tr>
                                        <td><?php echo $number ?></td>
                                        <td><?php echo $row["subtopic"] . " " . $number; ?></td>
                                        <td><?php echo $row["description"]; ?></td>
                                        <td><?php echo $row["content"]; ?></td>
                                        <td>
                                            <?php
                                                if(strpos($row["media"], 'media/')!==false) {
                                                    ?>
                                                        <img src="<?php echo $row["media"]; ?>" width="80" height="80" onerror="this.src='../images/icons8-unavailable-100.png'">
                                                    <?php
                                                }
                                                else {
                                                    echo "n/a";
                                                }
                                            ?>
                                        </td>
                                        
                                       
                                        <td>
                                            <a href="edit_choices.php?id=<?php echo $row["id"]; ?>" class="edit-link"><img src="../images//icons8-edit-text-file-30.png" alt="Dashboard"></a></td>
                                        <td>
                                            <a class="delete-question-link" data-id="<?php echo $row["id"]; ?>" data-topic="<?php echo $quiz_topic?>">
                                                <img src="../images/icons8-delete-30.png" alt="Delete">
                                            </a>
                                        </td>
                                        
                                    
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
if (isset($_POST["submit1"])) {
$subtopic = filter_input(INPUT_POST, "subtopic", FILTER_SANITIZE_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, "content", FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_FILES['media']) && $_FILES['media']['error'] === UPLOAD_ERR_OK) { 
    $tm = md5(time());
    $media1 = $_FILES["media"]["name"];
    $dest1 = "./media/".$tm.$media1;
    $dest_db1= "media/".$tm.$media1;
    move_uploaded_file($_FILES["media"]["tmp_name"],$dest1);

}
else {
    $dest_db1 = NULL;
}


try {

    $sql2 = "INSERT INTO lesson VALUES(NULL, '$quiz_topic', '$description', '$subtopic', '$content', '$dest_db1')";
    mysqli_query($link,$sql2);

    ?>
    <script>
        alert("Content has been added!");
        window.location.href=window.location.href;
    </script>
    <?php
    
}
catch (mysqli_sql_exception $e) {
    echo "Error has occured: " . $e->getMessage();
}

}
?>



<?php

//second form

if (isset($_POST["submit2"])) {

$cycle = 0;
$count = 0;

try {
    $sql = "SELECT * FROM quiz WHERE topic='$quiz_topic' order by id asc";
    $response = mysqli_query($link,$sql);

    $count=mysqli_num_rows($response);
    if ($count!==0){
        while($row=mysqli_fetch_array($response)) {
            $cycle=$cycle+1;

            $sql1 = "UPDATE quiz SET question_no='$cycle' WHERE id=$row[id]";
            mysqli_query($link,$sql1);
        }
    }
    
}
catch (mysqli_sql_exception $e) {
    echo "Error has occured: " . $e->getMessage();
}

try {
    $cycle=$cycle+1;
    $tm = md5(time());

    $iquestion = filter_input(INPUT_POST, "iquestion", FILTER_SANITIZE_SPECIAL_CHARS);

    $imgname1 = $_FILES["ic1"]["name"];
    $dest1 = "./choice_images/".$tm.$imgname1;
    $dest_db1= "choice_images/".$tm.$imgname1;
    move_uploaded_file($_FILES["ic1"]["tmp_name"],$dest1);

    $imgname2 = $_FILES["ic2"]["name"];
    $dest2 = "./choice_images/".$tm.$imgname2;
    $dest_db2= "choice_images/".$tm.$imgname2;
    move_uploaded_file($_FILES["ic2"]["tmp_name"],$dest2);

    $imgname3 = $_FILES["ic3"]["name"];
    $dest3 = "./choice_images/".$tm.$imgname3;
    $dest_db3= "choice_images/".$tm.$imgname3;
    move_uploaded_file($_FILES["ic3"]["tmp_name"],$dest3);

    $imgname4 = $_FILES["ic4"]["name"];
    $dest4 = "./choice_images/".$tm.$imgname4;
    $dest_db4= "choice_images/".$tm.$imgname4;
    move_uploaded_file($_FILES["ic4"]["tmp_name"],$dest4);

    $imgname5 = $_FILES["ians"]["name"];
    $dest5 = "./choice_images/".$tm.$imgname5;
    $dest_db5= "choice_images/".$tm.$imgname5;
    move_uploaded_file($_FILES["ians"]["tmp_name"],$dest5);



    $sql2 = "INSERT INTO quiz VALUES(NULL, '$cycle', '$iquestion', '$dest_db1', '$dest_db2', '$dest_db3', '$dest_db4', '$dest_db5', '$quiz_topic')";
    mysqli_query($link,$sql2);

    ?>
    <script>
        alert("Question has been added!");
        window.location.href=window.location.href;
    </script>
    <?php
    
}
catch (mysqli_sql_exception $e) {
    echo "Error has occured: " . $e->getMessage();
}

}
?>

<script>
  const deleteLinks = document.querySelectorAll('.delete-question-link');

  deleteLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();

      if (confirm('Are you sure you want to delete this question?')) {
        const id = link.dataset.id;
        const topic = link.dataset.topic; 
        window.location.href = `delete_question.php?id=${id}&topic=${topic}`;
        }
    });
  });
</script>


