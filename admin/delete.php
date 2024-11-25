

<?php
session_start();
if(!isset($_SESSION["admin_username"])) {
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php
}
include "../connection.php";


$id = $_GET["id"];
$sql = "DELETE FROM quiz_topic WHERE id=$id";

$sql1 = "SELECT topic FROM quiz_topic WHERE id=$id";
$result = mysqli_query($link, $sql1);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $topic = $row['topic'];
    } else {
        echo "No records found for the given topic.";
    }
} else {
    echo "Error: " . mysqli_error($link);
}

$sql2 = "DELETE FROM quiz WHERE topic='$topic'";


mysqli_query($link, $sql);
mysqli_query($link, $sql2);

?>

<script>
window.location.href =  "lessons.php";
</script>