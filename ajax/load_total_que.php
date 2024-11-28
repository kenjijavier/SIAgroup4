
<?php
session_start();
include "../connection.php";

$total_questions = 0;

$sql = "SELECT * FROM quiz WHERE topic='$_SESSION[topic]'";
$res = mysqli_query($link, $sql);

$total_questions = mysqli_num_rows($res);
echo $total_questions;
?>