<?php
session_start();
include "connection.php";
session_destroy();
?>

<script>
window.location.href =  "index.php";
</script>