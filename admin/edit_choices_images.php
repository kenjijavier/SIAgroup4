
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
            <h2>Edit question with image choices</span></h2>
            <form action="" name="form1" method="post" enctype="multipart/form-data">
                <label for="exam-category">Question:</label>
                <input type="text" name="iquestion" placeholder="Add a question" value="<?php echo $q; ?>">
                <hr>
                <div class="box">
                    <img src="<?php echo $c1; ?>" width="150" height="150" onerror="this.src='../images/icons8-unavailable-100.png'">
                    <label >Edit choice #1:</label>
                    <input type="file" name="ic1" accept="image/*">
                </div>
                <div class="box">
                    <img src="<?php echo $c2; ?>" width="150" height="150" onerror="this.src='../images/icons8-unavailable-100.png'">
                    <label >Edit choice #2:</label>
                    <input type="file" name="ic2" accept="image/*">
                </div>
                <div class="box">
                    <img src="<?php echo $c3; ?>" width="150" height="150" onerror="this.src='../images/icons8-unavailable-100.png'">
                    <label >Edit choice #3:</label>
                    <input type="file" name="ic3" accept="image/*">
                </div>
                <div class="box">
                    <img src="<?php echo $c4; ?>" width="150" height="150" onerror="this.src='../images/icons8-unavailable-100.png'">
                    <label >Edit choice #4:</label>
                    <input type="file" name="ic4" accept="image/*">
                </div>
                <div class="box">
                    <img src="<?php echo $an; ?>" width="150" height="150" onerror="this.src='../images/icons8-unavailable-100.png'">
                    <label >Edit answer:</label>
                    <input type="file" name="ians" accept="image/*">
                </div>

                <br><button type="submit" name="submit2">Save Changes</button>

            
            </form>
        </div>
    </div>
</div>

<?php

if(isset($_POST["submit2"])) {
    
$iquestion = filter_input(INPUT_POST, "iquestion", FILTER_SANITIZE_SPECIAL_CHARS);
$imgname1 = $_FILES["ic1"]["name"];
$imgname2 = $_FILES["ic2"]["name"];
$imgname3 = $_FILES["ic3"]["name"];
$imgname4 = $_FILES["ic4"]["name"];
$imgname5 = $_FILES["ians"]["name"];

$tm = md5(time());

$sql0 = "UPDATE quiz SET question = '$iquestion' WHERE id='$id'";
mysqli_query($link,$sql0);

if(!empty($imgname1)) {
    $dest1 = "./choice_images/".$tm.$imgname1;
    $dest_db1= "choice_images/".$tm.$imgname1;
    move_uploaded_file($_FILES["ic1"]["tmp_name"],$dest1);

    $sql = "UPDATE quiz SET choice1 = '$dest_db1' WHERE id='$id'";
    mysqli_query($link,$sql);
}
if(!empty($imgname2)) {
    $dest2 = "./choice_images/".$tm.$imgname2;
    $dest_db2= "choice_images/".$tm.$imgname2;
    move_uploaded_file($_FILES["ic2"]["tmp_name"],$dest2);

    $sql = "UPDATE quiz SET choice2 = '$dest_db2' WHERE id='$id'";
    mysqli_query($link,$sql);
}
if(!empty($imgname3)) {
    $dest3 = "./choice_images/".$tm.$imgname3;
    $dest_db3= "choice_images/".$tm.$imgname3;
    move_uploaded_file($_FILES["ic3"]["tmp_name"],$dest3);

    $sql = "UPDATE quiz SET choice3 = '$dest_db3' WHERE id='$id'";
    mysqli_query($link,$sql);
}
if(!empty($imgname4)) {
    $dest4 = "./choice_images/".$tm.$imgname4;
    $dest_db4= "choice_images/".$tm.$imgname4;
    move_uploaded_file($_FILES["ic4"]["tmp_name"],$dest4);

    $sql = "UPDATE quiz SET choice4 = '$dest_db4' WHERE id='$id'";
    mysqli_query($link,$sql);
}
if(!empty($imgname5)) {
    $dest5 = "./choice_images/".$tm.$imgname5;
    $dest_db5= "choice_images/".$tm.$imgname5;
    move_uploaded_file($_FILES["ians"]["tmp_name"],$dest5);

    $sql = "UPDATE quiz SET answer = '$dest_db1' WHERE id='$id'";
    mysqli_query($link,$sql);
}


$sql1 = "SELECT id FROM quiz_topic WHERE topic='$topic'";
$result = mysqli_query($link, $sql1);
if ($result) {
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $topic_id = $row['id'];
} else {
    
}
} else {
echo "Error: " . mysqli_error($link);
}

?>
<script type="text/javascript">
    window.location.href = "add_edit_quiz.php?id=" + <?php echo $topic_id; ?>;
</script>
<?php 

}
?>
