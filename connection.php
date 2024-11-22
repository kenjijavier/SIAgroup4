<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "elearningapp";

try{
    $link = mysqli_connect( $hostname,
                            $username,
                            $password,
                            $dbname);
}

//DEBUG
catch(mysqli_sql_exception $e) {
    echo "Error occured: " . $e->getMessage();
}
if($link) {
    //echo "DATABASE CONNECTED!";
}

if (!isset($_SESSION['username'])) {
    $user = "Guest";
}
else {
    $user = $_SESSION['username'];
}
?>