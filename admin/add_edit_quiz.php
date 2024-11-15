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
            <h1>Quiz / <span class="quiz-topic-header"><?php echo $quiz_topic; ?></span></h1>
            <div class="box" id="quiz_add">
                <div class="add-exam">
                    <h2>Add question</h2>
                    <form action="" name="form1" method="post">
                    <label for="exam-category">Question:</label>
                    <input type="text" name="question" placeholder="Add a question" required>
                    <hr>
                    <label >Choice #1:</label>
                    <input type="text" name="c1" required>
                    <label >Choice #2:</label>
                    <input type="text" name="c2" required>
                    <label >Choice #3:</label>
                    <input type="text" name="c3" >
                    <label >Choice #4:</label>
                    <input type="text" name="c4" >
                    <label >Answer:</label>
                    <input type="text" name="ans" required>

                    <br><button type="submit" name="submit1">Add Question</button>

                    
                    </form>
                </div>

                <div class="add-exam">
                    <h2>Add question with image choices</span></h2>
                    <form action="" name="form1" method="post" enctype="multipart/form-data">
                    <label for="exam-category">Question:</label>
                    <input type="text" name="iquestion" placeholder="Add a question" required>
                    <hr>
                    <label >Choice #1:</label>
                    <input type="file" name="ic1" accept="image/*" required>
                    <label >Choice #2:</label>
                    <input type="file" name="ic2" accept="image/*" required>
                    <label >Choice #3:</label>
                    <input type="file" name="ic3" accept="image/*">
                    <label >Choice #4:</label>
                    <input type="file" name="ic4" accept="image/*">
                    <label >Answer:</label>
                    <input type="file" name="ians" accept="image/*" required>

                    <br><button type="submit" name="submit2">Add Question</button>

                    
                    </form>
                </div>


                
            </div>
            <div class="box" id="quiz_add">
                <div class="exam-categories" id="display-questions">
                        <h2><?php echo $quiz_topic; ?> Questions</h2>
                        <table>
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>A.</th>
                                <th>B.</th>
                                <th>C.</th>
                                <th>D.</th>
                                <th>Answer</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $number= 0;
                                    $sql = "SELECT * FROM quiz WHERE topic='$quiz_topic' order by id asc";
                                    $response = mysqli_query($link, $sql);
                                    
                                    while($row = mysqli_fetch_array($response)) {
                                        
                                    $number = $number+1;
                                    if(empty($row["choice1"])) {
                                        $row["choice1"] = "-";
                                    }
                                    if(empty($row["choice2"])) {
                                        $row["choice2"] = "-";
                                    }
                                    if(empty($row["choice3"])) {
                                        $row["choice3"] = "-";
                                    }
                                    if(empty($row["choice4"])) {
                                        $row["choice4"] = "-";
                                    }
                                ?>

                                    <tr>
                                        <td><?php echo $row["question_no"] ?></td>
                                        <td><?php echo $row["question"]; ?></td>
                                        <td>
                                            <?php
                                                if(strpos($row["choice1"], 'choice_images/')!==false) {
                                                    ?>
                                                        <img src="<?php echo $row["choice1"]; ?>" width="80" height="80" onerror="this.src='../images/icons8-unavailable-100.png'">
                                                    <?php
                                                }
                                                else {
                                                    echo $row["choice1"];
                                                }

                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if(strpos($row["choice2"], 'choice_images/')!==false) {
                                                    ?>
                                                        <img src="<?php echo $row["choice2"]; ?>" width="80" height="80" onerror="this.src='../images/icons8-unavailable-100.png'">
                                                    <?php
                                                }
                                                else {
                                                    echo $row["choice2"];
                                                }

                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if(strpos($row["choice3"], 'choice_images/')!==false) {
                                                    ?>
                                                        <img src="<?php echo $row["choice3"]; ?>" width="80" height="80" onerror="this.src='../images/icons8-unavailable-100.png'">
                                                    <?php
                                                }
                                                else {
                                                    echo $row["choice3"];
                                                }

                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if(strpos($row["choice4"], 'choice_images/')!==false) {
                                                    ?>
                                                        <img src="<?php echo $row["choice4"]; ?>" width="80" height="80" onerror="this.src='../images/icons8-unavailable-100.png'">
                                                    <?php
                                                }
                                                else {
                                                    echo $row["choice4"];
                                                }

                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if(strpos($row["answer"], 'choice_images/')!==false) {
                                                    ?>
                                                        <img src="<?php echo $row["answer"]; ?>" width="80" height="80" onerror="this.src='../images/icons8-unavailable-100.png'">
                                                    <?php
                                                }
                                                else {
                                                    echo $row["answer"];
                                                }

                                            ?>
                                        </td>
                                        <td><a href="edit_choices.php?id=<?php echo $row["id"]; ?>" class="edit-link"><img src="../images//icons8-edit-text-file-30.png" alt="Dashboard"></a></td>
                                        <td>
                                            <a href="#" class="delete-link" data-id="<?php echo $row['id']; ?>">
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
$question = filter_input(INPUT_POST, "question", FILTER_SANITIZE_SPECIAL_CHARS);
$choice1 = filter_input(INPUT_POST, "c1", FILTER_SANITIZE_SPECIAL_CHARS);
$choice2 = filter_input(INPUT_POST, "c2", FILTER_SANITIZE_SPECIAL_CHARS);
$choice3 = filter_input(INPUT_POST, "c3", FILTER_SANITIZE_SPECIAL_CHARS);
$choice4 = filter_input(INPUT_POST, "c4", FILTER_SANITIZE_SPECIAL_CHARS);
$answer = filter_input(INPUT_POST, "ans", FILTER_SANITIZE_SPECIAL_CHARS);


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

    $sql2 = "INSERT INTO quiz VALUES(NULL, '$cycle', '$question', '$choice1', '$choice2', '$choice3', '$choice4', '$answer', '$quiz_topic')";
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
  const deleteLinks = document.querySelectorAll('.delete-link');

  deleteLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();
      const id = link.dataset.id;

      if (confirm('Are you sure you want to delete this topic')) {
        
        window.location.href = `delete.php?id=${id}`;
      }
    });
  });
</script>
