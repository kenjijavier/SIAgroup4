<?php

include "../connection.php";

$topic = "";
$id = $_GET["id"];
$sql = "SELECT * FROM quiz WHERE id='$id'";
$response = mysqli_query($link, $sql);
while($row=mysqli_fetch_array($response)) {
    $topic = $row["topic"];
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

try {
    $sql = "DELETE FROM quiz WHERE id = '$id'";
    mysqli_query($link, $sql); 
 }
 catch (mysqli_sql_exception $e) {
     echo "Error has occured " . $e->getMessage();
 }
?>
<script type="text/javascript">
    window.location.href = "add_edit_quiz.php?id=" + <?php echo $topic_id; ?>;
</script>