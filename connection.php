<?php

$hostname = "localhost";
$username = "root";
$password = "";


try{
    $link = mysqli_connect($hostname,$username, $password);
    mysqli_select_db($link, "elearningapp");
}
catch(mysqli_sql_exception $e) {
    echo "Error occured: " . $e->getMessage();
}
if($link) {
    echo "DATABASE CONNECTED!";
}
?>