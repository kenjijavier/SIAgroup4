<?php
session_start();

include "../connection.php";

$quiz_topic = $_GET["topic"];
$_SESSION["topic"] = $quiz_topic;

echo $quiz_topic;

$sql = "SELECT * FROM quiz_topic WHERE topic='$quiz_topic'";

$res = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($res)) {
    $_SESSION["quiz_time"] = $row["time_minutes"];
}

$date = date("Y-m-d H:i:s");
$currentTime = time();
$endTime = $currentTime + ($_SESSION["quiz_time"] * 60);
$_SESSION["end_time"] = date("Y-m-d H:i:s", $endTime);
$_SESSION["quiz_start"] = "yes";
?>

