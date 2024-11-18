<?php
include "../connection.php";

$quiz_topic = $_GET("quiz_topic");
echo $quiz_topic;
$_SESSION["quiz_topic"]= $quiz_topic;

$sql = "SELECT * FROM quiz_topic WHERE topic = '$quiz_topic'";
$res = mysqli_query($link, $sql);

while($row = mysqli_fetch_array($res)) {
    $_SESSION["quiz_time"] = $row["time_minutes"];
}
$date = date("Y-m-d H:i:s");

$_SESSION["end_time"]= date("Y-m-d H:i:s", strtotime($date."+$_SESSION[quiz_minutes] minutes")); 
$_SESSION["quiz_start"] = "yes";
?>