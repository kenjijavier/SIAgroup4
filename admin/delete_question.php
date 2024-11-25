<?php
include "../connection.php";
$id = $_GET["id"];
$topic = $_GET["topic"];

$sql= "DELETE FROM quiz WHERE id = $id AND topic = '$topic'";
$sql1 = "SELECT * FROM quiz_topic WHERE topic = '$topic'";
$res = mysqli_query($link, $sql1);
while($row = mysqli_fetch_array($res)) {
    $topic_id = $row["id"];
}
mysqli_query($link, $sql);
?>

<script>
    window.location.href = "add_edit_quiz.php?id=<?php echo $topic_id ?>";
</script>