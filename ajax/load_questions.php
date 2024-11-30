<?php
session_start();

include "../connection.php";

$question_no = "";
$question = "";
$choice1 = "";
$choice2 = "";
$choice3 = "";
$choice4 = "";
$answer = "";
$count = 0;
$ans = "";

$ques_no = $_GET["question_no"];

if(isset($_SESSION["answer"][$ques_no])) {

    $ans= $_SESSION["answer"][$ques_no];
}

$sql = "SELECT * FROM quiz WHERE topic='$_SESSION[topic]' && question_no='$_GET[question_no]'";
$res = mysqli_query($link, $sql);
$count = mysqli_num_rows($res);

if ($count == 0) {
    echo "over";
}
else {
    while ($row= mysqli_fetch_array($res)) {
        $question_no = $row["question_no"];
        $question = $row["question"];
        $choice1 = $row["choice1"];
        $choice2 = $row["choice2"];
        $choice3 = $row["choice3"];
        $choice4 = $row["choice4"];
        
    }
    ?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">  
                <div>
                    <h3>Question <?php echo $question_no . ". " . $question;?></h3>
                </div>
                
                <div class="choices">
                    <label>
                        <input type="radio" name="q1" value="<?php echo $choice1; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>);"
                        <?php 
                            if($ans==$choice1) {
                                echo "checked";
                            }
                           
                        ?>>
                        <?php
                            if(strpos($choice1, 'images/')!=false) {
                                ?>
                                    <img src=admin/<?php echo $choice1; ?> height="100" width="100">
                                <?php
                            }
                            else {
                                ?><span><?php echo $choice1; ?></span><?php
                            }
                        ?>
                    </label>

                    <label>
                        <input type="radio" name="q1" value="<?php echo $choice2; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>);"
                        <?php 
                            if($ans==$choice2) {
                                echo "checked";
                            }
                           
                        ?>>
                        <?php
                            if(strpos($choice2, 'images/')!=false) {
                                ?>
                                    <img src=admin/<?php echo $choice2; ?> height="100" width="100">
                                <?php
                            }
                            else {
                                ?><span><?php echo $choice2; ?></span><?php
                            }
                        ?>
                    </label>

                    <label>
                        <input type="radio" name="q1" value="<?php echo $choice3; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>);"
                        <?php 
                            if($ans==$choice3) {
                                echo "checked";
                            }
                           
                        ?>>
                        <?php
                            if(strpos($choice3, 'images/')!=false) {
                                ?>
                                    <img src=admin/<?php echo $choice3; ?> height="100" width="100">
                                <?php
                            }
                            else {
                                ?><span><?php echo $choice3; ?></span><?php
                            }
                        ?>
                    </label>

                    <label>
                        <input type="radio" name="q1" value="<?php echo $choice4; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>);"
                        <?php 
                            if($ans==$choice4) {
                                echo "checked";
                            }
                           
                        ?>>
                        <?php
                            if(strpos($choice4, 'images/')!=false) {
                                ?>
                                    <img src=admin/<?php echo $choice4; ?> height="100" width="100">
                                <?php
                            }
                            else {
                                ?><span><?php echo $choice4; ?></span><?php
                            }
                        ?>
                    </label>
                </div>


    <?php
}
?>