<?php

include "../connection.php";

$id = $_GET["id"];
$sql = "DELETE FROM quiz_topic WHERE id=$id";

mysqli_query($link, $sql);


?>

<script>
window.location.href =  "lessons.php";
</script>